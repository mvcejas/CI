<?php

class Ajax extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Main_Model');
	}
}