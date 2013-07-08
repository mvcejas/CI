<?php

class User extends CI_Controller{
	
	public $defaults = array();

	public function __construct(){
		parent::__construct();
		$this->load->model('Main_Model');
		$this->defaults = array(
			'category' => $this->Main_Model->category()
		);
	}

	public function sign_up(){
		$options = array(
			'page_title' => 'Sign Up!',
			'template' => 'pages/signup'
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/main',$data);
	}

	public function login(){
		$options = array(
			'page_title' => 'Login',
			'template' => 'pages/login'
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/main',$data);
	}
}