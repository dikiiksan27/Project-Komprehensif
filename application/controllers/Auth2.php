<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth2 extends CI_Controller
{
    public function __construct()
    {
        //memanggil construktor yang ada di CI_Controller
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        //validasi login
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            //jika validasi gagal tampilkan halaman login kembali
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth2/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi berhasil
            $this->_login();
        }
    }

    private function _login()
    {
        //user input email password
        $email = $this->input->post('email');

        $password = $this->input->post('password');


        //query ke database  menggunakan query builder code igniter(select*from user where email=$email)
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //cek usernya ada
        if ($user) {
            // jika user active
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    //menentukan login admin atau user
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('dashboard');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Password
                    </div>');
                    redirect('auth2');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated!
                </div>');
                redirect('auth2');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!
            </div>');
            redirect('auth2');
        }
    }

    public function registration()
    {
        //rules validasi, mengecek yang diisikan user di form registrasi 
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth2/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.png',
                //inkripsi password 
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            //insert data ke database
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Create account is success!. Please Login
            </div>');
            //kembalikan ke login
            redirect('auth2');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            You have been logout!.
            </div>');
        redirect('auth2');
    }

    // public function blocked()
    // {
    //     $data['title'] = 'Access Blocked';
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('auth2/blocked');
    //     $this->load->view('templates/footer');
    // }
}
