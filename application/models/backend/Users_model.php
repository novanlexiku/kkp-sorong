<?php
class Users_model extends CI_Model
{

	function get_users()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}

	function insert_user($nip, $nama, $email, $pass, $level, $wilker, $gambar)
	{
		$hsl = $this->db->query("INSERT INTO tbl_user(user_nip,user_name,user_email,user_password,user_level,user_status,user_photo,user_wilker) VALUES ('$nip','$nama','$email',MD5('$pass'),'$level','1','$gambar','$wilker')");
		return $hsl;
	}

	function insert_user_noimg($nip, $nama, $email, $pass, $level, $wilker)
	{
		$hsl = $this->db->query("INSERT INTO tbl_user(user_nip,user_name,user_email,user_password,user_level,user_status,user_wilker) VALUES ('$nip','$nama','$email',MD5('$pass'),'$level','1','$wilker')");
		return $hsl;
	}

	function update_user_nopass($userid, $nip, $nama, $email, $level, $gambar, $wilker)
	{
		$hsl = $this->db->query("UPDATE tbl_user SET user_nip='$nip', user_name='$nama',user_email='$email',user_level='$level',user_photo='$gambar', user_wilker='$wilker' WHERE user_id='$userid'");
		return $hsl;
	}

	function update_user_nopassimg($userid, $nip, $nama, $email, $level, $wilker)
	{
		$hsl = $this->db->query("UPDATE tbl_user SET user_nip='$nip', user_name='$nama',user_email='$email',user_level='$level', user_wilker='$wilker' WHERE user_id='$userid'");
		return $hsl;
	}

	function update_user($userid, $nip, $nama, $email, $pass, $level, $gambar, $wilker)
	{
		$hsl = $this->db->query("UPDATE tbl_user SET user_nip='$nip', user_name='$nama',user_email='$email',user_password=MD5('$pass'),user_level='$level',user_photo='$gambar', user_wilker='$wilker' WHERE user_id='$userid'");
		return $hsl;
	}

	function update_user_noimg($userid, $nip, $nama, $email, $pass, $level, $wilker)
	{
		$hsl = $this->db->query("UPDATE tbl_user SET user_nip='$nip', user_name='$nama',user_email='$email',user_password=MD5('$pass'),user_level='$level', user_wilker='$wilker' WHERE user_id='$userid'");
		return $hsl;
	}

	function lock_user($user_id)
	{
		$hsl = $this->db->query("UPDATE tbl_user SET user_status='0' WHERE user_id='$user_id'");
		return $hsl;
	}

	function unlock_user($user_id)
	{
		$hsl = $this->db->query("UPDATE tbl_user SET user_status='1' WHERE user_id='$user_id'");
		return $hsl;
	}

	function delete_user($userid)
	{
		$hsl = $this->db->query("DELETE FROM tbl_user WHERE user_id='$userid'");
		return $hsl;
	}

	function validasi_email($email)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_user WHERE user_email='$email'");
		return $hsl;
	}

	function get_users_wilker()
	{
		$hsl = $this->db->query("SELECT u.user_id,u.user_nip,u.user_name,u.user_email,u.user_level,u.user_photo,u.user_wilker,w.wilker_id,w.wilker_nama FROM tbl_user u, tbl_wilker w where u.user_wilker = w.wilker_id and u.user_level>1");
		return $hsl;
	}
}
