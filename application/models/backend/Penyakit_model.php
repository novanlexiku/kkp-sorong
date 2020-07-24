<?php
class Penyakit_model extends CI_Model
{

    function get_all_penyakit()
    {
        $result = $this->db->get('tbl_penyakit');
        return $result;
    }

    function add_new_row($nama, $kat)
    {
        $data = array(
            'penyakit_nama' => $nama,
            'penyakit_kategori' => $kat
        );
        $this->db->insert('tbl_penyakit', $data);
    }

    function edit_row($id, $nama, $kat)
    {
        $data = array(
            'penyakit_nama' => $nama,
            'penyakit_kategori' => $kat
        );
        $this->db->where('penyakit_id', $id);
        $this->db->update('tbl_penyakit', $data);
    }

    function delete_row($id)
    {
        $this->db->where('penyakit_id', $id);
        $this->db->delete('tbl_penyakit');
    }
}
