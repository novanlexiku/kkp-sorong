<?php
class Wilker_model extends CI_Model
{

    function get_all_wilker()
    {
        $result = $this->db->get('tbl_wilker');
        return $result;
    }

    function add_new_row($nama)
    {
        $data = array(
            'wilker_nama' => $nama
        );
        $this->db->insert('tbl_wilker', $data);
    }

    function edit_row($id, $nama)
    {
        $data = array(
            'wilker_nama' => $nama,
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