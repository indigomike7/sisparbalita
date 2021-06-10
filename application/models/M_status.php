<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_status extends CI_Model
{

    public function kode()
    {
        $this->db->select('RIGHT(tb_pertumbuhan.id_pertumbuhan,2) as id_pertumbuhan', FALSE);
        $this->db->order_by('id_pertumbuhan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_pertumbuhan');
        //cek dulu apakah ada sudah ada kode di tabel. 

        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->id_pertumbuhan) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }

        $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodetampil = "A" . $batas;  //format kode
        return $kodetampil;
    }

    public function getData($id_pertumbuhan)
    {
        $query = "SELECT * FROM tb_pertumbuhan WHERE id_pertumbuhan = '$id_pertumbuhan'";
        return $this->db->query($query)->row_array();
    }

    public function editData($id_pertumbuhan, $data)
    {
        $this->db->where('id_pertumbuhan', $id_pertumbuhan);
        $this->db->update('tb_pertumbuhan', $data);
    }
}
