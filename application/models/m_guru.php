<?php

class M_guru extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_guru');
    }
}
