<?php
class Laporan_klw_model extends CI_Model
{

    function get_all_laporan_klw_1()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_id,l.laporan_penyakit_id,p.penyakit_id,p.penyakit_nama,l.laporan_abk,l.laporan_tkbm,l.laporan_penumpang,l.laporan_pp,l.laporan_kkp,l.laporan_sh,l.laporan_umum,l.laporan_wilker,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_1 l, tbl_penyakit p, tbl_user u, tbl_wilker w WHERE l.laporan_penyakit_id = p.penyakit_id and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }
    function get_all_laporan_klw_2()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_pekerjaan,l.laporan_hasil,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_2 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_klw_3()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_seri,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_status,l.laporan_vaksin,l.laporan_negara,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_3 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_klw_4()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_4 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_klw_5()
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_kelas,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_5 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id");
        return $hsl;
    }

    function get_all_laporan_klw_1_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_id,l.laporan_penyakit_id,p.penyakit_id,p.penyakit_nama,l.laporan_abk,l.laporan_tkbm,l.laporan_penumpang,l.laporan_pp,l.laporan_kkp,l.laporan_sh,l.laporan_umum,l.laporan_wilker,u.user_id,u.user_name,u.user_nip, u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_1 l, tbl_penyakit p, tbl_user u, tbl_wilker w WHERE l.laporan_penyakit_id = p.penyakit_id and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_all_laporan_klw_2_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_pekerjaan,l.laporan_hasil,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_2 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }
    function get_all_laporan_klw_3_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_seri,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_status,l.laporan_vaksin,l.laporan_negara,l.laporan_tujuan,l.laporan_wilker,u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_3 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_all_laporan_klw_4_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_4 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_all_laporan_klw_5_petugas()
    {
        $wilker = $this->session->userdata('wilker');
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_kelas,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_5 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function add_new_row($pid, $tgl, $abk, $tkbm, $penumpang, $pp, $kkp, $sh, $umum, $wilker)
    {
        $data = array(
            'laporan_penyakit_id' => $pid,
            'laporan_abk' => $abk,
            'laporan_tkbm' => $tkbm,
            'laporan_penumpang' => $penumpang,
            'laporan_pp' => $pp,
            'laporan_kkp' => $kkp,
            'laporan_sh' => $sh,
            'laporan_umum' => $umum,
            'laporan_tanggal' => $tgl,
            'laporan_wilker' => $wilker

        );
        $this->db->insert('laporan_klw_1', $data);
    }
    function add_new_row2($tgl, $barcode, $nama, $sex, $umur, $alamat, $job, $hasil, $tujuan, $wilker)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_barcode' => $barcode,
            'laporan_nama' => $nama,
            'laporan_sex' => $sex,
            'laporan_umur' => $umur,
            'laporan_alamat' => $alamat,
            'laporan_pekerjaan' => $job,
            'laporan_hasil' => $hasil,
            'laporan_tujuan' => $tujuan,
            'laporan_wilker' => $wilker

        );
        $this->db->insert('laporan_klw_2', $data);
    }

    function add_new_row3($tgl, $seri, $nama, $sex, $umur, $alamat, $status, $vaksin, $negara, $tujuan, $wilker)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_seri' => $seri,
            'laporan_nama' => $nama,
            'laporan_sex' => $sex,
            'laporan_umur' => $umur,
            'laporan_alamat' => $alamat,
            'laporan_status' => $status,
            'laporan_vaksin' => $vaksin,
            'laporan_negara' => $negara,
            'laporan_tujuan' => $tujuan,
            'laporan_wilker' => $wilker

        );
        $this->db->insert('laporan_klw_3', $data);
    }

    function add_new_row4($tgl, $barcode, $nama, $sex, $wn, $asal, $tujuan, $diagnosa, $wilker)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_barcode' => $barcode,
            'laporan_nama' => $nama,
            'laporan_sex' => $sex,
            'laporan_wn' => $wn,
            'laporan_asal' => $asal,
            'laporan_tujuan' => $tujuan,
            'laporan_diagnosa' => $diagnosa,
            'laporan_wilker' => $wilker

        );
        $this->db->insert('laporan_klw_4', $data);
    }

    function add_new_row5($tgl, $barcode, $nama, $kelas, $sex, $wn, $asal, $tujuan, $diagnosa, $wilker)
    {
        $data = array(
            'laporan_tanggal' => $tgl,
            'laporan_barcode' => $barcode,
            'laporan_nama' => $nama,
            'laporan_kelas' => $kelas,
            'laporan_sex' => $sex,
            'laporan_wn' => $wn,
            'laporan_asal' => $asal,
            'laporan_tujuan' => $tujuan,
            'laporan_diagnosa' => $diagnosa,
            'laporan_wilker' => $wilker

        );
        $this->db->insert('laporan_klw_5', $data);
    }

    function get_laporan_klw1_all($wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_id,l.laporan_penyakit_id,p.penyakit_id,p.penyakit_nama,p.penyakit_kategori,l.laporan_abk,l.laporan_tkbm,l.laporan_penumpang,l.laporan_pp,l.laporan_kkp,l.laporan_sh,l.laporan_umum, l.laporan_wilker,u.user_id,u.user_nip,u.user_name, w.wilker_id, w.wilker_nama FROM laporan_klw_1 l, tbl_penyakit p,tbl_user u, tbl_wilker w WHERE l.laporan_penyakit_id = p.penyakit_id and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }
    function get_laporan_klw1_kat1($tgl2, $tgl3, $wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_id,l.laporan_penyakit_id,p.penyakit_id,p.penyakit_nama,p.penyakit_kategori,l.laporan_abk,l.laporan_tkbm,l.laporan_penumpang,l.laporan_pp,l.laporan_kkp,l.laporan_sh,l.laporan_umum, l.laporan_wilker, w.wilker_id, w.wilker_nama FROM laporan_klw_1 l, tbl_penyakit p, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_penyakit_id = p.penyakit_id and l.laporan_wilker = w.wilker_id and p.penyakit_kategori=1 and l.laporan_wilker='$wilker'");
        return $hsl;
    }
    function get_laporan_klw1_kat2($tgl2, $tgl3, $wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_id,l.laporan_penyakit_id,p.penyakit_id,p.penyakit_nama,p.penyakit_kategori,l.laporan_abk,l.laporan_tkbm,l.laporan_penumpang,l.laporan_pp,l.laporan_kkp,l.laporan_sh,l.laporan_umum, l.laporan_wilker, w.wilker_id, w.wilker_nama FROM laporan_klw_1 l, tbl_penyakit p, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_penyakit_id = p.penyakit_id and l.laporan_wilker = w.wilker_id and p.penyakit_kategori=2 and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw2_all($wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_pekerjaan,l.laporan_hasil,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_2 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw2($tgl2, $tgl3, $wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_pekerjaan,l.laporan_hasil,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_2 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw3_all($wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_seri,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_status,l.laporan_vaksin,l.laporan_negara,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_3 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw3($tgl2, $tgl3, $wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_seri,l.laporan_nama,l.laporan_sex,l.laporan_umur,l.laporan_alamat,l.laporan_status,l.laporan_vaksin,l.laporan_negara,l.laporan_tujuan,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_3 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw4_all($wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_4 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw4($tgl2, $tgl3, $wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_4 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw5_all($wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,DATE_FORMAT(laporan_tanggal,'%M') AS laporan_tanggal_bulan,DATE_FORMAT(laporan_tanggal,'%Y') AS laporan_tanggal_tahun,l.laporan_barcode,l.laporan_nama,l.laporan_kelas,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_5 l, tbl_user u, tbl_wilker w WHERE l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }

    function get_laporan_klw5($tgl2, $tgl3, $wilker)
    {
        $hsl = $this->db->query("SELECT l.laporan_id,DATE_FORMAT(laporan_tanggal,'%d %M %Y') AS laporan_tanggal,l.laporan_barcode,l.laporan_nama,l.laporan_kelas,l.laporan_sex,l.laporan_wn,l.laporan_asal,l.laporan_tujuan,l.laporan_diagnosa,l.laporan_wilker, u.user_id,u.user_name,u.user_nip,u.user_wilker,w.wilker_id,w.wilker_nama FROM laporan_klw_5 l, tbl_user u, tbl_wilker w WHERE MONTH(laporan_tanggal)='$tgl2' and YEAR(laporan_tanggal)='$tgl3' and l.laporan_wilker = u.user_wilker and u.user_wilker = w.wilker_id and l.laporan_wilker='$wilker'");
        return $hsl;
    }







    // function get_abk($tanggal)
    // {
    //     $this->db->select('laporan_abk');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);

    //     return $this->db->results();
    // }
    // function get_tkbm($pid, $tanggal)
    // {
    //     $this->db->select('laporan_tkbm');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
    // function get_penumpang($pid, $tanggal)
    // {
    //     $this->db->select('laporan_penumpang');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
    // function get_pp($pid, $tanggal)
    // {
    //     $this->db->select('laporan_pp');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
    // function get_kkp($pid, $tanggal)
    // {
    //     $this->db->select('laporan_kkp');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
    // function get_sh($pid, $tanggal)
    // {
    //     $this->db->select('laporan_sh');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
    // function get_umum($pid, $tanggal)
    // {
    //     $this->db->select('laporan_umum');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
    // function get_jumlah($pid, $tanggal)
    // {
    //     $this->db->select('laporan_abk', 'laporan_tkbm', 'laporan_penumpang', 'laporan_pp', 'laporan_kkp', 'laporan_sh', 'laporan_umum');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
    // }
}
