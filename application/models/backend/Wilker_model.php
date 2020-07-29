<?php
class Wilker_model extends CI_Model
{

    function get_all_wilker()
    {
        $hsl = $this->db->query("SELECT * from tbl_wilker where wilker_id > 1");
        return $hsl;
    }


    function add_new_row($nama, $alamat)
    {
        $data = array(
            'wilker_nama' => $nama,
            'wilker_alamat' => $alamat
        );
        $this->db->insert('tbl_wilker', $data);
    }

    function edit_row($id, $nama, $alamat)
    {
        $data = array(
            'wilker_nama' => $nama,
            'wilker_alamat' => $alamat
        );
        $this->db->where('wilker_id', $id);
        $this->db->update('tbl_wilker', $data);
    }

    function delete_row($id)
    {
        $this->db->where('wilker_id', $id);
        $this->db->delete('tbl_wilker');
    }
}
