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

    $this->load->view('com/templates/header', $header);
    $this->load->view('com/templates/topbarblack');
    $this->load->view('com/checkout');
    $this->load->view('com/templates/footer');   
  }

  public function proses_checkout(){
    $member_sess = $this->session->userdata('user_email');
    $data_checkout = array(
      'member_email' => $member_sess,
      'tanggal' => time(),
      'total' => $this->cart->total(),
      'payment_method' => $this->input->post('payment_method'),
      'status' => '0'
    );
    $this->db->insert('checkout', $data_checkout);

    $this->db->order_by('id', 'DESC');
    $this->db->limit(1);
    $id_checkout = $this->db->get('checkout')->row_array();

    $detail_checkout = [];
    foreach($this->cart->contents() as $row){
      $detail_checkout[] = array(
        'id_checkout' => $id_checkout['id'],
        'id_product' => $row['id'],
        'qty' => $row['qty'],
        'harga' => $row['price'],
        'subtotal' => $row['subtotal']
      );
    }

    $this->db->insert_batch('checkout_detail', $detail_checkout);
    redirect(base_url('member'));
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
      redirect('/cart');
    }
  }

  public function hapus($id=''){
    if($id != null){
      $this->cart->remove($id);
      header('Content-Type: Application/json');
      echo json_encode(array('status' => 200));
    }else{
      redirect('/cart');
    }
  }

}
