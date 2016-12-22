<?php

if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');

class M_keluhan extends CI_Model{
	public function __construct(){
	parent::__construct();
	}
	
public function insert($data) {

		$this->db->insert('keluhan', $data);
		if ($this->db->affected_rows() > 0) {
		return true;
		} else {
		return false;
}
}

}