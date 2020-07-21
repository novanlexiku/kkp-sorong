<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vaksin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->visitor_model->count_visitor();
    }
    function index()
    {
        //$this->output->enable_profiler(TRUE);
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] =  $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;
        $data['header'] = $this->load->view('header', $v, TRUE);
        $data['footer'] = $this->load->view('footer', '', TRUE);
        $this->load->view('vaksin_view', $data);
    }
}
