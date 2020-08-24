<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('backend/Login_model', 'login_model');
		error_reporting(0);
	}

	function index()
	{
		$this->load->view('backend/v_login');
		$this->load->helper('text');
	}

	function auth()
	{
		$username = str_replace("'", "", htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES));
		$password = str_replace("'", "", htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES));
		$validate_us = $this->login_model->validasi_username($username);
		if ($validate_us->num_rows() > 0) {
			$validate_ps = $this->login_model->validasi_password($username, $password);
			if ($validate_ps->num_rows() > 0) {
				$this->session->set_userdata('logged', TRUE);
				$this->session->set_userdata('user', $u);
				$x = $validate_ps->row_array();

				if ($x['user_level'] == '99') { //Super Administrator
					$this->session->set_userdata('access', '99');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '1') { //Admin and Others User 
					$this->session->set_userdata('access', '1');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '2') { //Admin and Others User 
					$this->session->set_userdata('access', '2');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '3') { //Admin and Others User 
					$this->session->set_userdata('access', '3');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '4') { //Admin and Others User 
					$this->session->set_userdata('access', '4');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '5') { //Admin and Others User 
					$this->session->set_userdata('access', '5');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '6') { //Admin and Others User 
					$this->session->set_userdata('access', '6');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '7') { //Admin and Others User 
					$this->session->set_userdata('access', '7');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '8') { //Admin and Others User 
					$this->session->set_userdata('access', '8');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '9') { //Admin and Others User 
					$this->session->set_userdata('access', '9');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '10') { //Admin and Others User 
					$this->session->set_userdata('access', '10');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '11') { //Admin and Others User 
					$this->session->set_userdata('access', '11');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '12') { //Admin and Others User 
					$this->session->set_userdata('access', '12');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '13') { //Admin and Others User 
					$this->session->set_userdata('access', '13');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '14') { //Admin and Others User 
					$this->session->set_userdata('access', '14');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '15') { //Admin and Others User 
					$this->session->set_userdata('access', '15');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '16') { //Admin and Others User 
					$this->session->set_userdata('access', '16');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '17') { //Admin and Others User 
					$this->session->set_userdata('access', '17');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '18') { //Admin and Others User 
					$this->session->set_userdata('access', '18');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '19') { //Admin and Others User 
					$this->session->set_userdata('access', '19');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '20') { //Admin and Others User 
					$this->session->set_userdata('access', '20');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '21') { //Admin and Others User 
					$this->session->set_userdata('access', '21');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '22') { //Admin and Others User 
					$this->session->set_userdata('access', '22');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '23') { //Admin and Others User 
					$this->session->set_userdata('access', '23');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				} else if ($x['user_level'] == '24') { //Admin and Others User 
					$this->session->set_userdata('access', '24');
					$id = $x['user_id'];
					$nip = $x['user_nip'];
					$name = $x['user_name'];
					$wilker = $x['user_wilker'];
					$this->session->set_userdata('id', $id);
					$this->session->set_userdata('nip', $nip);
					$this->session->set_userdata('name', $name);
					$this->session->set_userdata('wilker', $wilker);
					redirect('backend/dashboard');
				}
			} else {
				$url = base_url('administrator');
				echo $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Password Salah</div>');
				redirect($url);
			}
		} else {
			$url = base_url('administrator');
			echo $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button> Username Salah</div>');
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('administrator');
		redirect($url);
	}
}
