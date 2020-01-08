<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Emailsender
{
    public function __construct()
    {
                                    
    }

    public function send($data = array()){
        $ci =& get_instance();
        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.sendgrid.net',
        'smtp_port' => 587,
        'smtp_user' => 'kdaforex',
        'smtp_pass' => 's3k4r4ng',
        'charset'  => 'utf-8', 
        'wordwrap'   => TRUE,
        'mailtype'  => 'html'
        );
        $ci->load->library('email', $config);

        $ci->email->from('cs@javaxcode.com', 'javaXcode');
        $ci->email->to($data['to']);
        
        $ci->email->subject($data['subject']);
        $ci->email->message($data['html']);

        $result = $ci->email->send();  
        return $result;
    }
}
    
                        