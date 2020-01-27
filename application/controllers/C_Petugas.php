<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_petugas extends CI_Controller {

	public function homepetugas()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/home');
        $this->load->view('element/js');
	}

	public function loginpetugas()
	{
		 $this->load->view('guest/header');
         $this->load->view('petugaskesehatan/Login');
         $this->load->view('guest/footer');
     }

	public function form_tambah_data_ortu()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/form_tambah_data_ortu');
        $this->load->view('element/js');
	}
	public function form_tambah_user()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/tambah_user');
        $this->load->view('element/js');
	}
	public function dataorangtua()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/dataorangtua');
        $this->load->view('element/js');
	}
	public function form_kurvabadan()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/form_kurvabadan');
        $this->load->view('element/js');
	}
	public function form_jadwal_imunisasi()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/form_jadwal_imunisasi');
        $this->load->view('element/js');
	}
	public function edit_jadwal_imunisasi()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/edit_jadwal_imunisasi');
        $this->load->view('element/js');
	}
	public function berita()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/berita');
        $this->load->view('element/js');
	}
	public function datakms()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/datakms');
        $this->load->view('element/js');
	}
	public function form_Berita()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/form_berita');
        $this->load->view('element/js');
	}
	public function Dashbord()
	{
		$this->load->view('element/head');
		$this->load->view('element/navbar');
		$this->load->view('element/sidebar');
        $this->load->view('petugaskesehatan/Dashbord');
        $this->load->view('element/js');
	}
}
