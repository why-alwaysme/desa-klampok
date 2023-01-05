<?php

class Model_berita extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function buat_berita()
    {
        $this->load->helper('url');

        $judul = $this->input->post('judul');
        $slug = url_title($this->input->post('judul'), 'dash', TRUE);
        $gambar = $this->_gambarupload();
        $isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');
        $dusun = $this->input->post('dusun');

        $data = array(
            'judul' => $judul,
            'slug' => $slug,
            'gambar' => $gambar,
            'isi' => $isi,
            'tanggal' => $tanggal,
            'dusun' => $dusun
        );

        $this->db->insert('artikel', $data);

    }

    public function cari_judul($cari)
    {
        $artikel = $this->db->query("SELECT * FROM artikel WHERE judul LIKE '%$cari%' ");
        return $artikel->result();
    }

    private function _gambarupload()
    {
        $nama = $this->input->post('no_gambar');
        $config['upload_path']          = './upload/artikel/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = "artikel_" . $nama;
        $config['max_size']             = 25120;
        $config['overwrite']            = false;
        $this->load->helper('url', 'form');
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        } else {
            redirect($this->uri->uri_string());
        }
    }

    public function get_berita()
    {
        $artikel = $this->db->query("SELECT * FROM artikel ORDER BY id DESC ");
        return $artikel->result();
    }

    public function get_berita2()
    {
        $artikel = $this->db->query("SELECT * FROM artikel ORDER BY id DESC LIMIT 3");
        return $artikel->result();
    }

    public function get_artikel($slug)
    {
        if($slug === FALSE)
        {
            $query = $this->db->get('artikel');
            return $query->result_array();
        }

        $query = $this->db->get_where('artikel', array('slug'=>$slug) );
        return $query->result();

       // $artikel = $this->db->query("SELECT * FROM artikel WHERE id = $id");
        //return $artikel->result();
    }

    public function get_judul($slug)
    {

        $query = $this->db->get_where('artikel', array('slug'=>$slug));
        return $query->row()->judul;

    }

    public function jumlah_artikel()
    {
        $artikel = $this->db->query("SELECT * FROM artikel");
        return $artikel->num_rows();
    }

    public function hapus($id)
    {
        $this->load->helper('file');
        $data = $this->db->query("SELECT gambar from artikel where id = $id");
        $query = $data->row();
        $gambar = $query->gambar;
        $dir = "./upload/artikel/$gambar";
        unlink($dir);

        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }

}