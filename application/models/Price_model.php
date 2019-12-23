<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_model extends CI_Model {

  public function load_product($id_jenis){
    $this->db->order_by('id', 'ASC');
    return $this->db->get('product')->result();
  }

}
