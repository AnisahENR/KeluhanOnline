<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class M_regis extends CI_Model{
	public function __construct(){
	parent::__construct();
	}
	
public function insert($data) {

// Query to check whether username already exist or not
	$condition = "username =" . "'" . $data['username'] . "'";
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();
	if ($query->num_rows() == 0) {

// Query to insert data in database
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		}
		} else {
		return false;
}
}
}
?>