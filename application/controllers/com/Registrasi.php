<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
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
        if($this->input->post()){
            $this->_register();
        }else{
            $data['title'] = 'javaXcode';
            $this->load->view('com/templates/header', $data);
            $this->load->view('com/templates/topbarblack');
            $this->load->view('com/registrasi');
            $this->load->view('com/templates/footer');
        }
    }

    private function _register(){

    }
}
