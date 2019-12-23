<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Emailku
{
                        
public function __construct()
{
    $this->CI =& get_instance();                 
}

public function send(){
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'srv33.niagahoster.com',
        'smtp_port' => 587,
        'smtp_user' => 'cs@javaxcode.com',
        'smtp_pass' => '212jxc212jxc',
        'mailtype'  => 'html', 
        'charset'   => 'iso-8859-1'
    );
    $this->CI->load->library('email', $config);
    $this->CI->email->set_newline("\r\n");
    
    $this->CI->email->from('cs@javaxcode.com', 'javaXcode');
    $this->CI->email->to('masrois46@gmail.com');
    $this->CI->email->cc('info@lyricssinger.com');

    $this->CI->email->subject('Email Test');
    $this->CI->email->message('<b>Testing the email class.</b>');
    
    $result = $this->CI->email->send();
    return $result;
}

public function kirim(){
    $ci =& get_instance();
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'in-v3.mailjet.com',
      'smtp_port' => 587,
      'smtp_user' => '22d014e341b5c6b20b7b4ef448aa6436',
      'smtp_pass' => '591dca967d1fe5836a730d3d3758eebd',
      'charset'  => 'utf-8', 
      'wordwrap'   => TRUE,
      'mailtype'  => 'html'
      );
      $ci->load->library('email', $config);

      $ci->email->from('info@lyricssinger.com', 'LyricsSinger');
      $ci->email->to('masrois46@gmail.com');
      $ci->email->cc('info@lyricssinger.com');

      $ci->email->subject('Email Test');
      $ci->email->message('<b>Tes kirim');

      $result = $ci->email->send();  
      return $result;
}
                        
                            
}      