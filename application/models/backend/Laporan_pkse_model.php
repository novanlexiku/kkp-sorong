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

    function get_all_laporan_pkse_2()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_pkse_2_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac,u.user_id,u.user_name,u.user_nip, u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_all_laporan_pkse_3()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_pkse_3_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k,u.user_id,u.user_name,u.user_nip, u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_all_laporan_pkse_4()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_pkse_4_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac,u.user_id,u.user_name,u.user_nip, u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
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

    function add_new_row2($tgl, $wilker, $ln1, $ln2, $ln3, $ln4, $ln5, $ln6, $dn1, $dn2, $dn3, $dn4, $dn5, $dn6, $ehac)
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
        $this->db->insert('laporan_pkse_2', $data);
    }

    function add_new_row3($tgl, $wilker, $cop, $phqc, $hb, $sscec, $sscc, $ome, $sp, $p3k)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_wilker' => $wilker,
            'laporan_cop' => $cop,
            'laporan_phqc' => $phqc,
            'laporan_hbook' => $hb,
            'laporan_sscec' => $sscec,
            'laporan_sscc' => $sscc,
            'laporan_ome' => $ome,
            'laporan_sail' => $sp,
            'laporan_p3k' => $p3k,
        );
        $this->db->insert('laporan_pkse_3', $data);
    }

    function add_new_row4($tgl, $wilker, $naik, $turun, $sakit, $sehat, $rujuk, $tdkrujuk, $ijin, $ehac)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_wilker' => $wilker,
            'laporan_pnaik' => $naik,
            'laporan_pturun' => $turun,
            'laporan_psakit' => $sakit,
            'laporan_psehat' => $sehat,
            'laporan_prujuk' => $rujuk,
            'laporan_ptidakrujuk' => $tdkrujuk,
            'laporan_ijin' => $ijin,
            'laporan_ehac' => $ehac,
        );
        $this->db->insert('laporan_pkse_4', $data);
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

    function get_laporan_pkse2_all()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id ");
        return $hsl;
    }

    function get_laporan_pkse2_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=2");
        return $hsl;
    }

    function get_laporan_pkse2_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=3");
        return $hsl;
    }

    function get_laporan_pkse2_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=4");
        return $hsl;
    }

    function get_laporan_pkse2_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=5");
        return $hsl;
    }

    function get_laporan_pkse2_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=6");
        return $hsl;
    }

    function get_laporan_pkse2_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=7");
        return $hsl;
    }

    function get_laporan_pkse2_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=8");
        return $hsl;
    }

    function get_laporan_pkse2_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_ln_asalsehat,l.laporan_ln_asalinf,l.laporan_ln_hpsehat,l.laporan_ln_hpinf,l.laporan_ln_abksehat,l.laporan_ln_abkinf,l.laporan_dn_asalsehat,l.laporan_dn_asalinf,l.laporan_dn_hpsehat,l.laporan_dn_hpinf,l.laporan_dn_abksehat,l.laporan_dn_abkinf,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=9");
        return $hsl;
    }

    function get_laporan_pkse3_all()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id ");
        return $hsl;
    }

    function get_laporan_pkse3_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=2");
        return $hsl;
    }

    function get_laporan_pkse3_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=3");
        return $hsl;
    }

    function get_laporan_pkse3_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=4");
        return $hsl;
    }

    function get_laporan_pkse3_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=5");
        return $hsl;
    }

    function get_laporan_pkse3_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=6");
        return $hsl;
    }

    function get_laporan_pkse3_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=7");
        return $hsl;
    }

    function get_laporan_pkse3_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=8");
        return $hsl;
    }

    function get_laporan_pkse3_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_cop,l.laporan_phqc,l.laporan_hbook,l.laporan_sscec,l.laporan_sscc,l.laporan_ome,l.laporan_sail,l.laporan_p3k, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=9");
        return $hsl;
    }

    function get_total_cop($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_cop) as laporan_cop FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_phqc($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_phqc) as laporan_phqc FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_hb($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_hbook) as laporan_hbook FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_sscec($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_sscec) as laporan_sscec FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_sscc($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_sscc) as laporan_sscc FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_ome($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_ome) as laporan_ome FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_sp($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_sail) as laporan_sail FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_p3k($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_p3k) as laporan_p3k FROM laporan_pkse_3 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_laporan_pkse4_all()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id ");
        return $hsl;
    }

    function get_laporan_pkse4_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=2");
        return $hsl;
    }

    function get_laporan_pkse4_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=3");
        return $hsl;
    }

    function get_laporan_pkse4_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=4");
        return $hsl;
    }

    function get_laporan_pkse4_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=5");
        return $hsl;
    }

    function get_laporan_pkse4_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=6");
        return $hsl;
    }

    function get_laporan_pkse4_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=7");
        return $hsl;
    }

    function get_laporan_pkse4_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=8");
        return $hsl;
    }

    function get_laporan_pkse4_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pnaik,l.laporan_pturun,l.laporan_psakit,l.laporan_psehat,l.laporan_prujuk,l.laporan_ptidakrujuk,l.laporan_ijin,l.laporan_ehac, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=9");
        return $hsl;
    }

    function get_total_naik($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_pnaik) as laporan_pnaik FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_turun($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_pturun) as laporan_pturun FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_sakit($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_psakit) as laporan_psakit FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_sehat($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_psehat) as laporan_psehat FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_rujuk($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_prujuk) as laporan_prujuk FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_tdkrujuk($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_ptidakrujuk) as laporan_ptidakrujuk FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_ijin($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_ijin) as laporan_ijin FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_ehac($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_ehac) as laporan_ehac FROM laporan_pkse_4 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }
}
