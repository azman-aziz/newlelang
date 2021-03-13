<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        
    }

    public function index(){
        $data['judul'] = 'Halaman Barang';
        $data['barang'] = $this->Barang_model->getAllBarang();
        //ambil data masyarakat
		$this->load->view('backend/template/header', $data);
		$this->load->view('backend/barang/v_barang', $data);
		$this->load->view('backend/template/footer');
    }

    public function hapusbarang($id){
        $this->Barang_model->hapusDataBarang($id);
        $this->session->set_flashdata('status', 'Dihapus');
        redirect('admin/barang');
    }

}