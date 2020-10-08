<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Satuan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/satuan_model');
        $this->load->model('backend/users_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/satuan';
    }

    public function index()
    {
        $data = array();

        $data['data'] = $this->satuan_model->get_all_satuan();
        $data['title'] = 'Daftar Satuan';

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/v_satuan', $data);
    }
    function save()
    {
        $nama = $this->input->post('nama');
        $singkat = $this->input->post('singkat');
        $this->satuan_model->add_new_row($nama, $singkat);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/satuan');
    }

    function edit()
    {
        $id   = $this->input->post('kode', TRUE);
        $nama = $this->input->post('nama');
        $singkat = $this->input->post('singkat');

        $this->satuan_model->edit_row($id, $nama, $singkat);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/satuan');
    }

    function delete()
    {
        $id = $this->input->post('id', TRUE);
        $this->satuan_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/satuan');
    }
}
