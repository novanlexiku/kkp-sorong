<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        // Load image model 
        $this->load->model('backend/penyakit_model');
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Default controller name 
        $this->controller = 'backend/penyakit';
    }

    public function index()
    {
        $data = array();



        $data['data'] = $this->penyakit_model->get_all_penyakit();
        $data['title'] = 'Daftar Penyakit';

        // Load the list page view 
        $this->load->view('backend/nav/header',$data);
        $this->load->view('backend/v_penyakit', $data);
    }
    function save()
    {
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $this->penyakit_model->add_new_row($nama, $kat);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/penyakit');
    }

    function edit()
    {
        $id   = $this->input->post('kode', TRUE);
        $nama = $this->input->post('nama');
        $kat = $this->input->post('kategori');
        $this->penyakit_model->edit_row($id, $nama, $kat);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/penyakit');
    }

    function delete()
    {
        $id = $this->input->post('id', TRUE);
        $this->penyakit_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/penyakit');
    }
}
