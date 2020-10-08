<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inventaris extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/inventaris_model');
        $this->load->model('backend/users_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/inventaris';
    }

    public function index()
    {
        $data = array();

        $data['data'] = $this->inventaris_model->get_all_inventaris();
        $data['user'] = $this->users_model->get_users_inventaris();
        $data['title'] = 'Daftar Inventaris KKP';

        // Load the list page view 
        $this->load->view('backend/nav/header', $data);
        $this->load->view('backend/v_inventaris', $data);
    }
    function save()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $this->inventaris_model->add_new_row($nama, $alamat);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/inventaris');
    }

    function edit()
    {
        $id   = $this->input->post('kode', TRUE);
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $this->inventaris_model->edit_row($id, $nama, $alamat);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/inventaris');
    }

    function delete()
    {
        $id = $this->input->post('id', TRUE);
        $this->inventaris_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/inventaris');
    }
}
