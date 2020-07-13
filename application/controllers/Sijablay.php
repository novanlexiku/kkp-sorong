<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sijablay extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Sijablay_model', 'sijablay_model');
		$this->load->model('Visitor_model', 'visitor_model');
		$this->visitor_model->count_visitor();
	}
	function index()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_view', $data);
	}

	function kesehatankapal()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_keskap_view', $data);
	}

	function icv()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_icv_view', $data);
	}

	function poliklinik()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_poliklinik_view', $data);
	}

	function ambulance()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_ambulance_view', $data);
	}

	function kesehatan()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_kesehatan_view', $data);
	}

	function angkutjenazah()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_jenazah_view', $data);
	}

	function orangsakit()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_sakit_view', $data);
	}

	function klirens()
	{
		//$this->output->enable_profiler(TRUE);
		$site_info = $this->db->get('tbl_site', 1)->row();
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header', $v, TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);
		$this->load->view('sijablay_klirens_view', $data);
	}

	function send1()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-dokumen-kesehatan-kapal');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);
			$k1p1 = $this->input->post('kuesioner1pertanyaan1');
			$k2p1 = $this->input->post('kuesioner2pertanyaan1');
			$k2p2 = $this->input->post('kuesioner2pertanyaan2');
			$k3p1 = $this->input->post('kuesioner3pertanyaan1');
			$k3p2 = $this->input->post('kuesioner3pertanyaan2');

			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message1($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k1p1, $k2p1, $k2p2, $k3p1, $k3p2);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-dokumen-kesehatan-kapal');
		}
	}

	function send2()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-icv-vaksin');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k4p1 = $this->input->post('kuesioner4pertanyaan1');
			$k4p2 = $this->input->post('kuesioner4pertanyaan2');

			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message2($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k4p1, $k4p2);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-icv-vaksin');
		}
	}

	function send3()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-poliklinik');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k5p1 = $this->input->post('kuesioner5pertanyaan1');

			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message3($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k5p1);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-poliklinik');
		}
	}

	function send4()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-ambulance');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k6p1 = $this->input->post('kuesioner6pertanyaan1');

			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message4($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k6p1);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-ambulance');
		}
	}

	function send5()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-kesehatan');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k7p1 = $this->input->post('kuesioner7pertanyaan1');

			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message5($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k7p1);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-kesehatan');
		}
	}

	function send6()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-angkut-jenazah');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k8p1 = $this->input->post('kuesioner8pertanyaan1');

			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message6($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k8p1);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-angkut-jenazah');
		}
	}

	function send7()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-orang-sakit');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k9p1 = $this->input->post('kuesioner9pertanyaan1');
			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message7($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k9p1);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-orang-sakit');
		}
	}

	function send8()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('jenis-kelamin', 'Jenis-Kelamin', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('usia', 'Usia', 'required|min_length[2]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('nohp', 'NoHp', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('identitas', 'Identitas', 'required|min_length[3]|max_length[100]|htmlspecialchars');
		$this->form_validation->set_rules('kuesionerApertanyaan1', 'kuesionerApertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerBpertanyaan1', 'kuesionerBpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerCpertanyaan1', 'kuesionerCpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerDpertanyaan1', 'kuesionerDpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerEpertanyaan1', 'kuesionerEpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerFpertanyaan1', 'kuesionerFpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan1', 'kuesionerGpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerGpertanyaan2', 'kuesionerGpertanyaan2', 'required');
		$this->form_validation->set_rules('kuesionerHpertanyaan1', 'kuesionerHpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan1', 'kuesionerIpertanyaan1', 'required');
		$this->form_validation->set_rules('kuesionerIpertanyaan2', 'kuesionerIpertanyaan2', 'required');

		// $this->form_validation->set_rules('message', 'Message', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect('sijablay-klirens');
		} else {
			$name = $this->input->post('name', TRUE);
			$email = $this->input->post('email', TRUE);
			$jeniskelamin = $this->input->post('jenis-kelamin', TRUE);
			$usia = $this->input->post('usia', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nohp = $this->input->post('nohp', TRUE);
			$identitas = $this->input->post('identitas', TRUE);
			$kAp1 = $this->input->post('kuesionerApertanyaan1', TRUE);
			$kBp1 = $this->input->post('kuesionerBpertanyaan1', TRUE);
			$kCp1 = $this->input->post('kuesionerCpertanyaan1', TRUE);
			$kDp1 = $this->input->post('kuesionerDpertanyaan1', TRUE);
			$kEp1 = $this->input->post('kuesionerEpertanyaan1', TRUE);
			$kFp1 = $this->input->post('kuesionerFpertanyaan1', TRUE);
			$kGp1 = $this->input->post('kuesionerGpertanyaan1', TRUE);
			$kGp2 = $this->input->post('kuesionerGpertanyaan2', TRUE);
			$kHp1 = $this->input->post('kuesionerHpertanyaan1', TRUE);
			$kIp1 = $this->input->post('kuesionerIpertanyaan1', TRUE);
			$kIp2 = $this->input->post('kuesionerIpertanyaan2', TRUE);

			$k10p1 = $this->input->post('kuesioner10pertanyaan1');
			// $message=strip_tags(htmlspecialchars($this->input->post('message',TRUE),ENT_QUOTES));
			$this->sijablay_model->save_message8($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1, $kGp2, $kHp1, $kIp1, $kIp2, $k10p1);
			$this->session->set_flashdata('msg', '<div class="alert alert-info">Terima kasih telah mengisi kuesioner Sistem Penilaian Berbasis Layanan di Kantor KKP Kelas III Sorong .</div>');
			redirect('sijablay-klirens');
		}
	}
}
