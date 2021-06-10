<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_klasifikasi extends CI_Model
{

    public function getData()
    {
        $query = "SELECT tb_klasifikasi.*, tb_pertumbuhan.nama_pertumbuhan, tb_motorik.kode ,tb_motorik.nama_ciri , tb_motorik.bobot
                    FROM tb_klasifikasi  
                    JOIN tb_pertumbuhan ON tb_klasifikasi.id_pertumbuhan = tb_pertumbuhan.id_pertumbuhan 
                    JOIN tb_motorik ON tb_klasifikasi.id_ciri = tb_motorik.id_ciri
                    GROUP BY id_pertumbuhan
                ";

        return $this->db->query($query)->result_array();
    }

    public function getStatus()
    {
        $query = "SELECT * FROM tb_pertumbuhan";
        return $this->db->query($query)->result_array();
    }

    public function getStatusById($id_pertumbuhan)
    {
        $query = "SELECT * FROM tb_pertumbuhan WHERE id_pertumbuhan='$id_pertumbuhan' ";
        return $this->db->query($query)->row_array();
    }

    public function getGejala()
    {
        $query = "SELECT * FROM tb_motorik";
        return $this->db->query($query)->result_array();
    }

    public function getById($id_pertumbuhan)
    {
        $query = "SELECT tb_klasifikasi.*, tb_pertumbuhan.nama_pertumbuhan,tb_motorik.kode , tb_motorik.nama_ciri ,tb_motorik.umur,                    tb_motorik.bobot
                    FROM tb_klasifikasi  
                    JOIN tb_pertumbuhan ON tb_klasifikasi.id_pertumbuhan = tb_pertumbuhan.id_pertumbuhan 
                    JOIN tb_motorik ON tb_klasifikasi.id_ciri = tb_motorik.id_ciri
                    WHERE tb_klasifikasi.id_pertumbuhan = '$id_pertumbuhan'
                ";

        return $this->db->query($query)->result_array();
    }

    public function cekGejala($status, $gejala)
    {
        $query = "SELECT * FROM tb_klasifikasi WHERE id_pertumbuhan='$status' AND id_ciri='$gejala'";
        return $this->db->query($query)->row_array();
    }

    public function getOption($id_pertumbuhan)
    {
        $query = " SELECT tb_motorik.id_ciri, nama_ciri, umur, bobot FROM tb_motorik LEFT JOIN                   tb_klasifikasi ON tb_motorik.id_ciri = tb_klasifikasi.id_ciri 
                   EXCEPT 
                   SELECT tb_motorik.id_ciri, nama_ciri, ,umur ,bobot FROM tb_motorik RIGHT JOIN tb_klasifikasi ON tb_motorik.id_ciri = tb_klasifikasi.id_ciri WHERE tb_klasifikasi.id_pertumbuhan = '$id_pertumbuhan'
                ";
        return $this->db->query($query)->result_array();
    }
}
