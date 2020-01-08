<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payroll extends CI_Controller
{
    public function index()
    {
        $data['identity'] = $this->db->get_where('identity')->row_array();
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();
        if($data['user']) {
	        $data['title'] = 'Payroll | javaXcode';
	        $data['page'] = 'Dashboard Payroll';
	        $this->load->view('templates/header', $data);
	        $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
	        $this->load->view('payroll/index', $data);
	        $this->load->view('templates/footer');
    	}else{
            redirect('auth');
        }
    }

    public function karyawan()
    {
        $data['identity'] = $this->db->get_where('identity')->row_array();
        $data['user'] = $this->db->get_where('user', ['user_email' => $this->session->userdata('user_email')])->row_array();

        if ($this->form_validation->run() == false) {
            if($data['user']) {
                $data['title'] = 'Payroll | javaXcode';
                $data['page'] = 'Payroll | Karyawan';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('payroll/karyawan', $data);
                $this->load->view('templates/footer');
            }else{
                redirect('auth');
            }
        } else {
            $data = [
                'employee_name' => $this->input->post('nam', true),
                'employee_birthdate' => $this->input->post('tanggallahir', true),
                'employee_birthplace' => $this->input->post('tempatlahir', true),
                'employee_joindate' => $this->input->post('tanggalmasukkerja', true),
                'employee_nip' => $this->input->post('nip', true),
                'employee_jobtitle' => $this->input->post('jabatan', true),
                'employee_address' => $this->input->post('address', true),
                'employee_active' => 1
            ];

            $this->db->insert('payroll_employee', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Input Data Karyawan. Berhasil!</div>');
            redirect('payroll/karyawan');
        }
    }

}

   