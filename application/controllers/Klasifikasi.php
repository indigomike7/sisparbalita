<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Klasifikasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('awal');
        }
        $this->load->model('m_klasifikasi', 'klas');
    }

    public function index()
    {
        $data['klas']       = $this->klas->getData();
        $data['judul']      = 'Basis Kasus - SisPar Pertumbuhan Balita';
        $data['sub_judul']  = 'Tabel Basis Kasus';
        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_sidebar');
        $this->load->view('kasus/v_klasifikasi', $data);
        $this->load->view('template/v_footer');
    }

    public function detail($id_pertumbuhan)
    {
        $data['detail']     = $this->klas->getById($id_pertumbuhan);
        $data['status']   = $this->klas->getStatusById($id_pertumbuhan);
        $data['judul']      = 'Basis Kasus - SisPar Pertumbuhan Balita';
        $data['sub_judul']  = 'Tabel Detail Basis Kasus';
        $data['id_pertumbuhan']   = $id_pertumbuhan;
        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_sidebar');
        $this->load->view('kasus/v_detailklas', $data);
        $this->load->view('template/v_footer');
    }

    public function tambah()
    {
        $data['judul']      = 'Basis Kasus - SisPar Pertumbuhan Balita';
        $data['sub_judul']  = 'Tambah Data Basis Kasus';
        $data['status']   = $this->klas->getStatus();
        $data['gejala']     = $this->klas->getGejala();

        // aturan validasi
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('template/v_sidebar');
            $this->load->view('kasus/v_addklas', $data);
            $this->load->view('template/v_footer', $data);
        } else {
            $status   = $this->input->post('status', true);

            // Perulangan input gejala
            foreach ($this->input->post('gejala', true) as $selected) {
                $gejala = $selected;

                //Cek Gejala
                $cek_gejala = $this->klas->cekGejala($status, $gejala);

                //Buat kondisi
                if ($cek_gejala) {
                    true;
                } else {
                    $data = array(
                        'id_pertumbuhan'         => $status,
                        'id_ciri'          => $gejala
                    );

                    //Insert Ke Database
                    $this->db->insert('tb_klasifikasi', $data);
                }
            }
            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Basis Kasus Berhasil di Tambahkan</div>');
            redirect('klasifikasi');
        }
    }

    //Hapus relasi
    public function hapus($id_pertumbuhan)
    {
        $this->db->where('id_pertumbuhan', $id_pertumbuhan);
        $this->db->delete('tb_klasifikasi');
        $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Data Basis Kasus Berhasil di Hapus</div>');
        redirect('klasifikasi');
    }

    //Hapus Gejala Basis Kasus
    public function hapusGejala($id_pertumbuhan, $id_ciri)
    {
        $status = $this->klas->getStatusById($id_pertumbuhan);
        $namape   = $status['nama_pertumbuhan'];

        $this->db->where('id_pertumbuhan', $id_pertumbuhan);
        $this->db->where('id_ciri', $id_ciri);
        $this->db->delete('tb_klasifikasi');
        $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Gejala Kasus Status ' . $namape . ' Berhasil di Hapus</div>');
        redirect('klasifikasi/detail/' . $id_pertumbuhan);
    }

    //Tambah Gejala Basis Kasus
    public function tambahGejala($id_pertumbuhan)
    {
        $data['judul']      = 'Basis Kasus - SisPar Pertumbuhan Balita';
        $data['sub_judul']  = 'Tambah Gejala Basis Kasus';
        $data['status']   = $this->klas->getStatusById($id_pertumbuhan);
        $data['detail']     = $this->klas->getById($id_pertumbuhan);
        $data['gejala']     = $this->klas->getOption($id_pertumbuhan);

        // aturan validasi
        $this->form_validation->set_rules('id_gejala', 'ID Gejala', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/v_header', $data);
            $this->load->view('template/v_sidebar');
            $this->load->view('kasus/v_editkasus', $data);
            $this->load->view('template/v_footer');
        } else {
            $id_pertumbuhan   = $this->input->post('id_pertumbuhan', true);
            $id_ciri    = $this->input->post('id_gejala', true);

            $data = array(
                'id_pertumbuhan'  => $id_pertumbuhan,
                'id_ciri'     => $id_ciri
            );

            $this->db->insert('tb_klasifikasi', $data);

            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Data Gejala Berhasil di Tambahkan</div>');
            redirect('klasifikasi/detail/' . $id_pertumbuhan);
        }
    }
}
