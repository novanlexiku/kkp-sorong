<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_klw extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/laporan_klw_model');
        $this->load->model('backend/penyakit_model');
        $this->load->model('backend/wilker_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/laporan_klw';

        // File upload path 
        $this->uploadPath = 'uploads/files/';
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'Laporan';

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/v_laporan_klw', $data);
    }

    function klw1()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_1();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_1_petugas();
        $data['penyakit'] = $this->penyakit_model->get_all_penyakit();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_1', $data);
    }

    function save_klw1()
    {
        $pid = $this->input->post('penyakit');
        $tgl = $this->input->post('tgl');
        $abk = $this->input->post('abk');
        $tkbm = $this->input->post('tkbm');
        $penumpang = $this->input->post('penumpang');
        $pp = $this->input->post('pp');
        $kkp = $this->input->post('kkp');
        $sh = $this->input->post('sh');
        $umum = $this->input->post('umum');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row($pid, $tgl, $abk, $tkbm, $penumpang, $pp, $kkp, $sh, $umum, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw1');
    }


    function cetak_laporan_klw_1()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw1_all($wilker);
        $x['penyakit1'] = $this->laporan_klw_model->get_laporan_klw1_kat1($tgl2, $tgl3, $wilker);
        $x['penyakit2'] = $this->laporan_klw_model->get_laporan_klw1_kat2($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_1', $x);
    }
}
