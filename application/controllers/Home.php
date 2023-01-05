<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_berita');
	}
	
	public function index()
	{
		$data['title'] = 'Desa Klampok';
		$data['berita2'] = $this->Model_berita->get_berita2();

		$this->load->view('v_home', $data);
	}

	public function KKN()
	{
		$data['title'] = 'Tentang Kami';
        $this->load->view('template/navbar2', $data);
        $this->load->view('v_kkn');
        $this->load->view('template/footer');
	}
	
	public function Profil()
	{
		$data['title'] = 'Struktur Pengurus Desa';
        $this->load->view('template/navbar2', $data);
        $this->load->view('v_profil');
        $this->load->view('template/footer');
	}
}
