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

    function pkse2()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_2();
        $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_2_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_2', $data);
    }

    function save_pkse2()
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
        $this->laporan_pkse_model->add_new_row2($tgl, $wilker, $ln1, $ln2, $ln3, $ln4, $ln5, $ln6, $dn1, $dn2, $dn3, $dn4, $dn5, $dn6, $ehac);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_pkse/pkse2');
    }

    function cetak_laporan_pkse_2()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_pkse_model->get_laporan_pkse2_all();
        $x['pkse1'] = $this->laporan_pkse_model->get_laporan_pkse2_wil1($tgl2, $tgl3);
        $x['pkse2'] = $this->laporan_pkse_model->get_laporan_pkse2_wil2($tgl2, $tgl3);
        $x['pkse3'] = $this->laporan_pkse_model->get_laporan_pkse2_wil3($tgl2, $tgl3);
        $x['pkse4'] = $this->laporan_pkse_model->get_laporan_pkse2_wil4($tgl2, $tgl3);
        $x['pkse5'] = $this->laporan_pkse_model->get_laporan_pkse2_wil5($tgl2, $tgl3);
        $x['pkse6'] = $this->laporan_pkse_model->get_laporan_pkse2_wil6($tgl2, $tgl3);
        $x['pkse7'] = $this->laporan_pkse_model->get_laporan_pkse2_wil7($tgl2, $tgl3);
        $x['pkse8'] = $this->laporan_pkse_model->get_laporan_pkse2_wil8($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_2', $x);
    }

    function pkse3()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_3();
        $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_3_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_3', $data);
    }

    function save_pkse3()
    {
        $tgl = date('y-m-d');
        $wilker =  $this->session->userdata('wilker');
        $cop = $this->input->post('cop');
        $phqc = $this->input->post('phqc');
        $hb = $this->input->post('hb');
        $sscec = $this->input->post('sscec');
        $sscc = $this->input->post('sscc');
        $ome = $this->input->post('ome');
        $sp = $this->input->post('sp');
        $p3k = $this->input->post('p3k');
        $this->laporan_pkse_model->add_new_row3($tgl, $wilker, $cop, $phqc, $hb, $sscec, $sscc, $ome, $sp, $p3k);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_pkse/pkse3');
    }

    function cetak_laporan_pkse_3()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_pkse_model->get_laporan_pkse3_all();
        $x['pkse1'] = $this->laporan_pkse_model->get_laporan_pkse3_wil1($tgl2, $tgl3);
        $x['pkse2'] = $this->laporan_pkse_model->get_laporan_pkse3_wil2($tgl2, $tgl3);
        $x['pkse3'] = $this->laporan_pkse_model->get_laporan_pkse3_wil3($tgl2, $tgl3);
        $x['pkse4'] = $this->laporan_pkse_model->get_laporan_pkse3_wil4($tgl2, $tgl3);
        $x['pkse5'] = $this->laporan_pkse_model->get_laporan_pkse3_wil5($tgl2, $tgl3);
        $x['pkse6'] = $this->laporan_pkse_model->get_laporan_pkse3_wil6($tgl2, $tgl3);
        $x['pkse7'] = $this->laporan_pkse_model->get_laporan_pkse3_wil7($tgl2, $tgl3);
        $x['pkse8'] = $this->laporan_pkse_model->get_laporan_pkse3_wil8($tgl2, $tgl3);
        $x['total_cop'] = $this->laporan_pkse_model->get_total_cop($tgl2, $tgl3);
        $x['total_phqc'] = $this->laporan_pkse_model->get_total_phqc($tgl2, $tgl3);
        $x['total_hb'] = $this->laporan_pkse_model->get_total_hb($tgl2, $tgl3);
        $x['total_sscec'] = $this->laporan_pkse_model->get_total_sscec($tgl2, $tgl3);
        $x['total_sscc'] = $this->laporan_pkse_model->get_total_sscc($tgl2, $tgl3);
        $x['total_ome'] = $this->laporan_pkse_model->get_total_ome($tgl2, $tgl3);
        $x['total_sp'] = $this->laporan_pkse_model->get_total_sp($tgl2, $tgl3);
        $x['total_p3k'] = $this->laporan_pkse_model->get_total_p3k($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_3', $x);
    }

    function pkse4()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_4();
        $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_4_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_4', $data);
    }

    function save_pkse4()
    {
        $tgl = date('y-m-d');
        $wilker =  $this->session->userdata('wilker');
        $naik = $this->input->post('naik');
        $turun = $this->input->post('turun');
        $sakit = $this->input->post('sakit');
        $sehat = $this->input->post('sehat');
        $rujuk = $this->input->post('rujuk');
        $tdkrujuk = $this->input->post('tdkrujuk');
        $ijin = $this->input->post('ijin');
        $ehac = $this->input->post('ehac');
        $this->laporan_pkse_model->add_new_row4($tgl, $wilker, $naik, $turun, $sakit, $sehat, $rujuk, $tdkrujuk, $ijin, $ehac);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_pkse/pkse4');
    }

    function cetak_laporan_pkse_4()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_pkse_model->get_laporan_pkse4_all();
        $x['pkse1'] = $this->laporan_pkse_model->get_laporan_pkse4_wil1($tgl2, $tgl3);
        $x['pkse2'] = $this->laporan_pkse_model->get_laporan_pkse4_wil2($tgl2, $tgl3);
        $x['pkse3'] = $this->laporan_pkse_model->get_laporan_pkse4_wil3($tgl2, $tgl3);
        $x['pkse4'] = $this->laporan_pkse_model->get_laporan_pkse4_wil4($tgl2, $tgl3);
        $x['pkse5'] = $this->laporan_pkse_model->get_laporan_pkse4_wil5($tgl2, $tgl3);
        $x['pkse6'] = $this->laporan_pkse_model->get_laporan_pkse4_wil6($tgl2, $tgl3);
        $x['pkse7'] = $this->laporan_pkse_model->get_laporan_pkse4_wil7($tgl2, $tgl3);
        $x['pkse8'] = $this->laporan_pkse_model->get_laporan_pkse4_wil8($tgl2, $tgl3);
        $x['total_naik'] = $this->laporan_pkse_model->get_total_naik($tgl2, $tgl3);
        $x['total_turun'] = $this->laporan_pkse_model->get_total_turun($tgl2, $tgl3);
        $x['total_sakit'] = $this->laporan_pkse_model->get_total_sakit($tgl2, $tgl3);
        $x['total_sehat'] = $this->laporan_pkse_model->get_total_sehat($tgl2, $tgl3);
        $x['total_rujuk'] = $this->laporan_pkse_model->get_total_rujuk($tgl2, $tgl3);
        $x['total_tdkrujuk'] = $this->laporan_pkse_model->get_total_tdkrujuk($tgl2, $tgl3);
        $x['total_ijin'] = $this->laporan_pkse_model->get_total_ijin($tgl2, $tgl3);
        $x['total_ehac'] = $this->laporan_pkse_model->get_total_ehac($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_4', $x);
    }
}
