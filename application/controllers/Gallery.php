<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('image');

        // Default controller name 
        $this->controller = 'gallery';
    }

    public function index()
    {
        $data = array();

        $con = array(
            'where' => array(
                'status' => 1
            )
        );
        $data['gallery'] = $this->image->getRows($con);
        $data['title'] = 'Images Gallery';
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] =  $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;
        // Load the list page view 
        $data['header'] = $this->load->view('header', $v, TRUE);
        $data['footer'] = $this->load->view('footer', '', TRUE);
        $this->load->view('gallery_view', $data);
    }
}
