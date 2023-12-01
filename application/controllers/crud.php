<?php
class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_data');
        $this->load->helper('url');
    }
    function index()
    {
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil', $data);
    }
    function tambah()
    {
        $this->load->view('v_input');
    }
    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $spp = $this->input->post('spp');
        $tanggal_bayar = $this->input->post('tanggal_bayar');
        $data = array(
            'nama' => $nama,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'spp' => $spp,
            'tanggal_bayar' => $tanggal_bayar
        );
        $this->m_data->input_data($data, 'user');
        redirect('crud/index');
    }
    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('crud/index');
    }
    function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('v_edit', $data);
    }
    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $spp = $this->input->post('spp');
        $data = array(
            'nama' => $nama,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'spp' => $spp
        );
        $where = array(
            'id' => $id
        );
        $this->m_data->update_data($where, $data, 'user');
        redirect('crud/index');
    }
}
