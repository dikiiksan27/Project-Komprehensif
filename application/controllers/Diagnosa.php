<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Diagnosa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();

        //load model
        $this->load->model('Diagnosa_model');

        //query data tb_gejala

        $data['gejala'] = $this->Diagnosa_model->daftar_pertanyaan();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diagnosa/index', $data);
        $this->load->view('templates/footer');
    }



    public function question()
    {
        $data['title'] = 'Question';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();

        //load model
        $this->load->model('Diagnosa_model');

        //query data tb_gejala
        $data['gejala'] = $this->Diagnosa_model->getquestion();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/top_bar', $data);
        $this->load->view('diagnosa/question', $data);
        $this->load->view('templates/footer');
    }

    public function hasil()
    {
        $data['title'] = 'Hasil';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();
        $this->load->model('Diagnosa_model');
        // $id_gejala = $this->input->post('Id_gejala');
        // $gejala = $this->input->post('gejala');



        // $nm = $this->input->post('kd_penyakit');
        // $result = array();
        // foreach ($nm as $key => $val) {
        //     $result[] = array(
        //         "id_gejala"  => $_POST['id_gejala'][$key],
        //         "kode_gejala"  => $_POST['kode_gejala'][$key]
        //     );
        // }
        // $test = $this->db->insert_batch('tmp_hasil', $result); // fungsi  untuk menyimpan multi array ke database

        // if ($test) {
        //     echo "data sukses di input";
        //     redirect('konsultasi/hasil');
        // } else {
        //     echo "gagal di input";
        // }



        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/top_bar', $data);
        $this->load->view('diagnosa/hasil', $data);
        $this->load->view('templates/footer');
    }
}
