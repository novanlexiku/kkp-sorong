<?php
class Inventaris_model extends CI_Model
{

    function get_all_inventaris()
    {
        $hsl = $this->db->query("SELECT i.inven_id, i.inven_nama, i.inven_satuan, i.inven_jenis, s.satuan_id, s.satuan_nama from tbl_inventaris i, tbl_satuan s where i.inven_satuan=s.satuan_id");
        return $hsl;
    }


    function add_new_row($nama, $satuan, $jenis)
    {
        $data = array(
            'inven_nama' => $nama,
            'inven_satuan' => $satuan,
            'inven_jenis' => $jenis
        );
        $this->db->insert('tbl_inventaris', $data);
    }

    function edit_row($id, $nama, $satuan, $jenis)
    {
        $data = array(
            'inven_nama' => $nama,
            'inven_satuan' => $satuan,
            'inven_jenis' => $jenis
        );
        $this->db->where('inven_id', $id);
        $this->db->update('tbl_inventaris', $data);
    }

    function delete_row($id)
    {
        $this->db->where('inven_id', $id);
        $this->db->delete('tbl_inventaris');
    }
}
