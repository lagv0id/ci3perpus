<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('muser');
		$this->load->library(array('form_validation', 'email', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if ($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['list'] = $this->muser->get_user();
		$this->load->view('user/vuser', $data);
	}

	public function detail($x)
	{
		$data['detail'] = $this->muser->get_detail($x);
		$this->load->view('user/vdetail', $data);
	}

	public function add()
	{
		$this->load->view('user/vadd');
	}

	public function insert()
	{
		$profpic = $_FILES['profpic']['name'];
		$config = [
			'upload_path' => "./assets/img/users/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000"
		];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('profpic');
		if ($this->muser->insert($this->input->post(), $profpic)) {
			$this->session->set_flashdata('pesan', 'Data user berhasil ditambah');
			redirect(base_url('user'));
		}
	}

	public function edit($x)
	{
		$data['detail'] = $this->muser->get_detail($x);
		$this->load->view('user/vedit', $data);
	}

	public function update($id)
	{
		$profpic = $_FILES['profpic']['name'];
		$config = [
			'upload_path' => "./assets/img/user/",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000"
		];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('profpic')) {
			$this->muser->update($profpic, $id, 1);
		}
		if ($this->muser->update($this->input->post(), $id)) {
			$this->session->set_flashdata('pesan', 'Data user berhasil diubah');
			redirect(base_url('user'));
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		if ($this->db->delete('users')) {
			$this->session->set_flashdata('pesan', 'Data user berhasil dihapus');
			redirect(base_url('user'));
		}
	}
}
