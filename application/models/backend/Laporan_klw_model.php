<?php
class Laporan_klw_model extends CI_Model
{

    function get_all_laporan_klw_1()
    {
        $result = $this->db->get('laporan_klw_1');
        return $result;
    }

    function add_new_row($pid, $tgl, $abk, $tkbm, $penumpang, $pp, $kkp, $sh, $umum)
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
            'laporan_tanggal' => $tgl

        );
        $this->db->insert('laporan_klw_1', $data);
    }

    // function get_abk($pid, $tanggal)
    // {
    //     $this->db->select('laporan_abk');
    //     $this->db->from('laporan_klw_1');
    //     $this->db->where('laporan_tanggal=', $tanggal);
    //     $this->db->select('penyakitid');
    //     $this->db->join('tbl_penyakit', 'laporan_penyakit_id=penyakit_id');
    //     $this->db->where('penyakit_id=', $pid);
    //     return $this->db->count_all_results();
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
