<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keluhan extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->model('m_keluhan');
	$this->load->library(array('form_validation'));
	$this->load->database();
	$this->load->helper('url');
	}

public function index(){
	$this->load->view('form_login');
	}

public function form_keluhan(){
	$this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
	$this->form_validation->set_rules('keluhan', 'keluhan', 'Keluhan', '|trim|xss_clean');
	
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('form_keluhan');
	} else {
		$data = array();
		$data['username']=$this->input->post('username');
		$data['keluhan']=$this->input->post('keluhan');

		$result = $this->m_keluhan->insert($data);
		if ($result == TRUE) {
		$data['message_display'] = 'Berhasil Menyimpan Data!';
		$this->load->view('form_keluhan', $data);
	} else {
		$data['message_display'] = 'Nama sudah terdapat di dalam database';
		$this->load->view('form_keluhan', $data);
	}
		//$cek = $this->m_login->takeUser($username, $password,$level);
		
		if($cek <> 0){
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('username',$username);
			$this->session->set_userdata('level',$level);
			redirect('home');
		}else{
			echo " <script>alert('Failed Login: Check your username and password!');
			history.go(-1);
			</script>";
		}
	}
}
//function albums(){
//	$this->load->model('maroon5_model');
//	$data['query']=$this->maroon5_model->db_album();
//	$this->load->view('albums.php', $data);
//}
//
//function news(){
//	$this->load->model('maroon5_model');
//	$data['query']=$this->maroon5_model->news();
//	$this->load->view('news.php', $data);
//}
//
//function member_view(){
//	$this->load->view('member_view.php');
//}
//
//function signin(){
//	$this->load->view('form_login.php');
//}
//
//function admin_page(){
//	$this->load->view('admin_page.php');
//}
//
//function member_page(){
//	$this->load->view('member_page.php');
//}	
//
//function readmore(){
//	$this->load->view('readmore.php');
//}

}