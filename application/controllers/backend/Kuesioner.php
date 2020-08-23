<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Kuesioner_model', 'kuesioner_model');
        error_reporting(0);
        $this->load->helper('text');
    }

    function index()
    {
        $count = $this->db->get_where('tbl_kuesioner');
        $page = $this->uri->segment(4);
        if (!$page) :
            $offset = 0;
        else :
            $offset = $page;
        endif;
        $limit = 10;
        $config['base_url'] = base_url() . 'backend/kuesioner/index/';
        $config['total_rows'] = $count->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 4;

        //Tambahan untuk styling
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $data['page'] = $this->pagination->create_links();
        $data['total_responden'] = $this->kuesioner_model->get_total_responden();
        $data['kuesionerAp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerAp1();
        $data['kuesionerAp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerAp1();
        $data['kuesionerAp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerAp1();
        $data['kuesionerAp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerAp1();

        $data['kuesionerBp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerBp1();
        $data['kuesionerBp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerBp1();
        $data['kuesionerBp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerBp1();
        $data['kuesionerBp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerBp1();

        $data['kuesionerCp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerCp1();
        $data['kuesionerCp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerCp1();
        $data['kuesionerCp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerCp1();
        $data['kuesionerCp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerCp1();

        $data['kuesionerDp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerDp1();
        $data['kuesionerDp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerDp1();
        $data['kuesionerDp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerDp1();
        $data['kuesionerDp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerDp1();

        $data['kuesionerEp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerEp1();
        $data['kuesionerEp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerEp1();
        $data['kuesionerEp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerEp1();
        $data['kuesionerEp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerEp1();

        $data['kuesionerFp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerFp1();
        $data['kuesionerFp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerFp1();
        $data['kuesionerFp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerFp1();
        $data['kuesionerFp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerFp1();

        $data['kuesionerGp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerGp1();
        $data['kuesionerGp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerGp1();
        $data['kuesionerGp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerGp1();
        $data['kuesionerGp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerGp1();

       

        $data['kuesionerHp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerHp1();
        $data['kuesionerHp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerHp1();
        $data['kuesionerHp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerHp1();
        $data['kuesionerHp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerHp1();

        $data['kuesionerIp1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerIp1();
        $data['kuesionerIp1_setuju'] = $this->kuesioner_model->get_setuju_kuesionerIp1();
        $data['kuesionerIp1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerIp1();
        $data['kuesionerIp1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerIp1();

        $data['kuesionerIp2_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesionerIp2();
        $data['kuesionerIp2_setuju'] = $this->kuesioner_model->get_setuju_kuesionerIp2();
        $data['kuesionerIp2_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesionerIp2();
        $data['kuesionerIp2_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesionerIp2();


        $data['kuesioner1p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner1p1();
        $data['kuesioner1p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner1p1();
        $data['kuesioner1p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner1p1();
        $data['kuesioner1p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner1p1();

        $data['kuesioner2p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner2p1();
        $data['kuesioner2p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner2p1();
        $data['kuesioner2p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner2p1();
        $data['kuesioner2p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner2p1();

        $data['kuesioner2p2_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner2p2();
        $data['kuesioner2p2_setuju'] = $this->kuesioner_model->get_setuju_kuesioner2p2();
        $data['kuesioner2p2_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner2p2();
        $data['kuesioner2p2_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner2p2();

        $data['kuesioner3p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner3p1();
        $data['kuesioner3p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner3p1();
        $data['kuesioner3p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner3p1();
        $data['kuesioner3p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner3p1();

        $data['kuesioner3p2_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner3p2();
        $data['kuesioner3p2_setuju'] = $this->kuesioner_model->get_setuju_kuesioner3p2();
        $data['kuesioner3p2_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner3p2();
        $data['kuesioner3p2_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner3p2();

        $data['kuesioner4p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner4p1();
        $data['kuesioner4p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner4p1();
        $data['kuesioner4p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner4p1();
        $data['kuesioner4p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner4p1();

        $data['kuesioner4p2_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner4p2();
        $data['kuesioner4p2_setuju'] = $this->kuesioner_model->get_setuju_kuesioner4p2();
        $data['kuesioner4p2_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner4p2();
        $data['kuesioner4p2_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner4p2();

        $data['kuesioner5p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner5p1();
        $data['kuesioner5p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner5p1();
        $data['kuesioner5p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner5p1();
        $data['kuesioner5p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner5p1();

        $data['kuesioner6p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner6p1();
        $data['kuesioner6p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner6p1();
        $data['kuesioner6p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner6p1();
        $data['kuesioner6p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner6p1();

        $data['kuesioner7p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner7p1();
        $data['kuesioner7p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner7p1();
        $data['kuesioner7p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner7p1();
        $data['kuesioner7p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner7p1();

        $data['kuesioner8p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner8p1();
        $data['kuesioner8p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner8p1();
        $data['kuesioner8p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner8p1();
        $data['kuesioner8p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner8p1();

        $data['kuesioner9p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner9p1();
        $data['kuesioner9p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner9p1();
        $data['kuesioner9p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner9p1();
        $data['kuesioner9p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner9p1();

        $data['kuesioner10p1_sangatsetuju'] = $this->kuesioner_model->get_sangatsetuju_kuesioner10p1();
        $data['kuesioner10p1_setuju'] = $this->kuesioner_model->get_setuju_kuesioner10p1();
        $data['kuesioner10p1_tidaksetuju'] = $this->kuesioner_model->get_tidaksetuju_kuesioner10p1();
        $data['kuesioner10p1_sangattidaksetuju'] = $this->kuesioner_model->get_sangattidaksetuju_kuesioner10p1();


        $data['data'] = $this->kuesioner_model->get_all_kuesioner($offset, $limit);
        $data['title'] = 'SIJABLAY';
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/v_kuesioner', $data);
    }

    // function read()
    // {
    //     $kuesioner_id = htmlspecialchars($this->uri->segment(4), ENT_QUOTES);
    //     $result = $this->kuesioner_model->get_kuesioner_by_id($kuesioner_id);
    //     if ($result->num_rows() > 0) {
    //         $row = $result->row_array();
    //         $x['name'] = $row['kuesioner_name'];
    //         $x['email'] = $row['kuesioner_email'];
    //         $x['subject'] = $row['kuesioner_subject'];
    //         $x['message'] = $row['kuesioner_message'];
    //         $x['date'] = $row['kuesioner_created_at'];
    //         $this->kuesioner_model->update_status_by_id($kuesioner_id);
    //         $this->load->view('backend/v_kuesioner_detail', $x);
    //     } else {
    //         redirect('backend/kuesioner');
    //     }
    // }

    // function result()
    // {
    //     $keyword = htmlspecialchars($this->input->get('search_query', TRUE), ENT_QUOTES);
    //     $data = $this->kuesioner_model->search_kuesioner($keyword);
    //     if ($data->num_rows() > 0) {
    //         $x['data'] = $data;
    //         $this->load->view('backend/v_kuesioner', $x);
    //     } else {
    //         $this->session->set_flashdata('msg', 'info');
    //         redirect('backend/kuesioner');
    //     }
    // }

    // function delete()
    // {
    //     $kuesioner_id = $this->input->post('id', TRUE);
    //     $this->kuesioner_model->delete_kuesioner($kuesioner_id);
    //     $this->session->set_flashdata('msg', 'success');
    //     redirect('backend/kuesioner');
    // }
}
