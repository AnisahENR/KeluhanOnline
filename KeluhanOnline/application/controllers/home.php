<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->library(array('session'));
     $this->load->helper('url');
     $this->load->model('m_login');
     $this->load->database();
   }
  
  
  public function index()
  {
    if($this->session->userdata('isLogin') == FALSE)
    {
      redirect('login/login_form');
    }else
    {
    
      $this->load->model('m_login');
      
      $user = $this->session->userdata('username');
      
      $data['level'] = $this->session->userdata('level');        
      $data['pengguna'] = $this->m_login->dataPengguna($user);
      
	  if($data['level'] == 1){
      $this->load->view('index_admin', $data);
      } else {
	  $this->load->view('index', $data);
	  }
	 }
  } 
}
?>