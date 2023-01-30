<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    // public function __construct()
    // {
    //     //memanggil construktor yang ada di CI_Controller
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();


        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/index', $data);
        $this->load->view('templates/footer');
    }

    public function kerusakan()
    {
        $this->load->view('member/kerusakan');
    }

    public function hardware()
    {
        $this->load->view('member/hardware');
    }

    public function tentangkami()
    {
        $this->load->view('member/tentangkami');
    }

    public function bantuan()
    {
        $this->load->view('member/bantuan');
    }
}
