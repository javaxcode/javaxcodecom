<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proyek extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_office');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_menu']=$this->m_user->tampil_data()->result();
        $data['sidebar']=$this->m_sidebar->tampil_sidebar()->result();

        if ($this->input->post('tp')) {
            $bl = $this->input->post('bulan');
            $th = $this->input->post('tahun');
            $paket = $this->input->post();
            $data['proyek']=$this->db->query("SELECT * FROM proyekjt WHERE year(tanggalpjt) = '2019' AND month(tanggalpjt) = '03' ORDER BY id DESC")->result();
            $data['tekan'] = array('tp' => $tp, 'month(tanggalpjt)' => $bl, 'year(tanggalpjt)' => $th);
            print_r($paket);
        }else{
            $data['proyek']=$this->m_office->tabel_proyek()->result();
        }
        


        $data['title'] = 'Proyek';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('proyek/index', $data);
        $this->load->view('templates/footer');
    }

    public function tampilkan_proyek()
    {
        $tp = $this->input->post('tampilkanproyek');
        $bl = $this->input->post('bulan');
        $th = $this->input->post('tahun');
        

        $data = array('tp' => $tp, 'month(tanggalpjt)' => $bl, 'year(tanggalpjt)' => $th);
        //$where = array ('id' => $id);

        $this->m_office->tampil_proyek($data);
        redirect('proyek/index');
    }

    function data_proyek(){
        $data=$this->m_office->proyek_list();
        echo json_encode($data);
    }

    function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->m_office->get_barang_by_kode($kobar);
        echo json_encode($data);
    }

    function simpan_proyek(){
        $tanggalpro=date('Y m d');
        $tanggal=$this->input->post('tanggal');
            // $tatl = substr($ttl,3,2);
            // $bul = substr($ttl,0,2);
            // $tahtl = substr($ttl,6,4);
            // $tang = $tahtl.'-'.$bul.'-'.$tatl;
            // $tanggal = date('Y-m-d',strtotime($tang));

        date_default_timezone_set('Asia/Jakarta'); $date = new DateTime();
        $butl = substr($date->format('Y-m-d'),5,2);
        $thl = substr($date->format('Y-m-d'),2,2);
        $kodeproyek = "PJT";
        $t = substr($ttl,8,2);
        $kodebulan = $t.$bul;
        $saldo = 0;
        $pekerjaan = "";

        $kas = query("SELECT * FROM proyekjt WHERE month(tanggal) ='$bul' ORDER BY id DESC LIMIT 1")[0];
        if ($kas['kodebulan']!=$t.$bul) {
            $newkodetr = "001";

        }else{
            $lastkode = query("SELECT * FROM proyekjt WHERE kodeproyek ='PJT' AND month(tanggal) ='$bul' ORDER BY id DESC LIMIT 1")[0];
            $lk =$lastkode['kodetr'] ;
            $noUrut = (int) $lastkode['kodetr'];
            $noUrut++;    
            $newkodetr = sprintf("%03s", $noUrut);
        }

        $namaklien=$this->input->post('namaklien');
        $outlet=$this->input->post('outlet');
        $tempat=$this->input->post('tempat');
        $nilaiproyek=$this->input->post('nilaiproyek');
        $data=$this->m_office->simpan_proyek($tanggalpro, $tanggal, $kodeproyek, $kodebulan, $newkodetr, $namaklien, $outlet, $tempat, $pekerjaan, $nilaiproyek, $saldo);
        echo json_encode($data);
    }

    function update_barang(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $data=$this->m_office->update_barang($kobar,$nabar,$harga);
        echo json_encode($data);
    }

    function hapus_barang(){
        $kobar=$this->input->post('kode');
        $data=$this->m_office->hapus_barang($kobar);
        echo json_encode($data);
    }
}