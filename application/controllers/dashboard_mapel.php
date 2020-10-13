<?php

class Dashboard_mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mapel');
    }
    public function index()
    {
        $data['pelajaran'] = $this->m_mapel->tampil_data()->result();
        $this->load->view('mapel/dashboard_mapel', $data);
    }

    public function tambah_aksi()
    {
        $mata_pelajaran      = $this->input->post('mata_pelajaran');
        $nm_guru             = $this->input->post('nm_guru');

        $data = array(
            'mata_pelajaran' => $mata_pelajaran,
            'nama_guru' => $nm_guru
        );
        $this->m_mapel->input_data('tb_mapel', $data);
        redirect(base_url('dashboard_mapel'));
    }

    public function hapus_data($id)
    {
        $where = array('id' => $id);
        $this->m_mapel->hapus_data('tb_mapel', $where);
        redirect(base_url('dashboard_mapel'));
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['pelajaran'] = $this->m_mapel->update($where, 'tb_mapel')->result();
        $this->load->view('mapel/edit_mapel', $data);
    }

    public function update_data()
    {
        $id             = $this->input->post('id');
        $mata_pelajaran = $this->input->post('mata_pelajaran');
        $nm_guru        = $this->input->post('nm_guru');

        $data = array(
            'mata_pelajaran' => $mata_pelajaran,
            'nama_guru' => $nm_guru
        );

        $where = array(
            'id' => $id
        );

        $this->m_mapel->edit_data($where, $data, 'tb_mapel');
        redirect(base_url('dashboard_mapel'));
    }

    public function show($id)
    {
        $where = array('id' => $id);
        $data['pelajaran'] = $this->m_mapel->show_data($where, 'tb_mapel')->result();
        $this->load->view('mapel/show_mapel', $data);
    }
}
