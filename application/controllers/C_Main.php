<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller {

function __construct(){
		parent::__construct();		
  
	}

	public function index()
	{
		 $this->load->view('guest/header');
         $this->load->view('guest/home');
         $this->load->view('guest/footer');
	}


	public function search()
	{
		 $this->load->view('guest/header');
         $this->load->view('guest/search');
         $this->load->view('guest/footer');
	}
	public function datakmsguest()
	{
		
		$this->load->view('guest/header');
        $this->load->view('Petugaskesehatan/datakmsguest');

	}
}
