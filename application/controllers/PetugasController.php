<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./excel/vendor/autoload.php');
//header('Access-Control-Allow-Origin: *');

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class PetugasController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kader_model");
        $this->load->model("petugas_model");
        $this->load->model("berita_model");
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        if($this->session->userdata('role') != "petugas"){
            redirect(base_url("login"));
        }
        $this->load->library('pdf');
    }

    public function dashboard()
    {
        $this->data['content'] = 'dashboard_petugas';
        $this->data['sidebar'] = 'sidebar_petugas';
        $this->data['javascript'] = null;
        $this->data['style'] = null;
        $this->load->view('layout/master_layout', $this->data);
    }

    public function add_pengguna()
    {
        $this->data['content'] = 'add_pengguna';
        $this->data['sidebar'] = 'sidebar_petugas';
        $this->data['javascript'] = 'add_pengguna_js';
        $this->data['style'] = null;
        $this->load->view('layout/master_layout', $this->data);
    }

    public function list_pengguna()
    {
        $this->data['content'] = 'list_pengguna';
        $this->data['sidebar'] = 'sidebar_petugas';
        $this->data['javascript'] = 'add_pengguna_js';
        $this->data['style'] = null;
        $this->data['list_pengguna'] = $this->petugas_model->list_pengguna();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_pengguna()
    {
        $this->petugas_model->save_user();
        return redirect('petugas/pengguna/add');
    }

    public function add_berita()
    {
        $this->data['content'] = 'add_berita';
        $this->data['sidebar'] = 'sidebar_petugas';
        $this->data['javascript'] = 'add_berita_js';
        $this->data['style'] = 'add_berita_style';
        $this->load->view('layout/master_layout', $this->data);
    }

    public function insert_berita()
    {
        $config['upload_path']="./dist/image/berita/";
        $config['allowed_types']='jpeg|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);
        if($this->upload->do_upload("image")){
            $data = array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
            $data = $this->berita_model->save_berita($image);
            echo json_encode($data);
        } else{
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
    }

    public function list_berita()
    {
        $this->data['content'] = 'list_berita';
        $this->data['sidebar'] = 'sidebar_petugas';
        $this->data['javascript'] = 'berita_js';
        $this->data['style'] = null;
        $this->data['list_berita'] = $this->berita_model->list_berita();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function content_berita($id){
        echo $this->berita_model->content_berita($id);
    }

    public function list_orangtua()
    {
        $this->data['content'] = 'list_orangtua';
        $this->data['sidebar'] = 'sidebar_petugas';
        $this->data['javascript'] = 'orangtua_js';
        $this->data['style'] = null;
        $this->data['list_orangtua'] = $this->petugas_model->list_orangtua();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function get_balita($id){
        echo json_encode($this->petugas_model->get_balita_by_ortu($id));
    }

    public function export_data_orangtua()
    {
        $orangtua = $this->kader_model->list_orangtua();

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Team Dev Rasabaik')
            ->setLastModifiedBy('Team Dev Rasabaik')
            ->setTitle('Data OrangTua Excel')
            ->setSubject('Data OrangTua Excel')
            ->setDescription('Export Data Orangtua Posyandu');
        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No KK')
            ->setCellValue('B1', 'Nama Ayah')
            ->setCellValue('C1', 'Nama Ibu')
            ->setCellValue('D1', 'Rt/Rw')
            ->setCellValue('E1', 'No Hp')
            ->setCellValue('F1', 'Status KB')
        ;


        // Miscellaneous glyphs, UTF-8
        $i=2;
        foreach($orangtua as $orangtua) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $orangtua->no_kk)
                ->setCellValue('B'.$i, $orangtua->nama_ayah)
                ->setCellValue('C'.$i, $orangtua->nama_ibu)
                ->setCellValue('D'.$i, $orangtua->rt_rw)
                ->setCellValue('E'.$i, $orangtua->no_hp)
                ->setCellValue('F'.$i, $orangtua->kb)
            ;
            $i++;
        }

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Data OrangTua'.date('d-m-Y H'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Report_Excel_OrangTua_'.date('d-m-Y').'.xlsx"');
        header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }

}
