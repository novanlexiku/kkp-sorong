<?php
class Jabatan_model extends CI_Model
{

    function get_all_jabatan()
    {
        $result = $this->db->query("SELECT * From tbl_jabatan order by jabatan_level asc");
        return $result;
    }

    function get_all_jabatan2()
    {
        $result = $this->db->query("SELECT * From tbl_jabatan where jabatan_level>1 and jabatan_level<99 order by jabatan_level asc");
        return $result;
    }

    function add_new_row($nama, $kat)
    {
        $data = array(
            'jabatan_nama' => $nama,
            'jabatan_level' => $kat
        );
        $this->db->insert('tbl_jabatan', $data);
    }

    function edit_row($nama, $kat)
    {
        $data = array(
            'jabatan_nama' => $nama,
        );
        $this->db->where('jabatan_level', $kat);
        $this->db->update('tbl_jabatan', $data);
    }

    function delete_row($id)
    {
        $this->db->where('jabatan_id', $id);
        $this->db->delete('tbl_jabatan');
    }
}
