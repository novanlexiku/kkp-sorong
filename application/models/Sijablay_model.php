<?php

class Sijablay_model extends CI_Model
{

	function save_message($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $kAp1, $kBp1, $kCp1, $kDp1, $kEp1, $kFp1, $kGp1,  $kHp1, $kIp1, $kIp2)
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

		);
		$this->db->insert('tbl_kuesioner', $data);
	}

	function save_message1($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k1p1, $k2p1, $k2p2, $k3p1, $k3p2)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,

			'kuesioner_1_p1' =>  $k1p1,


		);

		$data2_1 = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,

			'kuesioner_2_p1' =>  $k2p1,


		);
		$data2_2 = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,

			'kuesioner_2_p2' =>  $k2p2,


		);
		$data3_1 = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_3_p1' =>  $k3p1,

		);
		$data3_2 = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_3_p2' =>  $k3p2

		);
		$this->db->trans_start();
		$this->db->insert('tbl_kuesioner1p1', $data);
		$this->db->insert('tbl_kuesioner1p2_1', $data2_1);
		$this->db->insert('tbl_kuesioner1p2_2', $data2_2);
		$this->db->insert('tbl_kuesioner1p3_1', $data3_1);
		$this->db->insert('tbl_kuesioner1p3_2', $data3_2);
		$this->db->trans_complete();
	}

	function save_message2($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k4p1, $k4p2)
	{
		$data1 = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_4_p1' => $k4p1,

		);
		$data2 = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_4_p2' => $k4p2

		);
		$this->db->trans_start();
		$this->db->insert('tbl_kuesioner2p1', $data1);
		$this->db->insert('tbl_kuesioner2p2', $data2);

		$this->db->trans_complete();
	}

	function save_message3($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k5p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_5_p1' => $k5p1

		);
		$this->db->insert('tbl_kuesioner3', $data);
	}

	function save_message4($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k6p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_6_p1' => $k6p1

		);
		$this->db->insert('tbl_kuesioner4', $data);
	}

	function save_message5($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k7p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_7_p1' => $k7p1

		);
		$this->db->insert('tbl_kuesioner5', $data);
	}

	function save_message6($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k8p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_8_p1' => $k8p1,

		);
		$this->db->insert('tbl_kuesioner6', $data);
	}

	function save_message7($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k9p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_9_p1' => $k9p1
		);
		$this->db->insert('tbl_kuesioner7', $data);
	}

	function save_message8($name, $email, $jeniskelamin, $usia, $alamat, $nohp, $identitas, $k10p1)
	{
		$data = array(
			'kuesioner_name' => $name,
			'kuesioner_email' => $email,
			'kuesioner_jenis_kelamin' => $jeniskelamin,
			'kuesioner_usia' => $usia,
			'kuesioner_alamat' => $alamat,
			'kuesioner_nohp' => $nohp,
			'kuesioner_identitas' => $identitas,


			'kuesioner_10_p1' => $k10p1
		);
		$this->db->insert('tbl_kuesioner8', $data);
	}
}
