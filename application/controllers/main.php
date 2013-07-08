<?php

class Main extends CI_Controller{
	
	public $defaults = array();

	public function __construct(){
		parent::__construct();
		$this->load->model('Main_Model');
		$this->defaults = array(
			'category' => $this->Main_Model->category()
		);
	}

	public function index(){
		$options = array(
			'page_title' => 'Happy Trip!',
			'template' => 'pages/home'
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/main',$data);
	}

	public function add_business(){
		$options = array(
			'page_title' => 'Add Your Business',
			'template' => 'pages/add_business',
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/main',$data);

	}
}