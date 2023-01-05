<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Air extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_air');
    }
    public function index()
    {

        $validation = $this->form_validation;
        $validation->set_rules(
            'cari',
            'Nomor HP',
            'trim|is_natural',
            [
                'is_natural' => 'Harus Angka!'
            ]
        );
        $cari = $this->input->post('cari');
        $validation->run();
        $this->data['info'] = $this->Model_air->info_air();
        $this->data['query'] = $this->Model_air->get_cari($cari);
        $data['title'] = 'Air Klampok';

        $this->load->view('template/navbar2', $data);
        $this->load->view('v_air', $this->data);
        $this->load->view('template/footer');
    }

    public function Pesan()
    {
        $validation = $this->form_validation;
        $validation->set_rules(
            'namapemesan',
            'Nama',
            'required|trim',
            [
                'required' => 'Nama Tidak Boleh Kosong!'
            ]
        );
        $validation->set_rules(
            'nohp',
            'Nomor HP',
            'required|trim|is_natural',
            [
                'required' => 'Nomor HP Tidak Boleh Kosong!',
                'is_natural' => 'Nomor HP Harus Angka!'
            ]
        );

        if ($validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Gagal Membuat Pesanan!
		  </div>');
            redirect('Air');
        } else {
            $this->Model_air->pesan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Berhasil Membuat Pesanan!
		  </div>');
            redirect('Air');
        }
    }

    public function Pembayaran($nomor_tagihan)
    {
        $query['data'] = $this->Model_air->bayar($nomor_tagihan);
        $query['info'] = $this->Model_air->info_air();
        $data['title'] = 'Pembayaran';
        $this->load->view('template/navbar2', $data);
        $this->load->view('v_checkout', $query);
        $this->load->view('template/footer');
    }
}
