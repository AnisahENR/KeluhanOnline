<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifikasi extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->model('m_notifikasi');
	$this->load->model('m_login');
	$this->load->library(array('form_validation'));
	$this->load->database();
	$this->load->helper('url');
	$this->load->library('session');
	}

public function view(){
	$this->load->model('m_login');
    $user = $this->session->userdata('username');    
    $data['pengguna'] = $this->m_login->dataPengguna($user);

	$this->load->model('m_notifikasi');    
    $data['notif'] = $this->m_notifikasi->notifikasi($user);
	$this->load->view('view_notifikasi', $data);
}

public function form_notifikasi(){
	$this->form_validation->set_rules('admin', 'Dari', 'required|trim|xss_clean');
	$this->form_validation->set_rules('user', 'Kepada', 'required|trim|xss_clean');
	$this->form_validation->set_rules('pesan', 'Pesan', 'required|trim|xss_clean');
	$this->form_validation->set_rules('tanggal', 'Tanggal Ambil', 'required|trim|xss_clean');
	
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('notif_admin');
	} else {
				$data['nama_pengirim']=$this->input->post('admin');
				$data['nama_penerima']=$this->input->post('user');
				$data['pesan']=$this->input->post('pesan');
				$data['tanggal_ambil']=$this->input->post('tanggal');
				
				$this->m_notifikasi->insert($data);
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."index.php/admin/home'>";
			
		}	
}

}

?>