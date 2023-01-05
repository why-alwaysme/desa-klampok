<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posyandu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_posyandu');
	}

	public function index()
	{
		$data['jumlah'] = $this->Model_posyandu->jumlah_pendaftar();
		$data['info'] = $this->Model_posyandu->get_info();
		$data['title'] = "Posyandu";
		$this->load->view('template/navbar2', $data);
		$this->load->view('v_posyandu');
		$this->load->view('template/footer');
	}

	public function Daftar()
	{
		$validation = $this->form_validation;
		$validation->set_rules(
			'namapendaftar',
			'Nama',
			'required|trim',
			[
				'required' => 'Nama Tidak Boleh Kosong!'
			]
		);
		$validation->set_rules(
			'nohp',
			'Nomor HP',
			'required|trim|is_natural|is_unique[data_posyandu.nomor_hp]',
			[
				'required' => 'Nomor HP Tidak Boleh Kosong!',
				'is_natural' => 'Nomor HP Harus Angka!',
				'is_unique' => 'Nomor Sudah Terdaftar!'
			]
		);
		$validation->set_rules(
			'alamatpendaftar',
			'Alamat',
			'required|trim',
			[
				'required' => 'Alamat Tidak Boleh Kosong!'
			]
		);
		$validation->set_rules(
			'dusunpendaftar',
			'Dusun',
			'required',
			[
				'required' => 'Pilih Dusun!'
			]
		);

		if ($validation->run() == false) {
			$data['title'] = "Daftar Posyandu";
			$this->load->view('template/navbar2', $data);
			$this->load->view('v_daftar_posyandu');
			$this->load->view('template/footer');
			$this->session->set_flashdata('message', '<div class="alert text-center alert-danger" role="alert">
			Gagal Mendaftar Posyandu!
		  </div>');
		} else {
			$this->Model_posyandu->daftar();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Berhasil Mendaftar Posyandu!
		  </div>');
			redirect(site_url('Posyandu/Konfirmasi'));
		}
	}

	public function Konfirmasi()
	{
		$validation = $this->form_validation;
		$validation->set_rules(
			'cari',
			'Cari',
			'trim|is_natural',
			[
				'is_natural' => 'Harus Angka!'
			]
		);

		$cari = $this->input->post('cari');
		$validation->run();

		$this->data['query'] = $this->Model_posyandu->get_cari($cari);
		$data['title'] = "Konfirmasi Posyandu";

		$this->load->view('template/navbar2', $data);
		$this->load->view('v_konfirmasi_posyandu', $this->data, FALSE);
		$this->load->view('template/footer');
	}

	public function cetak($id_pendaftar)
	{
		$data['query'] = $this->Model_posyandu->cetak($id_pendaftar);
		$this->load->view('v_cetak.php', $data);
	}
}
