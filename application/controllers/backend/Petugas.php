<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Masyarakat_model');
        
    }

    public function index(){
        $data['judul'] = 'Halaman Petugas';
        //ambil data masyarakat
        // $data['masyarakat'] = $this->Masyarakat_model->getAllPetugas();
		$this->load->view('backend/template/header', $data);
		$this->load->view('backend/masyarakat', $data);
		$this->load->view('backend/template/footer');
    }

}