<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$data;
class Admin extends CI_Controller {
function Admin() {
		parent::__construct();	
		//session_start();
		$this->load->helper(array('form','url', 'text_helper'));
		$this->load->database();
		$this->load->library('session');
		//$this->load->model('admin_model');
	}

public function index(){
	$this->load->view('index_admin.php');
}
function layanan_admin(){
	$this->load->view('layanan_admin.php');
}
function keluhan_admin(){
	$this->load->model('admin_model');
	$data['query']=$this->admin_model->keluhan();
	$this->load->view('keluhan_admin.php', $data);
}

function hapus_keluhan(){
		$id_keluhan='';
		if ($this->uri->segment(3) === FALSE)
		{
    			$id_keluhan=$id_keluhan;
		}
		else
		{
    			$id_keluhan= $this->uri->segment(3);
		}
			$data = array();
			$this->load->model('admin_model');
			$this->admin_model->hapus_keluhan($id_keluhan);
	   		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/admin/keluhan_admin'>";
		
	}
	
function data_user(){
	$this->load->model('admin_model');
	$data['query']=$this->admin_model->data_user();
	$this->load->view('data_user.php', $data);
}

function hapus_user()
	{
		$id_user='';
		if ($this->uri->segment(3) === FALSE)
		{
    			$id_user=$id_user;
		}
		else
		{
    			$id_user = $this->uri->segment(3);
		}
			$data = array();
			$this->load->model('admin_model');
			$this->admin_model->delete_user($id_user);
	   		echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/admin/data_user'>";
		
	}
	
function notifikasi($username){
	$this->load->model('m_login');
    $user = $this->session->userdata('username');       
    $data['user'] = $this->m_login->dataPengguna($user);
	$this->load->model('user_model');
    $data['pengguna'] = $username;
	$this->load->view('notif_admin', $data);
}
	
}