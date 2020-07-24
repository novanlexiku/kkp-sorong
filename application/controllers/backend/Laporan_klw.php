<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_klw extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('laporan_klw');
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



        $data['download'] = $this->file->getRows();
        $data['title'] = 'Laporan';

        // Load the list page view 
        $this->load->view('backend/v_laporan_klw', $data);
    }
}
