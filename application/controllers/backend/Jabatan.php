<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/jabatan_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/jabatan';
    }

    public function index()
    {
        $data = array();



        $data['data'] = $this->jabatan_model->get_all_jabatan();
        $data['title'] = 'Daftar Jabatan';

        // Load the list page view 
        $this->load->view('backend/nav/header',$data);
        $this->load->view('backend/v_jabatan', $data);
    }
    function save()
    {
        $nama = $this->input->post('nama');
        $kat = $this->input->post('level');
        $this->jabatan_model->add_new_row($nama, $kat);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/jabatan');
    }

    function edit()
    {
        $nama = $this->input->post('nama');
        $kat = $this->input->post('level');
        $this->jabatan_model->edit_row($nama, $kat);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/jabatan');
    }

    function delete()
    {
        $id = $this->input->post('id', TRUE);
        $this->jabatan_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/jabatan');
    }
}
