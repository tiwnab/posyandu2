<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class FrontController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model("kms_model");
        $this->load->model("petugas_model");
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $this->data['header'] = 'header';
        $this->load->view('index', $this->data);
    }

    public function kms()
    {
        $this->data['header'] = 'header';
        $this->data['list_imunisasi'] = $this->petugas_model->list_imunisasi();
        $this->load->view('kms', $this->data);
    }

    public function search_by_no_kk()
    {
        $this->data['orang_tua'] = $this->kms_model->get_ortu_by_no_kk();
        $this->data['balita'] = $this->kms_model->get_balita_by_ortu($this->data['orang_tua']->id);
        $this->data['statistik_anak'] = $this->kms_model->get_statistik_anak($this->data['balita']->id);
        $this->data['data_imunisasi'] = $this->kms_model->get_data_imunisasi($this->data['balita']->id);
        echo json_encode($this->data);
    }

}
