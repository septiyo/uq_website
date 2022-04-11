<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function index()
	{
		$this->load->view('vw_home');
	}

   
public function edit($id)
  {
    $data['berita'] = $this->berita->get($id);
    //$data['title'] = "Edit Project";
    //$this->load->view('layout/header');
    //$this->load->view('project/edit', $data);

    $this->load->view('vw_home', $data);
    //$this->load->view('layout/footer');     
  }




}
