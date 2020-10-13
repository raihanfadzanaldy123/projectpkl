<?php

class C_guru extends CI_Controller
{
    public function index()
    {
        $data['m_guru'] = $this->m_guru->tampil_data()->result();
        $this->load->view('guru/index', $data);
    }
}
