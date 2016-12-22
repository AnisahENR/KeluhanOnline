<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class M_Notifikasi extends CI_Model{
	public function __construct(){
	parent::__construct();
	}
	public function insert($data) {
		$this->db->insert('notifikasi', $data);
}

		function notifikasi($username){
			$this->db->where('nama_penerima',$username);
			$this->db->select("*");
			$this->db->from("notifikasi");
			return $this->db->get();
		}


}
?>