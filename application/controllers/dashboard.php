<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->user->tampil_data()->result();
        $this->load->view('dashboard', $data);
    }
}
