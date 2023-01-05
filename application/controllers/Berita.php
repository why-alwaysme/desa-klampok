<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_berita');
	}

	public function index()
	{
		$data['title'] = 'Berita Klampok';
		$berita['berita'] = $this->Model_berita->get_berita();
		$berita['berita2'] = $this->Model_berita->get_berita2();

		$this->load->view('template/navbar2',$data);
		$this->load->view('v_berita', $berita);
		$this->load->view('template/footer');
	}

	public function Artikel($slug = NULL)
	{
		$berita['artikel'] = $this->Model_berita->get_artikel($slug);
		$data['title'] = $this->Model_berita->get_judul($slug);
		$berita['berita2'] = $this->Model_berita->get_berita2();

		$this->load->view('template/navbar2',$data);
		$this->load->view('v_artikel', $berita);
		$this->load->view('template/footer');
	}

}
