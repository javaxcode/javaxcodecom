<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('Mobile_Detect');
    }

    public function index()
    {
        $detect = new Mobile_Detect;
        if ($detect->isMobile()) {
            redirect('https://javaxcode.net');
        } else {
            $data['title'] = 'javaXcode';
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == false) {
                $this->load->view('templatesnet/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templatesnet/auth_footer');
            } else {
                $this->_login();
            }
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['user_email' => $email])->row_array();

        if ($user) {
            if ($user['user_active'] == 1) {

                if (password_verify($password, $user['user_password'])) {
                    $data = [
                        'user_email' => $user['user_email'],
                        'user_role' => $user['user_role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['user_role'] == 1) {
                        redirect('menu');
                    } else {
                        redirect('menu');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum di Aktivasi</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Sudah Terdaftar!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $data['title'] = 'javaXcode | Registration';

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.user_email]', [
            'is_unique' => 'Email sudah Terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password doesnt match!',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesnet/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templatesnet/auth_footer');
        } else {
            $data = [
                'user_name' => htmlspecialchars($this->input->post('name', true)),
                'user_email' => htmlspecialchars($this->input->post('email', tru)),
                'user_image' => 'default.jpg',
                'user_password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'user_role' => 2,
                'user_active' => 1,
                'user_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda sudah Jadi!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_email');
        $this->session->unset_userdata('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Log Out</div>');
        redirect('auth');
    }
}
