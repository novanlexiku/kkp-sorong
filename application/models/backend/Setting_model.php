<?php

class Setting_model extends CI_Model
{

	function get_home_data()
	{
		$query = $this->db->get('tbl_home', 1);
		return $query;
	}

	function update_information($home_id, $caption1, $caption2, $bg_heading, $bg_testimoni)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_bg_heading', $bg_heading);
		$this->db->set('home_bg_testimonial', $bg_testimoni);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_heading($home_id, $caption1, $caption2, $bg_heading)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_bg_heading', $bg_heading);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_testimoni($home_id, $caption1, $caption2, $bg_testimoni)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_bg_testimonial', $bg_testimoni);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_noimg($home_id, $caption1, $caption2)
	{
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	// about information

	function get_about_data()
	{
		$query = $this->db->get('tbl_about', 1);
		return $query;
	}

	function update_information_about($about_id, $description, $image)
	{
		$this->db->set('about_image', $image);
		$this->db->set('about_description', $description);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about_noimg($about_id, $description)
	{
		$this->db->set('about_description', $description);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	// profile information

	function get_profile_data()
	{
		$query = $this->db->get('tbl_profile', 1);
		return $query;
	}

	function update_information_profile($profile_id, $visi, $misi, $nilai, $image, $image2)
	{
		$this->db->set('profile_image', $image);
		$this->db->set('profile_image_struktur', $image2);
		$this->db->set('profile_visi', $visi);
		$this->db->set('profile_misi', $misi);
		$this->db->set('profile_nilai', $nilai);
		$this->db->where('profile_id', $profile_id);
		$this->db->update('tbl_profile');
	}

	function update_information_profile_noimg($profile_id, $visi, $misi, $nilai)
	{
		$this->db->set('profile_visi', $visi);
		$this->db->set('profile_misi', $misi);
		$this->db->set('profile_nilai', $nilai);
		$this->db->where('profile_id', $profile_id);
		$this->db->update('tbl_profile');
	}
}
