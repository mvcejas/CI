<?php

class Main extends CI_Controller{
	
	public function index(){
		$this->load->model('Main_Model');

		$data['page_title'] = 'Home';
		$data['template'] = 'pages/home';
		$data['category'] = $this->Main_Model->category();

		$this->load->view('layouts/main',$data);
	}

	public function add_business(){
		$this->load->model('Main_Model');

		$data = array(
			'page_title' => 'Add Your Business',
			'template' => 'pages/add_business',
			'category' => $this->Main_Model->category()
		);

		$this->load->view('layouts/main',$data);
	}
}