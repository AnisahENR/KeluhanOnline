<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Registrasi extends CI_Controller{
	public function __construct(){
	parent::__construct();
	$this->load->model('m_regis');
	$this->load->library(array('form_validation','session'));
	$this->load->database();
	$this->load->helper('url');
	}

public function regis_form() {
	$this->load->view('form_regis');
}

public function regis_form_process(){
// Check validation for user input in SignUp form
	$this->form_validation->set_rules('name', 'Nama', 'trim|required|xss_clean');
	$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
	$this->form_validation->set_rules('password', 'Password', 'md5|required|xss_clean');
	//$this->form_validation->set_rules('level', 'Level', 'trim|required|xss_clean');
		
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('form_regis');
	} else {
		$data = array(
		'name' => $this->input->post('name'),
		'username' => $this->input->post('username'),
		'email' => $this->input->post('email'),
		'password' => $this->input->post('password'),
		'level' => $this->input->post('2'));
//		'status' => $this->input->post("1"));
		
	$result = $this->m_regis->insert($data);
		if ($result == TRUE) {
		$data['message_display'] = 'Registration Successfully !';
		$this->load->view('form_login', $data);
	} else {
		$data['message_display'] = 'Username already exist!';
		$this->load->view('form_regis', $data);
	}
}
}
}
?>