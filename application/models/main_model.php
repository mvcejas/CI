<?php

class Main_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function category(){
		$query = $this->db->get('category');
		return $query->result();
	} 	
}