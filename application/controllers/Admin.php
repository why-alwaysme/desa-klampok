<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_login_admin');
        $this->load->model('Model_posyandu');
        $this->load->model('Model_air');
        $this->load->model('Model_berita');
    }

    public function index()
    {
        $validation = $this->form_validation;
        $validation->set_rules('user', 'Username', 'trim|required');
        $validation->set_rules('pass', 'Password', 'trim|required');

        if ($validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('Admin/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        $user = $this->Model_login_admin->get($username);

        if (!$user) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Username Salah!
		    </div>');
            redirect('Admin');
        } else {
            if ($password != $user->password_admin) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Password Salah!
		    </div>');
                redirect('Admin');
            } else {
                $session = array(
                    'authenticated' => true,
                    'id' => $user->id,
                    'username' => $user->username_admin
                );
                $this->session->set_userdata($session);
                $this->session->set_userdata(['user_logged' => $user]);
                if ($user->id == '1') {
                    redirect('Admin/Dashboard');
                } else {
                    redirect('Admin/Dashboard2');
                }
            }
        }
    }

    public function Dashboard()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        }
        $data['jumlah'] = $this->Model_posyandu->jumlah_pendaftar();
        $data['artikel'] = $this->Model_berita->jumlah_artikel();
        $data['title'] = 'Admin';
        $this->load->view('Admin/v_dashboard', $data);
    }

    public function Dashboard2()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        }
        $data['jumlah'] = $this->Model_air->jumlah_pesanan();
        $data['diproses'] = $this->Model_air->pesanan_diproses();
        $data['ditunda'] = $this->Model_air->pesanan_ditunda();
        $data['title'] = 'Air Klampok';
        $this->load->view('Admin/v_dashboard2', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Anda berhasil Logout!
		    </div>');
        redirect('Admin');
    }

    public function Posyandu()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        } else {

            $data['info'] = $this->Model_posyandu->get_info();
            $data['jumlah'] = $this->Model_posyandu->jumlah_pendaftar();
            $data['judul'] = 'Informasi Posyandu';
            $this->load->view('Admin/v_posyandu', $data);
        }
    }

    public function Data_Posyandu()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        } else {

            $cari = $this->input->post('cari');
            if ($cari != '') {
                $data['query'] = $this->Model_posyandu->cari_nama($cari);

                $data['title'] = "Data Posyandu";
                $this->load->view('Admin/v_data_posyandu', $data);
            } else {
                $data['query'] = $this->Model_posyandu->get_data();

                $data['title'] = "Data Posyandu";
                $this->load->view('Admin/v_data_posyandu', $data);
            }
        }
    }

    public function Hapuss($id_pendaftar)
    {
        $this->Model_posyandu->hapus($id_pendaftar);
        redirect('Admin/Data_Posyandu');
    }

    public function Edit()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        } else {
            $validation = $this->form_validation;
            $validation->set_rules(
                'tanggal',
                'Tanggal',
                'required|trim',
                [
                    'required' => 'Tanggal Tidak Boleh Kosong!'
                ]
            );
            $validation->set_rules(
                'tempat',
                'Tempat',
                'required|trim',
                [
                    'required' => 'Tempat Tidak Boleh Kosong!'
                ]
            );
            $validation->set_rules(
                'keterangan',
                'Keterangan',
                'required|trim',
                [
                    'required' => 'Beri Keterangan Posyandu!'
                ]
            );
            if ($validation->run() == false) {
                $data['info'] = $this->Model_posyandu->get_info();
                $this->load->view('Admin/v_edit', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Gagal Update Posyandu!
                </div>');
            } else {
                $this->Aksi_edit();
            }
        }
    }

    public function Aksi_edit()
    {
        if (isset($_POST['update'])) {
            $this->Model_posyandu->edit();
            redirect('Admin/Posyandu');
        }
    }

    public function Informasi_air()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        } else {
            $data['data'] = $this->Model_air->info_air();
            $data['judul'] = 'Informasi Air';
            $this->load->view('Admin/v_air', $data);
        }
    }

    public function Edit2()
    {
        $this->Model_air->edit_info();
        redirect('Admin/Informasi_air');
    }

    public function Data_air()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda belum Login!
		    </div>');
            redirect('Admin');
        } else {

            $cari = $this->input->post('cari');
            if ($cari != '') {
                $data['query'] = $this->Model_air->cari_nama($cari);

                $data['judul'] = 'Data Pemesanan Air';
                $this->load->view('Admin/v_data_air', $data);
            } else {
                $data['query'] = $this->Model_air->get_data();

                $data['judul'] = 'Data Pemesanan Air';
                $this->load->view('Admin/v_data_air', $data);
            }
        }
    }

    public function Lunas($nomor_tagihan)
    {
        $this->Model_air->lunas($nomor_tagihan);
        redirect('Admin/Data_air');
    }

    public function Hapus($nomor_tagihan)
    {
        $this->Model_air->hapus($nomor_tagihan);
        redirect('Admin/Data_air');
    }

    public function Invoice($nomor_tagihan)
    {
        $data['data'] = $this->Model_air->bayar($nomor_tagihan);
        $data['judul'] = 'Invoice';
        $this->load->view('Admin/v_invoice', $data);
    }

    public function Laporan()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Anda belum Login!
            </div>');
            redirect('Admin');
        }else {
        $data['query'] = $this->Model_air->get_data();
        $data['judul'] = 'Laporan Penjualan';
        $this->load->view('Admin/v_eksport', $data);
        }
    }

    public function Berita()
    {
            if ($this->Model_login_admin->isNotLogin()) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda belum Login!
                </div>');
                redirect('Admin');
            } else {
                $cari = $this->input->post('cari');

                if ($cari != '') {
                $data['artikel'] = $this->Model_berita->cari_judul($cari);

                $data['title'] = 'Daftar Berita Klampok';
                $this->load->view('Admin/v_berita', $data);
            } else {
                $data['artikel'] = $this->Model_berita->get_berita();

                $data['title'] = 'Daftar Berita Klampok';
                $this->load->view('Admin/v_berita', $data);
            }
            }

    }

    public function Buat_Berita()
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Anda belum Login!
            </div>');
            redirect('Admin');
        } else{

            $validation = $this->form_validation;
            $validation->set_rules(
                'judul',
                'Judul',
                'required|trim',
                [
                    'required' => 'Judul Tidak Boleh Kosong!'
                ]
            );
            $validation->set_rules(
                'dusun',
                'Dusun',
                'required|trim',
                [
                    'required' => 'Dusun Tidak Boleh Kosong!'
                ]
            );
    
            if ($validation->run() == false) {
                $this->load->view('Admin/v_buat_berita');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Gagal Membuat Artikel!
              </div>');
            } else {
                $this->Model_berita->buat_berita();
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil Membuat Artikel!
              </div>');
                redirect(site_url('Admin/Berita'));
            }
        }
    }


    public function Hapus3($id)
    {
        if ($this->Model_login_admin->isNotLogin()) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Anda belum Login!
            </div>');
            redirect('Admin');
        } else{

            $this->Model_berita->hapus($id);
            redirect('Admin/Berita');
        }
    }
    
}
