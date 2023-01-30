<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa_model extends CI_model
{

    public function getquestion()
    {
        return $this->db->query('select*from tb_gejala')->result();
    }
    public function daftar_pertanyaan()
    {
        return $this->db->get('tb_gejala')->result_array();
    }

    public function loophasil()
    {
    }

    // public function daftar_pertanyaan()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_gejala');
    //     $query = $this->db->get();
    //     return $query;
    // }
}
