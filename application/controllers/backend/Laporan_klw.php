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

    function klw2()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_2();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_2_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_2', $data);
    }

    function klw3()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_3();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_3_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_3', $data);
    }

    function klw4()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_4();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_4_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_4', $data);
    }

    function klw5()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_5();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_5_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_5', $data);
    }

    function klw6()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_6();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_6_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_6', $data);
    }

    function klw7()
    {
        $data = array();
        $data['title'] = 'Laporan KLW';
        $data['laporan'] = $this->laporan_klw_model->get_all_laporan_klw_7();
        $data['laporan2'] = $this->laporan_klw_model->get_all_laporan_klw_7_petugas();
        $data['wilker'] = $this->wilker_model->get_all_wilker();

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/laporan_klw/v_laporan_klw_7', $data);
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

    function save_klw2()
    {
        $tgl = date('y-m-d');
        $barcode = $this->input->post('barcode');
        $nama = $this->input->post('nama');
        $sex = $this->input->post('sex');
        $umur = $this->input->post('umur');
        $alamat = $this->input->post('alamat');
        $job = $this->input->post('pekerjaan');
        $hasil = $this->input->post('hasil');
        $tujuan = $this->input->post('tujuan');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row2($tgl, $barcode, $nama, $sex, $umur, $alamat, $job, $hasil, $tujuan, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw2');
    }

    function save_klw3()
    {
        $tgl = date('y-m-d');
        $seri = $this->input->post('seri');
        $nama = $this->input->post('nama');
        $sex = $this->input->post('sex');
        $umur = $this->input->post('umur');
        $alamat = $this->input->post('alamat');
        $status = $this->input->post('status');
        $vaksin = $this->input->post('vaksin');
        $negara = $this->input->post('negara');
        $tujuan = $this->input->post('tujuan');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row3($tgl, $seri, $nama, $sex, $umur, $alamat, $status, $vaksin, $negara, $tujuan, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw3');
    }

    function save_klw4()
    {
        $tgl = date('y-m-d');
        $barcode = $this->input->post('barcode');
        $nama = $this->input->post('nama');
        $sex = $this->input->post('sex');
        $wn = $this->input->post('wn');
        $asal = $this->input->post('asal');
        $tujuan = $this->input->post('tujuan');
        $diagnosa = $this->input->post('diagnosa');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row4($tgl, $barcode, $nama, $sex, $wn, $asal, $tujuan, $diagnosa, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw4');
    }

    function save_klw5()
    {
        $tgl = date('y-m-d');
        $barcode = $this->input->post('barcode');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $sex = $this->input->post('sex');
        $wn = $this->input->post('wn');
        $asal = $this->input->post('asal');
        $tujuan = $this->input->post('tujuan');
        $diagnosa = $this->input->post('diagnosa');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row5($tgl, $barcode, $nama, $kelas, $sex, $wn, $asal, $tujuan, $diagnosa, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw5');
    }

    function save_klw6()
    {
        $tgl = date('y-m-d');
        $barcode = $this->input->post('barcode');
        $nama = $this->input->post('nama');
        $vol = $this->input->post('volume');
        $asal = $this->input->post('asal');
        $tgl_lama = $this->input->post('tgl_lama');
        $pel_lama = $this->input->post('pel_lama');
        $tgl_baru = $this->input->post('tgl_baru');
        $pel_baru = $this->input->post('pel_baru');
        $posisi = $this->input->post('posisi');
        $petugas = $this->input->post('petugas');
        $agen = $this->input->post('agen');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row6($tgl, $barcode, $nama, $vol, $asal, $tgl_lama, $pel_lama, $tgl_baru, $pel_baru, $posisi, $petugas, $agen, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw6');
    }

    function save_klw7()
    {
        $tgl = date('y-m-d');
        $nama = $this->input->post('nama');
        $sat = $this->input->post('satuan');
        $stok1 = $this->input->post('stok_awal');
        $stok2 = $this->input->post('stok_tambahan');
        $stok3 = $this->input->post('stok_keluar');
        $ket = $this->input->post('keterangan');
        $wilker =  $this->session->userdata('wilker');
        $this->laporan_klw_model->add_new_row7($tgl, $nama, $sat, $stok1, $stok2, $stok3, $ket, $wilker);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/laporan_klw/klw7');
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

    function cetak_laporan_klw_2()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw2_all($wilker);
        $x['laporan2'] = $this->laporan_klw_model->get_laporan_klw2($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_2', $x);
    }

    function cetak_laporan_klw_3()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw3_all($wilker);
        $x['laporan2'] = $this->laporan_klw_model->get_laporan_klw3($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_3', $x);
    }

    function cetak_laporan_klw_4()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw4_all($wilker);
        $x['laporan2'] = $this->laporan_klw_model->get_laporan_klw4($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_4', $x);
    }

    function cetak_laporan_klw_5()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw5_all($wilker);
        $x['laporan2'] = $this->laporan_klw_model->get_laporan_klw5($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_5', $x);
    }

    function cetak_laporan_klw_6()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw6_all($wilker);
        $x['laporan2'] = $this->laporan_klw_model->get_laporan_klw6($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_6', $x);
    }

    function cetak_laporan_klw_7()
    {
        $tgl2 = $this->input->post('tgl2');
        $tgl3 = $this->input->post('tgl3');
        $wilker = $this->input->post('wilker');
        $x['laporan'] = $this->laporan_klw_model->get_laporan_klw7_all($wilker);
        $x['laporan2'] = $this->laporan_klw_model->get_laporan_klw7($tgl2, $tgl3, $wilker);

        $this->load->view('backend/laporan_klw/cetak_laporan_klw_7', $x);
    }
}
