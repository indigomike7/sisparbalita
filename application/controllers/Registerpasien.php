<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registerpasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username2')) {
            redirect('konsultasi');
        }
        $this->load->library('form_validation');
        $this->load->model('m_gejala', 'mega');
    }

    public function logoutpasien()
    {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama_pasien');
		$this->session->unset_userdata('umur_pasien');
		redirect('awal');
    }
    public function index()
    {
		$data['judul']      = 'Konsultasi Sis-Par Penyakit Paru Paru';
        $data['sub_judul']  = 'Halaman Registrasi / Login';
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');        

        if ($this->form_validation->run() == false ) {
			if(!empty($_REQUEST))
			{
                $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Anda gagal Register, Silahkan coba lagi!</div>');
			}
			$this->load->view('user/v_header', $data);
			$this->load->view('user/v_sidebar');
			$this->load->view('v_register', $data);
			$this->load->view('user/v_footer');
        } else {
            $nama_pasien = $this->input->post('nama_pasien');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password  = $this->input->post('password');
            $umur_pasien  = $this->input->post('umur_pasien');
      
			$exist= $this->db->query("select email from user where email = '".$email."'")->num_rows();
			if($exist > 0 )
			{
                $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Email anda sudah terdaftar, silahkan Login!</div>');
				redirect("registerpasien");
			}

            $data = array(
                'nama' => $nama,
                'nama_pasien' => $nama_pasien,
                'umur_pasien'       => $umur_pasien,
                'email'       => $email,
                'password'       => $password
            );

            $this->db->insert('user', $data);
                $data = [
                    'email' => $email, 'umur_pasien'=>$umur_pasien,'nama_pasien'=>$nama_pasien
                ];
                $this->session->set_userdata($data);

            $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Berhasil registrasi</div>');
            redirect('konsultasi');
        }
    }

    public function loginpasien()
    {
		$data['judul']      = 'Konsultasi Sis-Par Penyakit Paru Paru';
        $data['sub_judul']  = 'Halaman Registrasi / Login';
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false ) {
			if(!empty($_REQUEST))
			{
                $this->session->set_flashdata('info2', '<div class="alert alert-danger" role="alert">Masukkan email dan password anda!</div>');
			}
			$this->load->view('user/v_header', $data);
			$this->load->view('user/v_sidebar');
			$this->load->view('v_register', $data);
			$this->load->view('user/v_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
      
			$exist= $this->db->query("select email,password from user where email = '".$email."' and password='".$password."'")->num_rows();
			if($exist > 0 )
			{
				$umur_pasien=1;
				$nama_pasien="";
				$query= $this->db->query("select email,password,nama_pasien, umur_pasien from user where email = '".$email."' and password='".$password."'");
				foreach($query->result() as $row)
				{
					$umur_pasien=$row->umur_pasien;
					$nama_pasien=$row->nama_pasien;
				}
                $datax = [
                    'email' => $email, 'umur_pasien'=>$umur_pasien, 'nama_pasien'=>$nama_pasien
                ];
                $this->session->set_userdata($datax);
				redirect("konsultasi");
			}
			else
			{
				$this->session->set_flashdata('info2', '<div class="alert alert-danger" role="alert">Email dan password salah, Coba login lagi dengan email dan password anda!</div>');
			}
        $this->load->view('user/v_header', $data);
        $this->load->view('user/v_sidebar');
        $this->load->view('v_register', $data);
        $this->load->view('user/v_footer');
        }
    }
}

