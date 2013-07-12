<?php

class Admin_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function category(){
		return $this->db->get('category')->result();
	} 	
}