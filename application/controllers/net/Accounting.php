<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accounting extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        if($data['user']) {
	        $data['title'] = 'Accounting | javaXcode';
            $data['sb'] = 'Dashboard';
	        $data['page'] = 'Dashboard | Accounting';
	        $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
	        $this->load->view('templates/sidebar', $data);
	        $this->load->view('accounting/index', $data);
	        $this->load->view('templates/footer');
    	}else{
            redirect('auth');
        }
    }

    public function kasbesar()
    {
        $data['identity'] = $this->db->get_where('identity')->row_array();
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        if($data['user']) {
	        $data['title'] = 'Accounting | javaXcode';
            $data['sb'] = 'Kas';
	        $data['page'] = 'Kas Besar | Accounting';
	        $this->load->view('templates/header', $data);
	       $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
	        $this->load->view('accounting/kasbesar', $data);
	        $this->load->view('templates/footer');
    	}else{
            redirect('auth');
        }
    }

    public function kaskecil()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        if($data['user']) {
	        $data['title'] = 'Accounting | javaXcode';
            $data['sb'] = 'Kas';
	        $data['page'] = 'Kas Kecil | Accounting';
	        $this->load->view('templates/header', $data);
	        $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
	        $this->load->view('accounting/kaskecil', $data);
	        $this->load->view('templates/footer');
    	}else{
            redirect('auth');
        }
    }
}