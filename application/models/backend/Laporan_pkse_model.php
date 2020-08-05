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

    function get_all_laporan_pkse_5()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_pkse_5_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar,u.user_id,u.user_name,u.user_nip, u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
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

    function add_new_row5($tgl, $wilker, $pria, $wanita, $wna, $wni, $menular, $tdkmenular, $dalam, $luar)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_wilker' => $wilker,
            'laporan_pria' => $pria,
            'laporan_wanita' => $wanita,
            'laporan_wna' => $wna,
            'laporan_wni' => $wni,
            'laporan_menular' => $menular,
            'laporan_tidakmenular' => $tdkmenular,
            'laporan_dalam' => $dalam,
            'laporan_luar' => $luar,
        );
        $this->db->insert('laporan_pkse_5', $data);
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

    function get_laporan_pkse5_all()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id ");
        return $hsl;
    }

    function get_laporan_pkse5_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=2");
        return $hsl;
    }

    function get_laporan_pkse5_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=3");
        return $hsl;
    }

    function get_laporan_pkse5_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=4");
        return $hsl;
    }

    function get_laporan_pkse5_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=5");
        return $hsl;
    }

    function get_laporan_pkse5_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=6");
        return $hsl;
    }

    function get_laporan_pkse5_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=7");
        return $hsl;
    }

    function get_laporan_pkse5_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=8");
        return $hsl;
    }

    function get_laporan_pkse5_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_wilker,l.laporan_pria,l.laporan_wanita,l.laporan_wna,l.laporan_wni,l.laporan_menular,l.laporan_tidakmenular,l.laporan_dalam,l.laporan_luar, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_pkse_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker=9");
        return $hsl;
    }

    function get_total_pria($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_pria) as laporan_pria FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_wanita($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_wanita) as laporan_wanita FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_wna($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_wna) as laporan_wna FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_wni($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_wni) as laporan_wni FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_menular($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_menular) as laporan_menular FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_tdkmenular($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_tidakmenular) as laporan_tidakmenular FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_dalam($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_dalam) as laporan_dalam FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_luar($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_luar) as laporan_luar FROM laporan_pkse_5 WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' ");
        return $hsl;
    }

    function get_total_p1_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p1_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p1_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p1_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p1_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p1_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p1_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p1_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kolera_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=1 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p2_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p2_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p2_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p2_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p2_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p2_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p2_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p2_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as db_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=2 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p3_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p3_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p3_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p3_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p3_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p3_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p3_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p3_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as campak_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=3 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p4_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p4_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p4_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p4_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p4_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p4_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p4_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p4_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as polio_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=4 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p5_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p5_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p5_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p5_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p5_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p5_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p5_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p5_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as difteri_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=5 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p6_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p6_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p6_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p6_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p6_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p6_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p6_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p6_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as pertusis_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=6 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p7_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p7_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p7_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p7_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p7_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p7_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p7_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p7_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as rabies_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=7 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p8_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p8_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p8_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p8_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p8_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p8_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p8_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p8_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as malaria_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=8 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p9_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p9_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p9_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p9_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p9_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p9_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p9_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p9_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as chikungunya_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=9 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p10_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p10_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p10_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p10_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p10_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p10_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p10_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p10_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hepatitis_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=10 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p11_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p11_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p11_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p11_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p11_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p11_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p11_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p11_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as paru_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=11 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p12_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p12_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p12_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p12_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p12_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p12_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p12_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p12_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ispa_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=12 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p13_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p13_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p13_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p13_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p13_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p13_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p13_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p13_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as ims_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=13 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p14_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p14_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p14_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p14_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p14_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p14_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p14_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p14_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain1_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=14 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p15_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p15_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p15_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p15_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p15_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p15_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p15_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p15_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as jantung_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=15 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p16_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p16_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p16_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p16_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p16_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p16_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p16_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p16_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as diabetes_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=16 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p17_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p17_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p17_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p17_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p17_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p17_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p17_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p17_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as hipertensi_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=17 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p18_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p18_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p18_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p18_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p18_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p18_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p18_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p18_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as kecelakaan_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=18 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }

    function get_total_p19_wil1($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil1 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=2 ");
        return $hsl;
    }

    function get_total_p19_wil2($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil2 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=3 ");
        return $hsl;
    }

    function get_total_p19_wil3($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil3 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=4 ");
        return $hsl;
    }

    function get_total_p19_wil4($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil4 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=5 ");
        return $hsl;
    }

    function get_total_p19_wil5($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil5 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=6 ");
        return $hsl;
    }

    function get_total_p19_wil6($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil6 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=7 ");
        return $hsl;
    }

    function get_total_p19_wil7($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil7 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=8 ");
        return $hsl;
    }

    function get_total_p19_wil8($tgl2, $tgl3)
    {
        $hsl = $this->db->query("SELECT SUM(laporan_abk+laporan_tkbm+laporan_penumpang+laporan_pp+laporan_kkp+laporan_sh+laporan_umum) as lain2_wil8 FROM laporan_klw_1 WHERE laporan_penyakit_id=19 and MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and laporan_wilker=9 ");
        return $hsl;
    }
}
