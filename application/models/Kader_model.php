<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kader_model extends CI_Model
{

    public function save_orangtua()
    {
        $post = $this->input->post();
        $this->no_kk = $post["no_kk"];
        $this->nama_ayah = $post["nama_ayah"];
        $this->nama_ibu = $post["nama_ibu"];
        $this->rt_rw = $post["rt_rw"];
        $this->no_hp = $post["no_hp"];
        $this->kb = $post["kb"];
        $this->db->insert("orangtua", $this);
        return $this->db->insert_id();
    }

    public function save_balita($id_ortu)
    {
        $post = $this->input->post();
        $data = array(
            'nama' => $post["nama_balita"],
            'tgl_lahir' => date('Y/m/d', strtotime($post["tgl_lahir"])),
            'jenis_kelamin' => $post["jenis_kelamin"],
            'berat_lhr' => $post["berat_lhr"],
            'panjang_lhr' => $post["panjang_lhr"],
            'asi' => $post["asi"],
            'id_ortu' => $id_ortu
        );
        $hasil = $this->db->insert("anak", $data);
        return $hasil;
    }

    public function save_berat_badan()
    {
        $post = $this->input->post();
        $this->id_balita = $post["id_balita"];
        $this->tgl_periksa = date('Y/m/d', strtotime($post["tgl_periksa"]));
        $this->berat = $post["berat"];
        $this->tinggi = $post["tinggi"];
        $this->db->insert("statistik_anak", $this);
        return $this->db->insert_id();
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

    function list_orangtua_anak(){
        $sql = "SELECT `orangtua`.`id`, `orangtua`.`no_kk`, `orangtua`.`nama_ayah`, `orangtua`.`nama_ibu`, `anak`.`nama` , `anak`.`id` as `id_balita` 
                FROM `orangtua` JOIN `anak` ON `orangtua`.`id` = `anak`.`id_ortu`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function list_imunisasi(){
        return $this->db->get("imunisasi")->result();
    }

    public function save_data_imunisasi()
    {
        $post = $this->input->post();
        $this->id_balita = $post["id_balita"];
        $this->id_imunisasi = $post["id_imunisasi"];
        $this->tgl_imunisasi = date('Y/m/d', strtotime($post["tgl_imunisasi"]));
        $this->db->insert("data_imunisasi", $this);
        return $this->db->insert_id();
    }

    public function save_imunisasi(){
        $post = $this->input->post();
        $this->jenis = $post["jenis"];
        $this->sesi = $post["sesi"];
        $this->ket_sesi = $post["ket_sesi"];
        $res = $this->db->insert("imunisasi", $this);
        return $res;
    }
}