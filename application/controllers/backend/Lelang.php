<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lelang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('lelang_model');
        
    }

    public function index(){
        $data['judul'] = 'Halaman lelang';
        $data['barang'] = $this->lelang_model->getAllLelang();
        //ambil data masyarakat
		$this->load->view('backend/template/header', $data);
		$this->load->view('backend/lelang/v_lelang', $data);
		$this->load->view('backend/template/footer');
    }

    public function hapuslelang($id){
        $this->lelang_model->hapuslelang($id);
        $this->session->set_flashdata('status', 'Dihapus');
        redirect('admin/lelang');
    }
}