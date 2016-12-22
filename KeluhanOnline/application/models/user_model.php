<?php
class User_model extends CI_Model{
		function User_model()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function keluhan(){
			$lihat = $this->db->get('keluhan');
			return $lihat->result();
		}
		
		function dataPengguna($id){
			$this->db->where('id_user',$id);
			$this->db->select("username");
			$this->db->from("user");
			return $this->db->get();
		}
}
?>		