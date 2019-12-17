<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        //$this->load->library('Mobile_Detect');
    }

    public function index()
    { 
        //$data['title'] = 'javaXcode';
        
        // $this->load->view('templates/header', $data);
        $this->load->view('index');
        // $this->load->view('templates/footer');   
    }

    

    // public function logout()
    // {
    //     $this->session->unset_userdata('user_email');
    //     $this->session->unset_userdata('user_role');
    //     // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Log Out</div>');
    //     redirect('index');
    // }
}
