<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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
        $data['title'] = 'javaXcode';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbarblack');
        $this->load->view('about');
        $this->load->view('templates/footer');   
    }


    
}