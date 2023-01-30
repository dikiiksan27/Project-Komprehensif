<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    // public function __construct()
    // {
    //     //memanggil construktor yang ada di CI_Controller
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function gejala()
    {
        $data['title'] = 'Gejala';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');

        //ambil keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        //query data tb_gejala
        $data['gejala'] = $this->Dashboard_model->getAllGejala($data['keyword']);
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/top_bar', $data);
        $this->load->view('dashboard/gejala', $data);
        $this->load->view('templates/footer');
    }

    public function add_gejala()
    {
        $data['title'] = 'Add Gejala';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');

        $this->form_validation->set_rules('gejala', 'Gejala', 'required');
        $this->form_validation->set_rules('kode_gejala', 'Kode Gejala', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/top_bar', $data);
            $this->load->view('dashboard/add_gejala', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->addAllGejala();
            $this->session->set_flashdata('flash', 'Add');
            redirect('dashboard/gejala');
        }
    }

    public function delete_gejala($id)
    {
        //load model
        $this->load->model('Dashboard_model');
        $this->Dashboard_model->deleteGejala($id);
        $this->session->set_flashdata('flash', 'Delete');
        redirect('dashboard/gejala');
    }

    public function edit_gejala($id)
    {
        $data['title'] = 'Edit Gejala';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');
        $data['gejala'] = $this->Dashboard_model->getByIdGejala($id);
        $this->form_validation->set_rules('gejala', 'Gejala', 'required');
        $this->form_validation->set_rules('kode_gejala', 'Kode Gejala', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/top_bar', $data);
            $this->load->view('dashboard/edit_gejala', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->editGejala();
            $this->session->set_flashdata('flash', 'Edit');
            redirect('dashboard/gejala');
        }
    }

    // =====================================================================================================================

    public function kerusakan()
    {
        $data['title'] = 'Kerusakan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');

        //ambil keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        //query data tb_kerusakan
        $data['kerusakan'] = $this->Dashboard_model->getAllKerusakan($data['keyword']);

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/top_bar', $data);
        $this->load->view('dashboard/kerusakan', $data);
        $this->load->view('templates/footer');
    }

    public function add_kerusakan()
    {
        $data['title'] = 'Add Kerusakan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');

        $this->form_validation->set_rules('kode_kerusakan', 'Kode Kerusakan', 'required');
        $this->form_validation->set_rules('kerusakan', 'Kerusakan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/top_bar', $data);
            $this->load->view('dashboard/add_kerusakan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->addAllKerusakan();
            $this->session->set_flashdata('flash', 'Add');
            redirect('dashboard/kerusakan');
        }
    }

    public function delete_kerusakan($id)
    {
        //load model
        $this->load->model('Dashboard_model');
        $this->Dashboard_model->deleteKerusakan($id);
        $this->session->set_flashdata('flash', 'Delete');
        redirect('dashboard/kerusakan');
    }

    public function edit_Kerusakan($id)
    {
        $data['title'] = 'Edit Kerusakan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');
        $data['kerusakan'] = $this->Dashboard_model->getByIdKerusakan($id);
        $this->form_validation->set_rules('kode_kerusakan', 'Kode Kerusakan', 'required');
        $this->form_validation->set_rules('kerusakan', 'Kerusakan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/top_bar', $data);
            $this->load->view('dashboard/edit_kerusakan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->editKerusakan();
            $this->session->set_flashdata('flash', 'Edit');
            redirect('dashboard/kerusakan');
        }
    }

    // =====================================================================================================================

    public function rule()
    {
        $data['title'] = 'Rule';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');

        //query data tb_rule
        $data['rule'] = $this->Dashboard_model->getAllRule();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/top_bar', $data);
        $this->load->view('dashboard/rule', $data);
        $this->load->view('templates/footer');
    }

    public function add_rule()
    {
        $data['title'] = 'Add Rule';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');

        $this->form_validation->set_rules('kode_rule', 'Kode rule', 'required');
        $this->form_validation->set_rules('kode_gejala', 'Kode gejala', 'required');
        $this->form_validation->set_rules('kode_kerusakan', 'Kode Kerusakan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/top_bar', $data);
            $this->load->view('dashboard/add_rule', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->addAllRule();
            $this->session->set_flashdata('flash', 'Add');
            redirect('dashboard/rule');
        }
    }

    public function delete_rule($id)
    {
        //load model
        $this->load->model('Dashboard_model');
        $this->Dashboard_model->deleteRule($id);
        $this->session->set_flashdata('flash', 'Delete');
        redirect('dashboard/rule');
    }

    public function edit_rule($id)
    {
        $data['title'] = 'Edit Rule';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
        $this->load->model('Dashboard_model');
        $data['rule'] = $this->Dashboard_model->getByIdRule($id);
        $this->form_validation->set_rules('kode_rule', 'Kode Rule', 'required');
        $this->form_validation->set_rules('kode_gejala', 'Kode Gejala', 'required');
        $this->form_validation->set_rules('kode_kerusakan', 'Kode Kerusakan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/top_bar', $data);
            $this->load->view('dashboard/edit_rule', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dashboard_model->editRule();
            $this->session->set_flashdata('flash', 'Edit');
            redirect('dashboard/rule');
        }
    }
}
