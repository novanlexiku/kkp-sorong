<?php
class Laporan_pkse_model extends CI_Model
{

    function get_all_laporan_pkse_1()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_pkse_1_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac,u.user_id,u.user_name,u.user_nip, u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function add_new_row($tgl, $wilker, $ln1, $ln2, $ln3, $ln4, $ln5, $ln6, $dn1, $dn2, $dn3, $dn4, $dn5, $dn6, $ehac)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_wilker' => $wilker,
            'laporan_ln_asalsehat' => $ln1,
            'laporan_ln_asalinf' => $ln2,
            'laporan_ln_hpsehat' => $ln3,
            'laporan_ln_hpinf' => $ln4,
            'laporan_ln_abksehat' => $ln5,
            'laporan_ln_abkinf' => $ln6,
            'laporan_dn_asalsehat' => $dn1,
            'laporan_dn_asalinf' => $dn2,
            'laporan_dn_hpsehat' => $dn3,
            'laporan_dn_hpinf' => $dn4,
            'laporan_dn_abksehat' => $dn5,
            'laporan_dn_abkinf' => $dn6,
            'laporan_ehac' => $ehac,
        );
        $this->db->insert('laporan_pkse_1', $data);
    }

    function get_laporan_pkse1_all()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id ");
        return $hsl;
    }

    function get_laporan_pkse1_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=2");
        return $hsl;
    }

    function get_laporan_pkse1_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=3");
        return $hsl;
    }

    function get_laporan_pkse1_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=4");
        return $hsl;
    }

    function get_laporan_pkse1_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=5");
        return $hsl;
    }

    function get_laporan_pkse1_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=6");
        return $hsl;
    }

    function get_laporan_pkse1_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=7");
        return $hsl;
    }

    function get_laporan_pkse1_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=8");
        return $hsl;
    }

    function get_laporan_pkse1_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_1 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=9");
        return $hsl;
    }
}
