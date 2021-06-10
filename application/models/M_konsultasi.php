<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_konsultasi extends CI_Model
{

    public function getData()
    {
        $query = "SELECT A.*, (SELECT COUNT(id_pertumbuhan) FROM tb_klasifikasi WHERE id_pertumbuhan = A.id_pertumbuhan) AS jumlah, tb_pertumbuhan.nama_pertumbuhan, tb_motorik.kode, tb_motorik.nama_ciri, tb_motorik.bobot
        FROM tb_klasifikasi A
        JOIN tb_pertumbuhan ON tb_pertumbuhan.id_pertumbuhan = A.id_pertumbuhan
        JOIN tb_motorik ON tb_motorik.id_ciri = A.id_ciri";

        return $this->db->query($query)->result_array();
    }

    public function getPertumbuhan()
    {
        $query = "SELECT tb_klasifikasi.* FROM tb_klasifikasi GROUP BY id_pertumbuhan";
        return $this->db->query($query)->result_array();
    }

    public function getStatus($pertumbuhan)
    {
        $query = "SELECT tb_pertumbuhan.* FROM tb_pertumbuhan WHERE id_pertumbuhan ='$pertumbuhan'";
        return $this->db->query($query)->row_array();
    }

    public function getCiri($ciri)
    {
        $query = "SELECT tb_motorik.* FROM tb_motorik WHERE id_ciri ='$ciri'";
        return $this->db->query($query)->row_array();
    }

    public function getSama($pertumbuhan, $ciri)
    {
        $query = "SELECT tb_klasifikasi.*, tb_motorik.bobot 
        FROM tb_klasifikasi
        JOIN tb_motorik ON tb_motorik.id_ciri = tb_klasifikasi.id_ciri  
        WHERE tb_klasifikasi.id_pertumbuhan='$pertumbuhan' AND tb_klasifikasi.id_ciri='$ciri'";

        return $this->db->query($query)->row_array();
    }

    public function getJmlCiri($pertumbuhan)
    {

        $this->db->from('tb_klasifikasi');
        $this->db->where('id_pertumbuhan', $pertumbuhan);
        return $this->db->count_all_results();
    }

    public function getPembagi($pertumbuhan)
    {
        $query = "SELECT SUM(tb_motorik.bobot) AS TOTAL
                FROM tb_klasifikasi 
                JOIN tb_motorik ON tb_motorik.id_ciri = tb_klasifikasi.id_ciri
                WHERE id_pertumbuhan='$pertumbuhan'";
        $bagi = $this->db->query($query)->row_array();
        return $bagi['TOTAL'];
    }
}
