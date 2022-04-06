<?php

class muser extends CI_Model
{

	function __construct()
	{
		$this->load->database();
	}

	public function get_user()
	{
		return $this->db->get('users')->result_array();
	}

	public function get_detail($x)
	{
		$this->db->where('id', $x);
		return $this->db->get('users')->row_array();
	}

	function insert($a, $profpic)
	{
		$data = [
			'nama' => $a['nama'],
			'email' => $a['email'],
			'password' => password_hash($a['password'], PASSWORD_BCRYPT),
			'alamat' => $a['alamat'],
			'telp' => $a['telp'],
			'profpic' => $profpic
		];
		return $this->db->insert('users', $data);
	}

	function update($x, $id, $profpic = null)
	{
		if ($profpic == 1) {
			$data = [
				'profpic' => $x
			];
		} else {
			$data = [
				'nama' => $x['nama'],
				'email' => $x['email'],
				'password' => password_hash($x['password'], PASSWORD_BCRYPT),
				'alamat' => $x['alamat'],
				'telp' => $x['telp'],
			];
		}
		$this->db->where('id', $id);
		return $this->db->update('users', $data);
	}

	function auth($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
		if ($this->db->get('users')->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_email($x)
	{
		$this->db->where('email', $x);
		return $this->db->get('users')->row_array();
	}
}
