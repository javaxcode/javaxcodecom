<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();

        if($data['user']) {
            $data['title'] = 'Menu | javaXcode';
            $this->load->view('templates/auth_header', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            // $this->load->view('user/index', $data);
            $this->load->view('menu');
            // $this->load->view('templates/footer');
        }else{
            redirect('auth');
        }
    }
}
