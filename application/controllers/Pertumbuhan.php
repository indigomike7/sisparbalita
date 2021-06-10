<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertumbuhan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('awal');
        }
        $this->load->library('form_validation');
        $this->load->model('m_status');
    }

    public function index()
    {
        $data['macam']      = $this->db->get('tb_pertumbuhan')->result_array();
        $data['judul']      = 'SisPar - Data pertumbuhan';
        $data['sub_judul']  = 'Tabel Pertumbuhan';
        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_sidebar');
        $this->load->view('status/v_pertumbuhan', $data);
        $this->load->view('template/v_footer');
    }

    public function tambah()
    {
        $data['id_pertumbuhan']   = $this->m_status->kode();
        $data['judul']      = 'SisPar - Data pertumbuhan';
        $data['sub_judul']  = 'Tambah Data Penyakit';

        // aturan validasi
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail Penyakit', 'trim|required');
        $this->form_validation->set_rules('solusi', 'Solusi Penyakit', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('template/v_sidebar');
            $this->load->view('status/v_addpertumbuhan', $data);
            $this->load->view('template/v_footer');
        } else {
            $id_pertumbuhan   = $this->input->post('id_pertumbuhan', true);
            $status   = $this->input->post('status', true);
            $detail     = $this->input->post('detail', true);
            $solusi     = $this->input->post('solusi', true);

            $data = array(
                'id_pertumbuhan'         => $id_pertumbuhan,
                'nama_pertumbuhan'       => $status,
                'detail_pertumbuhan'     => $detail,
                'solusi_pertumbuhan'     => $solusi
            );

            $this->db->insert('tb_pertumbuhan', $data);

            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Status Berhasil di Tambahkan</div>');
            redirect('pertumbuhan');
        }
    }

    public function edit($id_pertumbuhan)
    {
        $data['judul']      = 'Penyakit - SisPar Penyakit Paru Paru';
        $data['sub_judul']  = 'Edit Data Penyakit';
        $data['status']   = $this->m_status->getData($id_pertumbuhan);

        // aturan validasi
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail Penyakit', 'trim|required');
        $this->form_validation->set_rules('solusi', 'Solusi Penyakit', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('template/v_sidebar');
            $this->load->view('status/v_editpertumbuhan', $data);
            $this->load->view('template/v_footer');
        } else {
            $id_pertumbuhan   = $this->input->post('id_pertumbuhan', true);
            $status   = $this->input->post('status', true);
            $detail     = $this->input->post('detail', true);
            $solusi     = $this->input->post('solusi', true);

            $data = array(
                'nama_pertumbuhan'       => $status,
                'detail_pertumbuhan'     => $detail,
                'solusi_pertumbuhan'     => $solusi
            );

            $this->m_status->editData($id_pertumbuhan, $data);

            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Status Berhasil di Ubah</div>');
            redirect('pertumbuhan');
        }
    }

    public function hapus($id_pertumbuhan)
    {
        $this->db->where('id_pertumbuhan', $id_pertumbuhan);
        $this->db->delete('tb_pertumbuhan');
        $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Data Status Berhasil di Hapus</div>');
        redirect('pertumbuhan');
    }
}
