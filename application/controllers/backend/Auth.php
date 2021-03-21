<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }


    public function index(){
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';
            $this->load->view('backend/auth/login',$data);
        } else {
           $this->login();
        }
		
    }

    public function login(){
        $name = $this->input->post('name',true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('tb_petugas', ['username' => $name])->row_array();

        // jika usernya ada
        if ($user) {
            
            
            
                //cek password
                if ( $password == $user['password']) {
                    $data = [
                        'nama' => $user['username'],
                        'id_level' => $user['id_level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('status', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('admin/auth');
                }
            }  else {
            $this->session->set_flashdata('status', '<div class="alert alert-danger" role="alert">User Tidak Di temukan!</div>');
            redirect('admin/auth');
        }
    }

    


}