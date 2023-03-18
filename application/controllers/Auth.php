<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');


        if($this->form_validation->run() == false){
            $this->load->view('template/auth_header');
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user',['email' => $email])->row_array();
            
            if($user){
                if(password_verify($password, $user['password'])){
                    $data = [
                        'email' => $user['email'],
                        'as_id' => $user['as_id'],
                    ];
                    $this->session->set_userdata($data);
                    if($user['as_id'] == 1){
                        redirect('admin');
                    } else {
                        redirect('user');
                    }

                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password AndA Salah!  </div>');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">
                Email Anda Salah! Anda Belum Mendaftar    </div>');
                redirect('auth/login');
            }
        }
       
    }


    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password1', 'required|trim|min_length[5]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');


        if($this->form_validation->run() == false){
            $this->load->view('template/auth_header');
            $this->load->view('auth/registrasi');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'password' =>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'as_id' => 2,
                'gambar' => 'user.png',
                'tanggal_dibuat' => time(),
                
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat, Anda Sudah Terdaftar! Silahkan Login!  </div>');
            redirect('auth/login');
        }
        
    }

    public function keluar()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('as_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Anda Sudah Keluar! </div>');
        redirect('auth/login');
    }
    
}