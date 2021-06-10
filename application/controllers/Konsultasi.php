<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_konsultasi', 'konsul');
    }

    public function index()
    {
        if (!$this->session->userdata('email')) {
            redirect('registerpasien');
        }
        $data['ciri']       = $this->db->get('tb_motorik')->result_array();
        $data['judul']      = 'Konsultasi Sis-Par Penyakit Paru Paru';
        $data['sub_judul']  = 'Halaman Konsultasi';
        $this->load->view('user/v_header', $data);
        $this->load->view('user/v_sidebar');
        $this->load->view('v_konsultasi', $data);
        $this->load->view('user/v_footer');
    }

    public function proses()
    {
        // Make Validation URL
        if (!$this->input->post('ciri', true)) {
            redirect('konsultasi');
        } else {

            $data2   = $this->konsul->getPertumbuhan();

            // Mulai Perhitungan Metode CBR
            $i = 0;
            foreach ($data2 as $row) {

                $jml        = 0;
                $nilai      = 0;
                $pertumbuhan      = $row['id_pertumbuhan'];
                $kasus      = $this->konsul->getStatus($pertumbuhan);
                $status   = $kasus['nama_pertumbuhan'];
                $dipilih    = count($this->input->post('ciri', true));

                // Perulangan perhitungan metode CBR
                foreach ($this->input->post('ciri', true) as $selected) {
                    $ciri   = $selected;
                    $row    = $this->konsul->getCiri($ciri);
                    $get    = $this->konsul->getSama($pertumbuhan, $ciri);
                    if (isset($get)) {
                        $jml += 1;
                        $nilai += (1 * $get['bobot']);
                    } else {
                        $jml += 0;
                    }
                }

                $pembagi    = $this->konsul->getPembagi($pertumbuhan);
                $jml_ciri   = $this->konsul->getJmlCiri($pertumbuhan);
                $hasil = $nilai / "$pembagi";

                $final[$i] = array(
                    'id_pertumbuhan'      => $pertumbuhan,
                    'nama_pertumbuhan'    => $status,
                    'jml_cocok'     => $jml,
                    'jml_gejala'    => $jml_ciri,
                    'jml_dipilih'   => $dipilih,
                    'bobot_sama'    => $nilai,
                    'total_bobot'   => $pembagi,
                    'hasil'         => $hasil
                );

                $i++;
            }

            // Mengurutkan array hasil descending
            $this->array_sort_by_column($final, 'hasil');

            // Passing data ke Views
            $data['judul']      = 'Hasil Perhitungan Metode CBR';
            $data['sub_judul']  = 'Hasil Analisa Dengan Metode CBR';
            $data['final']      = $final;
            $data['klas']       = $this->konsul->getData();
            $data['ciri']       = $this->input->post('ciri', true);
            $this->load->view('user/v_header', $data);
            $this->load->view('user/v_sidebar');
            $this->load->view('v_perhitungan', $data);
            $this->load->view('user/v_footer');
        }
    }

    // Fungsi Descending Array
    function array_sort_by_column(&$arr, $col, $dir = SORT_DESC)
    {
        $sort_col = array();
        foreach ($arr as $key => $row) {
            $sort_col[$key] = $row[$col];
        }
        array_multisort($sort_col, $dir, $arr);
    }
}
