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
        $data['title'] = 'javaXcode';
            $this->load->view('com/templates/header', $data);
            $this->load->view('com/templates/topbarblack');
            $this->load->view('com/registrasi');
            $this->load->view('com/templates/footer');
    }

    

    public function proses(){
        $post = $this->input->post();
        $data = array(
            'email' => $post['email'],
            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            'name' => '',
            'telp' => '',
            'alamat' => '',
            'kota' => '',
            'provinsi' => '',
            'status' => 0,
            'created_at' => time(),
            'updated_at' => 0
        );

        $cek = $this->db->get_where('member', array('email' => $post['email']))->num_rows();
        if($cek == 0){
            //Insert Database
            //$this->load->library('emailsender');
            $this->db->set($data);
            $this->db->insert('member');
            
            //kirim email
            $datav=[];
            $dataEmail = array(
                'to' => $data['email'],
                'subject' => 'Link Aktivasi javaXcode',
                'html' => $this->load->view('com/email/registrasi', $datav, true)
            );
            $this->send($dataEmail);
            //session notif
            $this->session->set_flashdata(array('notif' => 'success', 'message' => 'Pendaftaran berhasil, silakan cek inbox/spam email anda.'));
        }else{
            //session notif
            $this->session->set_flashdata(array('notif' => 'danger', 'message' => 'Email sudah terdaftar!'));
        }
        //redirect('registrasi');
    }

    private function send($data = array()){
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'mail.javaxcode.com',
        'smtp_port' => 587,
        'smtp_user' => 'cs@javaxcode.com',
        'smtp_pass' => '212jxc212',
        'charset'  => 'utf-8', 
        'wordwrap'   => TRUE,
        'mailtype'  => 'html'
        );
        $this->load->library('email', $config);

        $this->email->from('cs@javaxcode.com', 'javaXcode');
        $this->email->to(array($data['to'], 'cs@javaxcode.com'));
        $this->email->subject($data['subject']);
        $this->email->message($data['html']);

        $result = $this->email->send();  
        return $result;
    }
}
