<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pageview extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        if($data['user']) {
	        
	        $this->load->view('pageview', $data);
    	}else{
            redirect('auth');
        }
    }

    
}