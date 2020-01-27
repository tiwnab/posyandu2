<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    private $_table = "user";

    public function save_user()
    {
        $post = $this->input->post();
        $this->nama = $post["nama_pengguna"];
        $this->nip = $post["nip"];
        $this->password = md5($post["password"]);
        $this->role = $post["role"];
        $this->alamat_posyandu = $post["alamat_posyandu"];
        $this->no_telp = $post["no_hp"];
        $res = $this->db->insert($this->_table, $this);
        return $res;
    }

    function list_pengguna(){
        return $this->db->get($this->_table)->result();
    }

    public function list_orangtua(){
        return $this->db->get("orangtua")->result();
    }

    public function get_balita_by_ortu($idortu)
    {
        $this->db->where('id_ortu', $idortu);
        $res = $this->db->get("anak")->row();
        return $res;
    }
}