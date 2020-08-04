<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_pkse extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/laporan_pkse_model');
        $this->load->model('backend/penyakit_model');
        $this->load->model('backend/wilker_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/laporan_pkse';

        // File upload path 
        $this->uploadPath = 'uploads/files/';
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'Laporan';

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/v_laporan_pkse', $data);
    }

    function pkse1()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_1();
        $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_1_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_1', $data);
    }



    function save_pkse1()
    {
        $tgl = date('y-m-d');
        $wilker =  $this->session->userdata('wilker');
        $ln1 = $this->input->post('ln_asalsehat');
        $ln2 = $this->input->post('ln_asalinf');
        $ln3 = $this->input->post('ln_hpsehat');
        $ln4 = $this->input->post('ln_hpinf');
        $ln5 = $this->input->post('ln_abksehat');
        $ln6 = $this->input->post('ln_abkinf');
        $dn1 = $this->input->post('dn_asalsehat');
        $dn2 = $this->input->post('dn_asalinf');
        $dn3 = $this->input->post('dn_hpsehat');
        $dn4 = $this->input->post('dn_hpinf');
        $dn5 = $this->input->post('dn_abksehat');
        $dn6 = $this->input->post('dn_abkinf');
        $ehac = $this->input->post('ehac');
        $this->laporan_pkse_model->add_new_row($tgl, $wilker, $ln1, $ln2, $ln3, $ln4, $ln5, $ln6, $dn1, $dn2, $dn3, $dn4, $dn5, $dn6, $ehac);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_pkse/pkse1');
    }




    function cetak_laporan_pkse_1()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_pkse_model->get_laporan_pkse1_all();
        $x['pkse1'] = $this->laporan_pkse_model->get_laporan_pkse1_wil1($tgl2, $tgl3);
        $x['pkse2'] = $this->laporan_pkse_model->get_laporan_pkse1_wil2($tgl2, $tgl3);
        $x['pkse3'] = $this->laporan_pkse_model->get_laporan_pkse1_wil3($tgl2, $tgl3);
        $x['pkse4'] = $this->laporan_pkse_model->get_laporan_pkse1_wil4($tgl2, $tgl3);
        $x['pkse5'] = $this->laporan_pkse_model->get_laporan_pkse1_wil5($tgl2, $tgl3);
        $x['pkse6'] = $this->laporan_pkse_model->get_laporan_pkse1_wil6($tgl2, $tgl3);
        $x['pkse7'] = $this->laporan_pkse_model->get_laporan_pkse1_wil7($tgl2, $tgl3);
        $x['pkse8'] = $this->laporan_pkse_model->get_laporan_pkse1_wil8($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_1', $x);
    }
}
