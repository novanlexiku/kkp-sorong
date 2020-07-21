<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('file');

        // Default controller name 
        $this->controller = 'download';
    }

    public function index()
    {
        $data = array();

        $con = array(
            'where' => array(
                'status' => 1
            )
        );
        $data['download'] = $this->file->getRows($con);
        $data['title'] = 'Arsip File';
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] =  $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;
        // Load the list page view 
        $data['header'] = $this->load->view('header', $v, TRUE);
        $data['footer'] = $this->load->view('footer', '', TRUE);
        $this->load->view('download_view', $data);
    }
}
