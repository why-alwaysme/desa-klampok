<?php
class Model_posyandu extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->query("SELECT * FROM data_posyandu ORDER BY nama ASC");
        return $query->result();
    }

    public function cari_nama($cari)
    {
        $query = $this->db->query("SELECT * FROM data_posyandu WHERE nama LIKE '%$cari%' ");
        return $query->result();
    }

    public function get_cari($cari)
    {
        $query = $this->db->query("SELECT * FROM data_posyandu WHERE nomor_hp = '$cari' ");
        return $query->result();
    }

    public function cetak($id_pendaftar)
    {
        $query = $this->db->query("SELECT * FROM data_posyandu where id_pendaftar = '$id_pendaftar'");
        return $query->result();
    }

    public function jumlah_pendaftar()
    {
        $query = $this->db->query("SELECT * FROM data_posyandu");
        return $query->num_rows();
    }

    public function get_info()
    {
        $query = $this->db->query("SELECT * FROM posyandu WHERE id = '1' ");
        return $query->result();
    }

    public function daftar()
    {
        $nama = $this->input->post('namapendaftar', true);
        $nomor_hp = $this->input->post('nohp', true);
        $alamat = $this->input->post('alamatpendaftar');
        $dusun = $this->input->post('dusunpendaftar');
        $data = array(
            'nama' => $nama,
            'nomor_hp' => $nomor_hp,
            'alamat' => $alamat,
            'dusun' => $dusun
        );

        $this->db->set($data);
        $this->db->insert('data_posyandu');
    }

    function edit()
    {
        $tanggal = $this->input->post('tanggal');
        $tempat = $this->input->post('tempat');
        $about = $this->input->post('keterangan');
        $poster = $this->_posterupload();
        $data = array(
            'poster' => $poster,
            'about' => $about,
            'tanggal' => $tanggal,
            'tempat' => $tempat
        );

        $this->db->set($data);
        $this->db->where('id', 1);
        $this->db->update('posyandu');
    }

    private function _posterupload()
    {
        $config['upload_path']          = './upload/poster/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['file_name']            = "poster";
        $config['max_size']             = 25120;
        $config['overwrite']            = true;
        $this->load->helper('url', 'form');
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('poster')) {
            return $this->upload->data("file_name");
        } else {
            redirect($this->uri->uri_string());
        }
    }

    public function hapus($id_pendaftar)
    {
        $this->db->where('id_pendaftar', $id_pendaftar);
        $this->db->delete('data_posyandu');
    }
}
