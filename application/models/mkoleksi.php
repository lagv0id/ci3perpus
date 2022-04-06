<?php

class mkoleksi extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function get_koleksi()
    {
        return $this->db->get('koleksi')->result_array();
    }

    public function get_detail($x)
    {
        $this->db->where('id', $x);
        return $this->db->get('koleksi')->row_array();
    }

    function insert($a, $cover)
    {
        $data = [
            'judul' => $a['judul'],
            'jenis' => $a['jenis'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            'tahun' => $a['tahun'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksi', $data);
    }

    function update($a, $id, $cover = null)
    {
        if ($cover == 1) {
            $data = [
                'cover' => $a
            ];
        } else {
            $data = [
                'judul' => $a['judul'],
                'jenis' => $a['jenis'],
                'penerbit' => $a['penerbit'],
                'penulis' => $a['penulis'],
                'tahun' => $a['tahun']
            ];
        }
        $this->db->where('id', $id);
        return $this->db->update('koleksi', $data);
    }

    function pinjam($idbuku)
    {
        $date = date('Y-m-d');
        $returndate = date('Y-m-d', strtotime($date . "+1 weeks"));
        $query = $this->db->query("SELECT judul FROM koleksi WHERE id=$idbuku");
        $data = [
            'nama' => $this->session->userdata('nama'),
            'judul' => $query,
            'tgl_pinjam' => $date,
            'tgl_kembali' => $returndate
        ];
        return $this->db->insert('peminjaman', $data);
    }

    function tampil_data()
    {
        $query = $this->db->get('koleksi');
        return $query;
    }
}
