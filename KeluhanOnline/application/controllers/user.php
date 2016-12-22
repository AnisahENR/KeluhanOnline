<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
function User() {
		parent::__construct();	
		//session_start();
		$this->load->helper(array('form','url', 'text_helper'));
		$this->load->database();
		$this->load->model('user_model');
		$this->load->library('session');
	}

public function index(){
	$this->load->view('form_login.php');
}

public function home(){
	$this->load->model('m_login');
    $user = $this->session->userdata('username');
    $data['level'] = $this->session->userdata('level');        
    $data['pengguna'] = $this->m_login->dataPengguna($user);
	$this->load->view('index.php', $data);
}


function keluhan(){
	$this->load->model('m_login');
    $user = $this->session->userdata('username');
    $data['level'] = $this->session->userdata('level');        
    $data['pengguna'] = $this->m_login->dataPengguna($user);
	$this->load->model('user_model');
	$data['query']=$this->user_model->keluhan();
	$this->load->view('form_keluhan.php', $data);
}

}