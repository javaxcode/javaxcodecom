<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('Mobile_Detect');
    }
    
    public function index()
    {
        //$data['judul'] = 'Halaman Utama';
        $detect = new Mobile_Detect;
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
        
        if($detect->isMobile()) {
            redirect('http://m.blabla.com');
        }
    }
}