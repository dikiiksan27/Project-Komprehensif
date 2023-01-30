<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_model
{
    public function getAllGejala($keyword = null)
    {
        if ($keyword) {
            $this->db->like('gejala', $keyword);
        }
        return $this->db->get('tb_gejala')->result_array();
    }

    public function addAllGejala()
    {
        $data = [
            "gejala" => $this->input->post('gejala', true),
            "kode_gejala" => $this->input->post('kode_gejala', true),
            "status" => $this->input->post('status', true)
        ];

        $this->db->insert('tb_gejala', $data);
    }

    public function deleteGejala($id)
    {
        $this->db->delete('tb_gejala', ['id_gejala' => $id]);
    }

    public function getByIdGejala($id)
    {
        return $this->db->get_where('tb_gejala', ['id_gejala' => $id])->row_array();
    }

    public function editGejala()
    {
        $data = [
            "gejala" => $this->input->post('gejala', true),
            "kode_gejala" => $this->input->post('kode_gejala', true),
            "status" => $this->input->post('status', true)
        ];
        //mengambil id yg dihidden dari edit.php
        $this->db->where('id_gejala', $this->input->post('id_gejala'));
        $this->db->update('tb_gejala', $data);
    }

    // =================================================================================================================================

    public function getAllKerusakan($keyword = null)
    {
        if ($keyword) {
            $this->db->like('kerusakan', $keyword);
        }
        return $this->db->get('tb_kerusakan')->result_array();
    }

    public function addAllKerusakan()
    {
        $data = [
            "kode_kerusakan" => $this->input->post('kode_kerusakan', true),
            "kerusakan" => $this->input->post('kerusakan', true)
        ];

        $this->db->insert('tb_kerusakan', $data);
    }

    public function deleteKerusakan($id)
    {
        $this->db->delete('tb_kerusakan', ['id_kerusakan' => $id]);
    }

    public function getByIdKerusakan($id)
    {
        return $this->db->get_where('tb_kerusakan', ['id_kerusakan' => $id])->row_array();
    }

    public function editKerusakan()
    {
        $data = [
            "kode_kerusakan" => $this->input->post('kode_kerusakan', true),
            "kerusakan" => $this->input->post('kerusakan', true)
        ];
        //mengambil id yg dihidden dari edit.php
        $this->db->where('id_kerusakan', $this->input->post('id_kerusakan'));
        $this->db->update('tb_kerusakan', $data);
    }

    // =================================================================================================================================

    public function getAllRule()
    {
        return $this->db->get('tb_rule')->result_array();
    }

    public function addAllRule()
    {
        $data = [
            "kode_rule" => $this->input->post('kode_rule', true),
            "kode_gejala" => $this->input->post('kode_gejala', true),
            "kode_kerusakan" => $this->input->post('kode_kerusakan', true)
        ];

        $this->db->insert('tb_rule', $data);
    }

    public function deleteRule($id)
    {
        $this->db->delete('tb_rule', ['id_rule' => $id]);
    }

    public function getByIdRule($id)
    {
        return $this->db->get_where('tb_rule', ['id_rule' => $id])->row_array();
    }

    public function editRule()
    {
        $data = [
            "kode_rule" => $this->input->post('kode_rule', true),
            "kode_gejala" => $this->input->post('kode_gejala', true),
            "kode_kerusakan" => $this->input->post('kode_kerusakan', true)
        ];
        //mengambil id yg dihidden dari edit.php
        $this->db->where('id_rule', $this->input->post('id_rule'));
        $this->db->update('tb_rule', $data);
    }
}
