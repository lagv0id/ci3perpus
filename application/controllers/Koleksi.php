<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mkoleksi');
		$this->load->library(array('form_validation', 'email', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if ($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['list'] = $this->mkoleksi->get_koleksi();
		$this->load->view('koleksi/vkoleksi', $data);
	}

	public function detail($x)
	{
		$data['detail'] = $this->mkoleksi->get_detail($x);
		$this->load->view('koleksi/vdetail', $data);
	}

	public function add()
	{
		$this->load->view('koleksi/vadd');
	}

	public function insert()
	{
		$cover = $_FILES['cover']['name'];
		$config = [
			'upload_path' => "./assets/img/koleksi/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000"
		];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('cover');
		if ($this->mkoleksi->insert($this->input->post(), $cover)) {
			$this->session->set_flashdata('pesan', 'Data berhasil ditambah');
			redirect(base_url('koleksi'));
		}
	}

	public function edit($x)
	{
		$data['detail'] = $this->mkoleksi->get_detail($x);
		$this->load->view('koleksi/vedit', $data);
	}

	public function update($id)
	{
		$cover = $_FILES['cover']['name'];
		$config = [
			'upload_path' => "./assets/img/koleksi/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000"
		];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('cover')) {
			$this->mkoleksi->update($cover, $id, 1);
		}
		if ($this->mkoleksi->update($this->input->post(), $id)) {
			$this->session->set_flashdata('pesan', 'Data berhasil diubah');
			redirect(base_url('koleksi'));
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete('koleksi')) {
			$this->session->set_flashdata('pesan', 'Data berhasil dihapus');
			redirect(base_url('koleksi'));
		}
	}

	public function pinjam()
	{
		$data['dataku'] = $this->mkoleksi->tampil_data();
		$this->load->view('koleksi/vpinjam', $data);
	}
}
