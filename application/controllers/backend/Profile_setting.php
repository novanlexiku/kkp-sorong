<?php

class Profile_setting extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Setting_model', 'setting_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    function index()
    {
        $data = $this->setting_model->get_profile_data()->row();
        $x['profile_id'] = $data->profile_id;
        $x['profile_img'] = $data->profile_image;
        $x['profile_img2'] = $data->profile_image_struktur;
        $x['profile_visi'] = $data->profile_visi;
        $x['profile_misi'] = $data->profile_misi;
        $x['profile_nilai'] = $data->profile_nilai;
        $this->load->view('backend/v_profile_setting', $x);
    }

    function update()
    {
        $profile_id = htmlspecialchars($this->input->post('profile_id', TRUE), ENT_QUOTES);
        $visi = $this->input->post('visi', TRUE);
        $misi = $this->input->post('misi', TRUE);
        $nilai = $this->input->post('nilai', TRUE);

        $config['upload_path'] = './theme/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);
        if (!empty($_FILES['img_profile']['name'] || $_FILES['img_struktur']['name'])) {
            if ($this->upload->do_upload('img_profile')) {
                $img_profile = $this->upload->data();
                $image = $img_profile['file_name'];
            }
            if ($this->upload->do_upload('img_struktur')) {
                $img_struktur = $this->upload->data();
                $image2 = $img_struktur['file_name'];
            }
            $this->setting_model->update_information_profile($profile_id, $visi, $misi, $nilai, $image, $image2);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/profile_setting');
        } else {
            $this->setting_model->update_information_profile_noimg($profile_id, $visi, $misi, $nilai);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/profile_setting');
        }
    }
}
