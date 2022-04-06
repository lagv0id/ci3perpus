<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('muser');
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
    }

    public function index()
    {
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('dashboard'));
        } else {
            $this->load->view('v_login');
        }
    }

    public function auth()
    {
        $email = $this->input->post('email');
        $pwd = $this->input->post('password');
        $auth = $this->muser->auth($email, $pwd);
        if ($auth) {
            $sesi = $this->muser->get_email($email);
            $this->session->set_userdata($sesi);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Username atau password salah !');
            $sesi = array('flag' => '1');
            $this->session->set_userdata($sesi);
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
