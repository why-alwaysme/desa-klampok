<?php

class Model_air extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function pesan()
    {
        $no_tagihan = $this->input->post('nomortagihan');
        $nama = $this->input->post('namapemesan', true);
        $nomor_hp = $this->input->post('nohp', true);
        $isi_ulang = $this->input->post('isiulang');
        $air_galon = $this->input->post('paketgalon');
        $tagihan = $this->input->post('totaltagihan');
        $status = 'BELUM BAYAR';
        $data = array(
            'nomor_tagihan' => $no_tagihan,
            'nama_pemesan' => $nama,
            'nomor_hp' => $nomor_hp,
            'isi_ulang' => $isi_ulang,
            'air_galon' => $air_galon,
            'total' => $tagihan,
            'status' => $status
        );

        $this->db->set($data);
        $this->db->insert('data_pemesanan');
    }

    public function info_air()
    {
        $query = $this->db->query("SELECT * FROM info_air WHERE id = '1' ");
        return $query->result();
    }

    public function edit_info()
    {
        $alamat = $this->input->post('alamat');
        $nomor_wa = $this->input->post('nomor_wa');
        $harga_air = $this->input->post('harga_air');
        $harga_galon = $this->input->post('harga_galon');
        $nama_bca = $this->input->post('nama_bca');
        $nomor_bca = $this->input->post('nomor_bca');
        $nama_bni = $this->input->post('nama_bni');
        $nomor_bni = $this->input->post('nomor_bni');
        $nama_mandiri = $this->input->post('nama_mandiri');
        $nomor_mandiri = $this->input->post('nomor_mandiri');
        $nama_dana = $this->input->post('nama_dana');
        $nomor_dana = $this->input->post('nomor_dana');
        $nama_ovo = $this->input->post('nama_ovo');
        $nomor_ovo = $this->input->post('nomor_ovo');
        $nama_gopay = $this->input->post('nama_gopay');
        $nomor_gopay = $this->input->post('nomor_gopay');
        $nama_shopee = $this->input->post('nama_shopee');
        $nomor_shopee = $this->input->post('nomor_shopee');
        $data = array(
            'alamat' => $alamat,
            'nomor_wa' => $nomor_wa,
            'harga_air' => $harga_air,
            'harga_air_galon' => $harga_galon,
            'nama_bca' => $nama_bca,
            'nomor_bca' => $nomor_bca,
            'nama_bni' => $nama_bni,
            'nomor_bni' => $nomor_bni,
            'nama_mandiri' => $nama_mandiri,
            'nomor_mandiri' => $nomor_mandiri,
            'nama_dana' => $nama_dana,
            'nomor_dana' => $nomor_dana,
            'nama_ovo' => $nama_ovo,
            'nomor_ovo' => $nomor_ovo,
            'nama_gopay' => $nama_gopay,
            'nomor_gopay' => $nomor_gopay,
            'nama_shopee' => $nama_shopee,
            'nomor_shopee' => $nomor_shopee
        );
        $this->db->set($data);
        $this->db->where('id', 1);
        $this->db->update('info_air');
    }

    public function get_data()
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan ORDER BY nama_pemesan ASC");
        return $query->result();
    }

    public function cari_nama($cari)
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan WHERE nama_pemesan LIKE '%$cari%' ");
        return $query->result();
    }

    public function jumlah_pesanan()
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan");
        return $query->num_rows();
    }

    public function pesanan_diproses()
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan WHERE status = 'LUNAS' ");
        return $query->num_rows();
    }
    public function pesanan_ditunda()
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan WHERE status = 'BELUM BAYAR' ");
        return $query->num_rows();
    }

    public function get_cari($cari)
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan WHERE nomor_hp = '$cari' ");
        return $query->result();
    }

    public function lunas($nomor_tagihan)
    {
        $this->db->set('status', 'LUNAS');
        $this->db->where('nomor_tagihan', $nomor_tagihan);
        $this->db->update('data_pemesanan');
    }

    public function hapus($nomor_tagihan)
    {
        $this->db->where('nomor_tagihan', $nomor_tagihan);
        $this->db->delete('data_pemesanan');
    }

    public function bayar($nomor_tagihan)
    {
        $query = $this->db->query("SELECT * FROM data_pemesanan WHERE nomor_tagihan = $nomor_tagihan");
        return $query->result();
    }
}
