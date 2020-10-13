<?php

class M_mapel extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_mapel');
    }

    public function input_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function edit_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function show_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
