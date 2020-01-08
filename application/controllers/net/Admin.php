<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_menu']=$this->m_user->tampil_data()->result();

        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_menu']=$this->m_user->tampil_data()->result();
        $data['user_access_menu']=$this->m_user->tampil_lihat()->result();
        $data['surat']=$this->db->get_where('user_sub_menu', ['model_menu' => 1])->row_array();

        $data['title'] = 'Lihat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/lihat', $data);
        $this->load->view('templates/footer');
    }
}
