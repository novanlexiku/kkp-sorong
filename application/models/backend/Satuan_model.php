<?php
class Satuan_model extends CI_Model
{

    function get_all_satuan()
    {
        $hsl = $this->db->query("SELECT * from tbl_satuan");
        return $hsl;
    }


    function add_new_row($nama, $singkat)
    {
        $data = array(
            'satuan_nama' => $nama,
            'satuan_singkat' => $singkat
        );
        $this->db->insert('tbl_satuan', $data);
    }

    function edit_row($id, $nama, $singkat)
    {
        $data = array(
            'satuan_nama' => $nama,
            'satuan_singkat' => $singkat
        );
        $this->db->where('satuan_id', $id);
        $this->db->update('tbl_satuan', $data);
    }

    function delete_row($id)
    {
        $this->db->where('satuan_id', $id);
        $this->db->delete('tbl_satuan');
    }
}
