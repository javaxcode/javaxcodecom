<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Price extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $this->load->helper('url');
        $this->load->model('price_model');
        //$this->load->library('Mobile_Detect');
    }

    public function index()
    { 
        $data['title'] = 'javaXcode';

        $price_db = $this->price_model->load_product(1);
        $price_data = [];
        foreach($price_db as $row){
            $price_data[] = array(
                'id' => $row->id,
                'nama' => $row->nama,
                'harga' => number_format($row->harga),
                'deskripsi' => $row->deskripsi
            );
        }

        $content = array(
            'data' => $price_data
        );
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbarblack');
        $this->parser->parse('price', $content);
        $this->load->view('templates/footer');   
    }

    public function hosting()
    { 
        $data['title'] = 'javaXcode';
        
        //$this->load->view('templates/header', $data);
        //$this->load->view('templates/topbarblack');
        $this->load->view('hosting');
        //$this->load->view('templates/footer');   
    }

    
}
