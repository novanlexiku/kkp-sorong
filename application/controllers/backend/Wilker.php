<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wilker extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/wilker_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/wilker';
    }

    public function index()
    {
        $data = array();



        $data['data'] = $this->wilker_model->get_all_wilker();
        $data['title'] = 'Daftar Wilayah Kerja';

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/v_wilker', $data);
    }
    function save()
    {
        $nama = $this->input->post('nama');
        $this->wilker_model->add_new_row($nama);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/wilker');
    }

    function edit()
    {
        $id   = $this->input->post('kode', TRUE);
        $nama = $this->input->post('nama');
        $this->wilker_model->edit_row($id, $nama);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/wilker');
    }

    function delete()
    {
        $id = $this->input->post('id', TRUE);
        $this->wilker_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/wilker');
    }
}
