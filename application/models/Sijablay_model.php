<?php

class Sijablay_model extends CI_Model
{

	function save_message1($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k1p1, $k2p1, $k2p2, $k3p1, $k3p2)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,
			'kuesioner_1_p1' =>  $k1p1,
			'kuesioner_2_p1' =>  $k2p1,
			'kuesioner_2_p2' =>  $k2p2,
			'kuesioner_3_p1' =>  $k3p1,
			'kuesioner_3_p2' =>  $k3p2

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message2($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k4p1, $k4p2)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_4_p1' => $k4p1,
			'kuesioner_4_p2' => $k4p2

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message3($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k5p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_5_p1' => $k5p1

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message4($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k6p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_6_p1' => $k6p1

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message5($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k7p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_7_p1' => $k7p1

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message6($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k8p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_8_p1' => $k8p1,

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message7($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k9p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_9_p1' => $k9p1
		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message8($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2, $k10p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,
			'kuesioner_A_p1' =>  $kAp1,
			'kuesioner_B_p1' =>  $kBp1,
			'kuesioner_C_p1' =>  $kCp1,
			'kuesioner_D_p1' =>  $kDp1,
			'kuesioner_E_p1' =>  $kEp1,
			'kuesioner_F_p1' =>  $kFp1,
			'kuesioner_G_p1' =>  $kGp1,

			'kuesioner_H_p1' =>  $kHp1,
			'kuesioner_I_p1' =>  $kIp1,
			'kuesioner_I_p2' =>  $kIp2,

			'kuesioner_10_p1' => $k10p1
		);
		$this->db->insert('tbl_kuesioner', $data);
	}
}
