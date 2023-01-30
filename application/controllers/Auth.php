<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extendS CI_Controller
{
    public function index()
    {
        $this->load->view('auth/start');
    }
}