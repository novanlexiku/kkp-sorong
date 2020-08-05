<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_pkse extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/laporan_pkse_model');
        $this->load->model('backend/laporan_klw_model');
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

    function pkse5()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_5();
        $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_5_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_5', $data);
    }

    function save_pkse5()
    {
        $tgl = date('y-m-d');
        $wilker =  $this->session->userdata('wilker');
        $pria = $this->input->post('pria');
        $wanita = $this->input->post('wanita');
        $wna = $this->input->post('wna');
        $wni = $this->input->post('wni');
        $menular = $this->input->post('menular');
        $tdkmenular = $this->input->post('tdkmenular');
        $dalam = $this->input->post('dalam');
        $luar = $this->input->post('luar');
        $this->laporan_pkse_model->add_new_row5($tgl, $wilker, $pria, $wanita, $wna, $wni, $menular, $tdkmenular, $dalam, $luar);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_pkse/pkse5');
    }

    function cetak_laporan_pkse_5()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_pkse_model->get_laporan_pkse5_all();
        $x['pkse1'] = $this->laporan_pkse_model->get_laporan_pkse5_wil1($tgl2, $tgl3);
        $x['pkse2'] = $this->laporan_pkse_model->get_laporan_pkse5_wil2($tgl2, $tgl3);
        $x['pkse3'] = $this->laporan_pkse_model->get_laporan_pkse5_wil3($tgl2, $tgl3);
        $x['pkse4'] = $this->laporan_pkse_model->get_laporan_pkse5_wil4($tgl2, $tgl3);
        $x['pkse5'] = $this->laporan_pkse_model->get_laporan_pkse5_wil5($tgl2, $tgl3);
        $x['pkse6'] = $this->laporan_pkse_model->get_laporan_pkse5_wil6($tgl2, $tgl3);
        $x['pkse7'] = $this->laporan_pkse_model->get_laporan_pkse5_wil7($tgl2, $tgl3);
        $x['pkse8'] = $this->laporan_pkse_model->get_laporan_pkse5_wil8($tgl2, $tgl3);
        $x['total_pria'] = $this->laporan_pkse_model->get_total_pria($tgl2, $tgl3);
        $x['total_wanita'] = $this->laporan_pkse_model->get_total_wanita($tgl2, $tgl3);
        $x['total_wna'] = $this->laporan_pkse_model->get_total_wna($tgl2, $tgl3);
        $x['total_wni'] = $this->laporan_pkse_model->get_total_wni($tgl2, $tgl3);
        $x['total_menular'] = $this->laporan_pkse_model->get_total_menular($tgl2, $tgl3);
        $x['total_tdkmenular'] = $this->laporan_pkse_model->get_total_tdkmenular($tgl2, $tgl3);
        $x['total_dalam'] = $this->laporan_pkse_model->get_total_dalam($tgl2, $tgl3);
        $x['total_luar'] = $this->laporan_pkse_model->get_total_luar($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_5', $x);
    }

    function pkse6()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        // $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_6();
        // $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_6_petugas();
        // $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_6', $data);
    }

    function cetak_laporan_pkse_6()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw1();
        $x['p1wil1'] = $this->laporan_pkse_model->get_total_p1_wil1($tgl2, $tgl3);
        $x['p1wil2'] = $this->laporan_pkse_model->get_total_p1_wil2($tgl2, $tgl3);
        $x['p1wil3'] = $this->laporan_pkse_model->get_total_p1_wil3($tgl2, $tgl3);
        $x['p1wil4'] = $this->laporan_pkse_model->get_total_p1_wil4($tgl2, $tgl3);
        $x['p1wil5'] = $this->laporan_pkse_model->get_total_p1_wil5($tgl2, $tgl3);
        $x['p1wil6'] = $this->laporan_pkse_model->get_total_p1_wil6($tgl2, $tgl3);
        $x['p1wil7'] = $this->laporan_pkse_model->get_total_p1_wil7($tgl2, $tgl3);
        $x['p1wil8'] = $this->laporan_pkse_model->get_total_p1_wil8($tgl2, $tgl3);
        $x['p2wil1'] = $this->laporan_pkse_model->get_total_p2_wil1($tgl2, $tgl3);
        $x['p2wil2'] = $this->laporan_pkse_model->get_total_p2_wil2($tgl2, $tgl3);
        $x['p2wil3'] = $this->laporan_pkse_model->get_total_p2_wil3($tgl2, $tgl3);
        $x['p2wil4'] = $this->laporan_pkse_model->get_total_p2_wil4($tgl2, $tgl3);
        $x['p2wil5'] = $this->laporan_pkse_model->get_total_p2_wil5($tgl2, $tgl3);
        $x['p2wil6'] = $this->laporan_pkse_model->get_total_p2_wil6($tgl2, $tgl3);
        $x['p2wil7'] = $this->laporan_pkse_model->get_total_p2_wil7($tgl2, $tgl3);
        $x['p2wil8'] = $this->laporan_pkse_model->get_total_p2_wil8($tgl2, $tgl3);
        $x['p3wil1'] = $this->laporan_pkse_model->get_total_p3_wil1($tgl2, $tgl3);
        $x['p3wil2'] = $this->laporan_pkse_model->get_total_p3_wil2($tgl2, $tgl3);
        $x['p3wil3'] = $this->laporan_pkse_model->get_total_p3_wil3($tgl2, $tgl3);
        $x['p3wil4'] = $this->laporan_pkse_model->get_total_p3_wil4($tgl2, $tgl3);
        $x['p3wil5'] = $this->laporan_pkse_model->get_total_p3_wil5($tgl2, $tgl3);
        $x['p3wil6'] = $this->laporan_pkse_model->get_total_p3_wil6($tgl2, $tgl3);
        $x['p3wil7'] = $this->laporan_pkse_model->get_total_p3_wil7($tgl2, $tgl3);
        $x['p3wil8'] = $this->laporan_pkse_model->get_total_p3_wil8($tgl2, $tgl3);
        $x['p4wil1'] = $this->laporan_pkse_model->get_total_p4_wil1($tgl2, $tgl3);
        $x['p4wil2'] = $this->laporan_pkse_model->get_total_p4_wil2($tgl2, $tgl3);
        $x['p4wil3'] = $this->laporan_pkse_model->get_total_p4_wil3($tgl2, $tgl3);
        $x['p4wil4'] = $this->laporan_pkse_model->get_total_p4_wil4($tgl2, $tgl3);
        $x['p4wil5'] = $this->laporan_pkse_model->get_total_p4_wil5($tgl2, $tgl3);
        $x['p4wil6'] = $this->laporan_pkse_model->get_total_p4_wil6($tgl2, $tgl3);
        $x['p4wil7'] = $this->laporan_pkse_model->get_total_p4_wil7($tgl2, $tgl3);
        $x['p4wil8'] = $this->laporan_pkse_model->get_total_p4_wil8($tgl2, $tgl3);
        $x['p5wil1'] = $this->laporan_pkse_model->get_total_p5_wil1($tgl2, $tgl3);
        $x['p5wil2'] = $this->laporan_pkse_model->get_total_p5_wil2($tgl2, $tgl3);
        $x['p5wil3'] = $this->laporan_pkse_model->get_total_p5_wil3($tgl2, $tgl3);
        $x['p5wil4'] = $this->laporan_pkse_model->get_total_p5_wil4($tgl2, $tgl3);
        $x['p5wil5'] = $this->laporan_pkse_model->get_total_p5_wil5($tgl2, $tgl3);
        $x['p5wil6'] = $this->laporan_pkse_model->get_total_p5_wil6($tgl2, $tgl3);
        $x['p5wil7'] = $this->laporan_pkse_model->get_total_p5_wil7($tgl2, $tgl3);
        $x['p5wil8'] = $this->laporan_pkse_model->get_total_p5_wil8($tgl2, $tgl3);
        $x['p6wil1'] = $this->laporan_pkse_model->get_total_p6_wil1($tgl2, $tgl3);
        $x['p6wil2'] = $this->laporan_pkse_model->get_total_p6_wil2($tgl2, $tgl3);
        $x['p6wil3'] = $this->laporan_pkse_model->get_total_p6_wil3($tgl2, $tgl3);
        $x['p6wil4'] = $this->laporan_pkse_model->get_total_p6_wil4($tgl2, $tgl3);
        $x['p6wil5'] = $this->laporan_pkse_model->get_total_p6_wil5($tgl2, $tgl3);
        $x['p6wil6'] = $this->laporan_pkse_model->get_total_p6_wil6($tgl2, $tgl3);
        $x['p6wil7'] = $this->laporan_pkse_model->get_total_p6_wil7($tgl2, $tgl3);
        $x['p6wil8'] = $this->laporan_pkse_model->get_total_p6_wil8($tgl2, $tgl3);
        $x['p7wil1'] = $this->laporan_pkse_model->get_total_p7_wil1($tgl2, $tgl3);
        $x['p7wil2'] = $this->laporan_pkse_model->get_total_p7_wil2($tgl2, $tgl3);
        $x['p7wil3'] = $this->laporan_pkse_model->get_total_p7_wil3($tgl2, $tgl3);
        $x['p7wil4'] = $this->laporan_pkse_model->get_total_p7_wil4($tgl2, $tgl3);
        $x['p7wil5'] = $this->laporan_pkse_model->get_total_p7_wil5($tgl2, $tgl3);
        $x['p7wil6'] = $this->laporan_pkse_model->get_total_p7_wil6($tgl2, $tgl3);
        $x['p7wil7'] = $this->laporan_pkse_model->get_total_p7_wil7($tgl2, $tgl3);
        $x['p7wil8'] = $this->laporan_pkse_model->get_total_p7_wil8($tgl2, $tgl3);
        $x['p8wil1'] = $this->laporan_pkse_model->get_total_p8_wil1($tgl2, $tgl3);
        $x['p8wil2'] = $this->laporan_pkse_model->get_total_p8_wil2($tgl2, $tgl3);
        $x['p8wil3'] = $this->laporan_pkse_model->get_total_p8_wil3($tgl2, $tgl3);
        $x['p8wil4'] = $this->laporan_pkse_model->get_total_p8_wil4($tgl2, $tgl3);
        $x['p8wil5'] = $this->laporan_pkse_model->get_total_p8_wil5($tgl2, $tgl3);
        $x['p8wil6'] = $this->laporan_pkse_model->get_total_p8_wil6($tgl2, $tgl3);
        $x['p8wil7'] = $this->laporan_pkse_model->get_total_p8_wil7($tgl2, $tgl3);
        $x['p8wil8'] = $this->laporan_pkse_model->get_total_p8_wil8($tgl2, $tgl3);
        $x['p9wil1'] = $this->laporan_pkse_model->get_total_p9_wil1($tgl2, $tgl3);
        $x['p9wil2'] = $this->laporan_pkse_model->get_total_p9_wil2($tgl2, $tgl3);
        $x['p9wil3'] = $this->laporan_pkse_model->get_total_p9_wil3($tgl2, $tgl3);
        $x['p9wil4'] = $this->laporan_pkse_model->get_total_p9_wil4($tgl2, $tgl3);
        $x['p9wil5'] = $this->laporan_pkse_model->get_total_p9_wil5($tgl2, $tgl3);
        $x['p9wil6'] = $this->laporan_pkse_model->get_total_p9_wil6($tgl2, $tgl3);
        $x['p9wil7'] = $this->laporan_pkse_model->get_total_p9_wil7($tgl2, $tgl3);
        $x['p9wil8'] = $this->laporan_pkse_model->get_total_p9_wil8($tgl2, $tgl3);
        $x['p10wil1'] = $this->laporan_pkse_model->get_total_p10_wil1($tgl2, $tgl3);
        $x['p10wil2'] = $this->laporan_pkse_model->get_total_p10_wil2($tgl2, $tgl3);
        $x['p10wil3'] = $this->laporan_pkse_model->get_total_p10_wil3($tgl2, $tgl3);
        $x['p10wil4'] = $this->laporan_pkse_model->get_total_p10_wil4($tgl2, $tgl3);
        $x['p10wil5'] = $this->laporan_pkse_model->get_total_p10_wil5($tgl2, $tgl3);
        $x['p10wil6'] = $this->laporan_pkse_model->get_total_p10_wil6($tgl2, $tgl3);
        $x['p10wil7'] = $this->laporan_pkse_model->get_total_p10_wil7($tgl2, $tgl3);
        $x['p10wil8'] = $this->laporan_pkse_model->get_total_p10_wil8($tgl2, $tgl3);
        $x['p11wil1'] = $this->laporan_pkse_model->get_total_p11_wil1($tgl2, $tgl3);
        $x['p11wil2'] = $this->laporan_pkse_model->get_total_p11_wil2($tgl2, $tgl3);
        $x['p11wil3'] = $this->laporan_pkse_model->get_total_p11_wil3($tgl2, $tgl3);
        $x['p11wil4'] = $this->laporan_pkse_model->get_total_p11_wil4($tgl2, $tgl3);
        $x['p11wil5'] = $this->laporan_pkse_model->get_total_p11_wil5($tgl2, $tgl3);
        $x['p11wil6'] = $this->laporan_pkse_model->get_total_p11_wil6($tgl2, $tgl3);
        $x['p11wil7'] = $this->laporan_pkse_model->get_total_p11_wil7($tgl2, $tgl3);
        $x['p11wil8'] = $this->laporan_pkse_model->get_total_p11_wil8($tgl2, $tgl3);
        $x['p12wil1'] = $this->laporan_pkse_model->get_total_p12_wil1($tgl2, $tgl3);
        $x['p12wil2'] = $this->laporan_pkse_model->get_total_p12_wil2($tgl2, $tgl3);
        $x['p12wil3'] = $this->laporan_pkse_model->get_total_p12_wil3($tgl2, $tgl3);
        $x['p12wil4'] = $this->laporan_pkse_model->get_total_p12_wil4($tgl2, $tgl3);
        $x['p12wil5'] = $this->laporan_pkse_model->get_total_p12_wil5($tgl2, $tgl3);
        $x['p12wil6'] = $this->laporan_pkse_model->get_total_p12_wil6($tgl2, $tgl3);
        $x['p12wil7'] = $this->laporan_pkse_model->get_total_p12_wil7($tgl2, $tgl3);
        $x['p12wil8'] = $this->laporan_pkse_model->get_total_p12_wil8($tgl2, $tgl3);
        $x['p13wil1'] = $this->laporan_pkse_model->get_total_p13_wil1($tgl2, $tgl3);
        $x['p13wil2'] = $this->laporan_pkse_model->get_total_p13_wil2($tgl2, $tgl3);
        $x['p13wil3'] = $this->laporan_pkse_model->get_total_p13_wil3($tgl2, $tgl3);
        $x['p13wil4'] = $this->laporan_pkse_model->get_total_p13_wil4($tgl2, $tgl3);
        $x['p13wil5'] = $this->laporan_pkse_model->get_total_p13_wil5($tgl2, $tgl3);
        $x['p13wil6'] = $this->laporan_pkse_model->get_total_p13_wil6($tgl2, $tgl3);
        $x['p13wil7'] = $this->laporan_pkse_model->get_total_p13_wil7($tgl2, $tgl3);
        $x['p13wil8'] = $this->laporan_pkse_model->get_total_p13_wil8($tgl2, $tgl3);
        $x['p14wil1'] = $this->laporan_pkse_model->get_total_p14_wil1($tgl2, $tgl3);
        $x['p14wil2'] = $this->laporan_pkse_model->get_total_p14_wil2($tgl2, $tgl3);
        $x['p14wil3'] = $this->laporan_pkse_model->get_total_p14_wil3($tgl2, $tgl3);
        $x['p14wil4'] = $this->laporan_pkse_model->get_total_p14_wil4($tgl2, $tgl3);
        $x['p14wil5'] = $this->laporan_pkse_model->get_total_p14_wil5($tgl2, $tgl3);
        $x['p14wil6'] = $this->laporan_pkse_model->get_total_p14_wil6($tgl2, $tgl3);
        $x['p14wil7'] = $this->laporan_pkse_model->get_total_p14_wil7($tgl2, $tgl3);
        $x['p14wil8'] = $this->laporan_pkse_model->get_total_p14_wil8($tgl2, $tgl3);
        $x['p15wil1'] = $this->laporan_pkse_model->get_total_p15_wil1($tgl2, $tgl3);
        $x['p15wil2'] = $this->laporan_pkse_model->get_total_p15_wil2($tgl2, $tgl3);
        $x['p15wil3'] = $this->laporan_pkse_model->get_total_p15_wil3($tgl2, $tgl3);
        $x['p15wil4'] = $this->laporan_pkse_model->get_total_p15_wil4($tgl2, $tgl3);
        $x['p15wil5'] = $this->laporan_pkse_model->get_total_p15_wil5($tgl2, $tgl3);
        $x['p15wil6'] = $this->laporan_pkse_model->get_total_p15_wil6($tgl2, $tgl3);
        $x['p15wil7'] = $this->laporan_pkse_model->get_total_p15_wil7($tgl2, $tgl3);
        $x['p15wil8'] = $this->laporan_pkse_model->get_total_p15_wil8($tgl2, $tgl3);
        $x['p16wil1'] = $this->laporan_pkse_model->get_total_p16_wil1($tgl2, $tgl3);
        $x['p16wil2'] = $this->laporan_pkse_model->get_total_p16_wil2($tgl2, $tgl3);
        $x['p16wil3'] = $this->laporan_pkse_model->get_total_p16_wil3($tgl2, $tgl3);
        $x['p16wil4'] = $this->laporan_pkse_model->get_total_p16_wil4($tgl2, $tgl3);
        $x['p16wil5'] = $this->laporan_pkse_model->get_total_p16_wil5($tgl2, $tgl3);
        $x['p16wil6'] = $this->laporan_pkse_model->get_total_p16_wil6($tgl2, $tgl3);
        $x['p16wil7'] = $this->laporan_pkse_model->get_total_p16_wil7($tgl2, $tgl3);
        $x['p16wil8'] = $this->laporan_pkse_model->get_total_p16_wil8($tgl2, $tgl3);
        $x['p17wil1'] = $this->laporan_pkse_model->get_total_p17_wil1($tgl2, $tgl3);
        $x['p17wil2'] = $this->laporan_pkse_model->get_total_p17_wil2($tgl2, $tgl3);
        $x['p17wil3'] = $this->laporan_pkse_model->get_total_p17_wil3($tgl2, $tgl3);
        $x['p17wil4'] = $this->laporan_pkse_model->get_total_p17_wil4($tgl2, $tgl3);
        $x['p17wil5'] = $this->laporan_pkse_model->get_total_p17_wil5($tgl2, $tgl3);
        $x['p17wil6'] = $this->laporan_pkse_model->get_total_p17_wil6($tgl2, $tgl3);
        $x['p17wil7'] = $this->laporan_pkse_model->get_total_p17_wil7($tgl2, $tgl3);
        $x['p17wil8'] = $this->laporan_pkse_model->get_total_p17_wil8($tgl2, $tgl3);
        $x['p18wil1'] = $this->laporan_pkse_model->get_total_p18_wil1($tgl2, $tgl3);
        $x['p18wil2'] = $this->laporan_pkse_model->get_total_p18_wil2($tgl2, $tgl3);
        $x['p18wil3'] = $this->laporan_pkse_model->get_total_p18_wil3($tgl2, $tgl3);
        $x['p18wil4'] = $this->laporan_pkse_model->get_total_p18_wil4($tgl2, $tgl3);
        $x['p18wil5'] = $this->laporan_pkse_model->get_total_p18_wil5($tgl2, $tgl3);
        $x['p18wil6'] = $this->laporan_pkse_model->get_total_p18_wil6($tgl2, $tgl3);
        $x['p18wil7'] = $this->laporan_pkse_model->get_total_p18_wil7($tgl2, $tgl3);
        $x['p18wil8'] = $this->laporan_pkse_model->get_total_p18_wil8($tgl2, $tgl3);
        $x['p19wil1'] = $this->laporan_pkse_model->get_total_p19_wil1($tgl2, $tgl3);
        $x['p19wil2'] = $this->laporan_pkse_model->get_total_p19_wil2($tgl2, $tgl3);
        $x['p19wil3'] = $this->laporan_pkse_model->get_total_p19_wil3($tgl2, $tgl3);
        $x['p19wil4'] = $this->laporan_pkse_model->get_total_p19_wil4($tgl2, $tgl3);
        $x['p19wil5'] = $this->laporan_pkse_model->get_total_p19_wil5($tgl2, $tgl3);
        $x['p19wil6'] = $this->laporan_pkse_model->get_total_p19_wil6($tgl2, $tgl3);
        $x['p19wil7'] = $this->laporan_pkse_model->get_total_p19_wil7($tgl2, $tgl3);
        $x['p19wil8'] = $this->laporan_pkse_model->get_total_p19_wil8($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_6', $x);
    }

    function pkse7()
    {
        $data = array();
        $data['title'] = 'Laporan PKSE';
        $data['laporan'] = $this->laporan_pkse_model->get_all_laporan_pkse_7();
        $data['laporan2'] = $this->laporan_pkse_model->get_all_laporan_pkse_7_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_pkse/v_laporan_pkse_7', $data);
    }

    function save_pkse7()
    {
        $tgl = date('y-m-d');
        $wilker =  $this->session->userdata('wilker');
        $satuan = $this->input->post('satuan');
        $awal1 = $this->input->post('awal1');
        $tambah1 = $this->input->post('tambah1');
        $pakai1 = $this->input->post('pakai1');
        $awal2 = $this->input->post('awal2');
        $tambah2 = $this->input->post('tambah2');
        $pakai2 = $this->input->post('pakai2');
        $awal3 = $this->input->post('awal3');
        $tambah3 = $this->input->post('tambah3');
        $pakai3 = $this->input->post('pakai3');
        $awal4 = $this->input->post('awal4');
        $tambah4 = $this->input->post('tambah4');
        $pakai4 = $this->input->post('pakai4');
        $awal5 = $this->input->post('awal5');
        $tambah5 = $this->input->post('tambah5');
        $pakai5 = $this->input->post('pakai5');

        $this->laporan_pkse_model->add_new_row7($tgl, $wilker, $satuan, $awal1, $tambah1, $pakai1, $awal2, $tambah2, $pakai2, $awal3, $tambah3, $pakai3, $awal4, $tambah4, $pakai4, $awal5, $tambah5, $pakai5);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_pkse/pkse7');
    }

    function cetak_laporan_pkse_7()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $x['wilker'] = $this->wilker_model->get_all_wilker();
        $x['laporan'] = $this->laporan_pkse_model->get_laporan_pkse7_all();
        $x['pkse1'] = $this->laporan_pkse_model->get_laporan_pkse7_wil1($tgl2, $tgl3);
        $x['pkse2'] = $this->laporan_pkse_model->get_laporan_pkse7_wil2($tgl2, $tgl3);
        $x['pkse3'] = $this->laporan_pkse_model->get_laporan_pkse7_wil3($tgl2, $tgl3);
        $x['pkse4'] = $this->laporan_pkse_model->get_laporan_pkse7_wil4($tgl2, $tgl3);
        $x['pkse5'] = $this->laporan_pkse_model->get_laporan_pkse7_wil5($tgl2, $tgl3);
        $x['pkse6'] = $this->laporan_pkse_model->get_laporan_pkse7_wil6($tgl2, $tgl3);
        $x['pkse7'] = $this->laporan_pkse_model->get_laporan_pkse7_wil7($tgl2, $tgl3);
        $x['pkse8'] = $this->laporan_pkse_model->get_laporan_pkse7_wil8($tgl2, $tgl3);


        $this->load->view('backend/laporan_pkse/cetak_laporan_pkse_7', $x);
    }
}
