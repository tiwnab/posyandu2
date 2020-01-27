<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//header('Access-Control-Allow-Origin: *');
require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class KmsController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("kms_model");
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
        if($this->session->userdata('role') == "kader"){
            $this->sidebar = 'sidebar_kader';
        }
        if($this->session->userdata('role') == "petugas"){
            $this->sidebar = 'sidebar_petugas';
        }
    }

    public function list_kms()
    {
        $this->data['content'] = 'list_anak';
        $this->data['sidebar'] = $this->sidebar;
        $this->data['javascript'] = 'kms_js';
        $this->data['style'] = null;
        $this->data['list_anak'] = $this->kms_model->list_anak();
        $this->load->view('layout/master_layout', $this->data);
    }

    public function get_orangtua($id){
        echo json_encode($this->kms_model->get_ortu_by_balita($id));
    }

    public function export_data_kms()
    {
        $kms = $this->kms_model->get_kms();

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Team Dev Rasabaik')
            ->setLastModifiedBy('Team Dev Rasabaik')
            ->setTitle('Data Kms Excel')
            ->setSubject('Data Kms Excel')
            ->setDescription('Export Data Kms Posyandu');

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Balita')
            ->setCellValue('B1', 'Nama Orang Tua')
            ->setCellValue('C1', 'Tanggal Lahir')
            ->setCellValue('D1', 'Umur')
            ->setCellValue('E1', 'Jenis Kelamin')
            ->setCellValue('F1', 'KB')
            ->setCellValue('G1', 'Alamat')
            ->setCellValue('H1', 'Asi/Non')
            ->setCellValue('I1', 'BB')
            ->setCellValue('J1', 'BT')
        ;

        $i=2;
        foreach($kms as $kms) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $kms['balita'])
                ->setCellValue('B'.$i, $kms['nama_ortu'])
                ->setCellValue('C'.$i, $kms['tgl_lahir'])
                ->setCellValue('D'.$i, $kms['umur'])
                ->setCellValue('E'.$i, $kms['jenis_kelamin'])
                ->setCellValue('F'.$i, $kms['kb'])
                ->setCellValue('G'.$i, $kms['alamat'])
                ->setCellValue('H'.$i, $kms['asi'])
                ->setCellValue('I'.$i, $kms['berat'])
                ->setCellValue('J'.$i, $kms['tinggi'])
            ;
            $i++;
        }

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Data KMS'.date('d-m-Y H'));
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Report_Excel_KMS_'.date('d-m-Y').'.xlsx"');
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
