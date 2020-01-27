<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kms_model extends CI_Model
{

    public function list_anak(){
        return $this->db->get("anak")->result();
    }

    public function get_ortu_by_balita($id_ortu) {
        $this->db->where('id', $id_ortu);
        $res = $this->db->get("orangtua")->row();
        return $res;
    }

    public function get_ortu_by_no_kk() {
        $post = $this->input->post();
        $this->db->where('no_kk', $post['no_kk']);
        $res = $this->db->get("orangtua")->row();
        return $res;
    }

    public function get_balita_by_ortu($idortu)
    {
        $this->db->where('id_ortu', $idortu);
        $res = $this->db->get("anak")->row();
        return $res;
    }

    public function get_statistik_anak($id_balita)
    {
        $this->db->where('id_balita', $id_balita);
        $this->db->order_by("tgl_periksa", "asc");
        $res = $this->db->get("statistik_anak")->result();
        $data = array();
        foreach ($res as $key => $res) {
            $data[$key] = [
                'id' => $res->id,
                'id_balita' => $res->id_balita,
                'tgl_periksa' => $res->tgl_periksa,
                'month' => date("M", strtotime($res->tgl_periksa)),
                'berat' => $res->berat,
                'tinggi' => $res->tinggi,
            ];
        }
        return $data;
    }

    public function get_data_imunisasi($id_balita)
    {
        $this->db->where('id_balita', $id_balita);
        $this->db->order_by("tgl_imunisasi", "desc");
        $res = $this->db->get("data_imunisasi")->result();
        return $res;
    }

    public function get_kms(){
        $sql = "SELECT `orangtua`.`kb`, `orangtua`.`rt_rw`, `orangtua`.`nama_ayah`, `orangtua`.`nama_ibu`, 
                `anak`.`nama`, `anak`.`tgl_lahir`, `anak`.`jenis_kelamin`, `anak`.`berat_lhr`, `anak`.`panjang_lhr`, 
                `anak`.`asi`
                FROM `orangtua` JOIN `anak` ON `orangtua`.`id` = `anak`.`id_ortu`";
        $res = $this->db->query($sql)->result_array();
        $data = array();
        foreach ($res as $key => $res) {
            $data[$key] = [
                'balita' => $res['nama'],
                'nama_ortu' => $res['nama_ayah']."/".$res['nama_ibu'],
                'tgl_lahir' => $res['tgl_lahir'],
                'umur' => $this->createUmur($res['tgl_lahir']),
                'jenis_kelamin' => $res['jenis_kelamin'],
                'kb' => $res['kb'],
                'alamat' => $res['rt_rw'],
                'asi' => $res['asi'],
                'berat' => $res['berat_lhr'],
                'tinggi' => $res['panjang_lhr'],
            ];
        }
        return $data;
    }

    function createUmur($tgl_lahir)
    {
        $date1 = new DateTime();
        $date2 = new DateTime($tgl_lahir);

        $diff = $date1->diff($date2);
        return (($diff->format('%y') * 12) + $diff->format('%m'));
    }

}