<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Info';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userData('email')])->row_array();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('info/index', $data);
        $this->load->view('templates/footer');
    }
}
