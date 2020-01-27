<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');

class LoginController extends CI_Controller {
    /**
     * @return CI_Loader
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model("kader_model");
        $this->load->model("petugas_model");
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function action(){
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');
        $where = array(
            'nip' => $nip,
            'password' => md5($password)
        );
        $result = $this->login_model->cek_login("user", $where)->row();
        if($result != null){
            $role_detail = "";
            if ($result->role == "kader") {
                $role_detail = "Kader";
            } elseif ($result->role == "petugas") {
                $role_detail = "Petugas Kesehatan";
            }
            $data_session = array(
                'nama' => $result->username,
                'role' => $result->role,
                'role_detail' => $role_detail,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            if ($result->role == "kader"){
                redirect(base_url("kader"));
            } else {
                redirect(base_url("petugas"));
            }
        }
        else {
            echo "Username dan password salah ! ";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}