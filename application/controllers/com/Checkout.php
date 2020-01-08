<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
  }

  public function index()
  {
    $header = array(
      'title' => 'Checkout'
    );

    $this->load->view('templates/header', $header);
    $this->load->view('templates/topbarblack');
    $this->load->view('checkout');
    $this->load->view('templates/footer');   
  }

  public function go($param=''){
    if($param!=null){
      $check = $this->db->get_where('product', array('id' => $param))->row_array();
      if($check != null){
        $data = array(
          'id' => $check['id'],
          'qty' => 12,
          'price' => $check['harga'],
          'name' => $check['nama']
        );
        $this->cart->insert($data);
        
        redirect('/checkout');
      }else{
        redirect('/price');
      }
    }else{
      redirect('/price');
    }
  }

  public function get_data_cart(){
    $data = [];
    $data['total'] = $this->cart->format_number($this->cart->total());
    foreach($this->cart->contents() as $row){
      $data['cart'][] = array(
        'rowid' => $row['rowid'],
        'id' => $row['id'],
        'name' => $row['name'],
        'qty' => $row['qty'],
        'price' => number_format($row['price']),
        'subtotal' => number_format($row['subtotal'])
      );
    }

    header('Content-Type: Application/json');
    echo json_encode($data);
  }

  public function update_cart(){
    if($this->input->post()){
      $post = $this->input->post();
      $data = array(
        'rowid' => $post['rowid'],
        'qty' => $post['qty']
      );
      $this->cart->update($data);
      header('Content-Type: Application/json');
    echo json_encode(array('status' => 200));
    }else{
      redirect('/checkout');
    }
  }

  public function hapus($id=''){
    if($id != null){
      foreach($this->cart->contents() as $row){
        if($row->id == $id){
          $this->cart->remove($row->rowid);
        }
      }
      header('Content-Type: Application/json');
      echo json_encode(array('status' => 200));
    }else{
      redirect('/checkout');
    }
  }

}
