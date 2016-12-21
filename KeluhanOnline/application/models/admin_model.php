<?php
class Admin_model extends CI_Model{
		function admin_model()
		{
			parent::__construct();
			$this->load->database();
		}
		
		function Artikel(){//menampilkan artikel
			$q=$this->db->query("SELECT * from news");
			return $q->result_array();
		}	
		
		function Simpan_artikel($data){//menyimpan artikel
			$s=$this->db->insert("news",$data);
			return $s;
		}
		
		function editartikel($tabel){//mengedit artikel
			$this->db->where('id',$tabel);
			$this->db->select("*");
			$this->db->from("news");
			return $this->db->get();
		}
		
		
		function update_artikel($data2,$id){ //mengupdate artikel
			$this->db->where($id);
			$this->db->update('news',$data2);
		}
		
		
		
		function data_user(){
			$lihat = $this->db->get('user');
			return $lihat->result();
		}
		
		function delete_user($id){ //menghapus user
			$this->db->where('id_user',$id);
			$this->db->delete('user');
		}

		function keluhan(){
			$lihat = $this->db->get('keluhan');
			return $lihat->result();
		}
		
		function hapus_keluhan($id){ //menghapus artikel
			$this->db->where('id_keluhan',$id);
			$this->db->delete('keluhan');
		}

		function data_ktp(){
			$lihat = $this->db->get('dataktp');
			return $lihat->result();
		}
		
		function data_kk(){
			$lihat = $this->db->get('datakk');
			return $lihat->result();
		}
		

}
?>		