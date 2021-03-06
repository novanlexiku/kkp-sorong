<?php
class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Visitor_model', 'visitor_model');
		$this->load->model('backend/wilker_model');

		$this->visitor_model->count_visitor();
		$this->load->helper('text');
		error_reporting(0);
	}

	function index()
	{
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('about_view', $data);
	}
	function visimisi()
	{
		$site_info = $this->db->get('tbl_site', 1)->row();
		$profile = $this->db->get('tbl_profile', 1)->row();
		$data['profile_img'] = $profile->profile_image;
		$data['profile_visi'] = $profile->profile_visi;
		$data['profile_misi'] = $profile->profile_misi;
		$data['profile_nilai'] = $profile->profile_nilai;

		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('visi_view', $data);
	}

	function strukturorganisasi()
	{
		$site_info = $this->db->get('tbl_site', 1)->row();
		$profile = $this->db->get('tbl_profile', 1)->row();
		$data['profile_img'] = $profile->profile_image_struktur;

		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('struktur_view', $data);
	}

	function wilker()
	{
		$site_info = $this->db->get('tbl_site', 1)->row();

		$v['logo'] =  $site_info->site_logo_header;
		$data['data'] = $this->wilker_model->get_all_wilker();
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('wilker_view', $data);
	}
}
