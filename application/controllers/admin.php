<?php

class Admin extends CI_Controller{
	
	public $defaults = array();

	public function __construct(){
		parent::__construct();
		$this->defaults = array(
			'page_name' => 'Dashboard',
		);
	}

	public function index(){
		redirect(base_url('admin/home'));
	}

	public function home(){
		$options = array(
			'page_title' => 'Admin Dashboard',
			'template' => 'pages/home',
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/admin',$data);

	}

	public function access_admin(){
		$options = array(
			'page_title' => 'Access &raquo; Admins',
			'page_name' => 'Access / Admin',
			'template' => 'pages/home',
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/admin',$data);
	}

	public function access_venue(){
		$options = array(
			'page_title' => 'Access &raquo; Venue',
			'page_name' => 'Access / Venue',
			'template' => 'pages/home',
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/admin',$data);
	}

	public function access_promoter(){
		$options = array(
			'page_title' => 'Access &raquo; Promoter',
			'page_name' => 'Access / Promoter',
			'template' => 'pages/home',
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/admin',$data);
	}

	public function report_events(){
		$options = array(
			'page_title' => 'Reports &raquo; Events',
			'page_name' => 'Reports / Events',
			'template' => 'pages/events',
		);
		$data = array_merge($this->defaults,$options);
		$this->load->view('layouts/admin',$data);
	}
}