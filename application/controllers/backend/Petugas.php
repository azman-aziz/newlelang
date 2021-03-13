<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Petugas_model');
        
    }

    public function index(){
        $data['judul'] = 'Halaman Petugas';
        //ambil data masyarakat
        $data['petugas'] = $this->Petugas_model->getAllPetugas();
		$this->load->view('backend/template/header', $data);
		$this->load->view('backend/petugas/v_petugas', $data);
		$this->load->view('backend/template/footer');
    }

    public function tambahpetugas(){
        $this->form_validation->set_rules('tambahnama', 'Nama', 'required');
        $this->form_validation->set_rules('tambahusername', 'Username', 'required');
        $this->form_validation->set_rules('pilih', 'Pilihan', 'required');
        

        $data['judul'] = 'Tambah Data Petugas';

        if( $this->form_validation->run() == false){
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/petugas/v_tambahpetugas', $data);
            $this->load->view('backend/template/footer');
        } else {
            $this->Petugas_model->tambahpetugas();
            $this->session->set_flashdata('status','Ditambahkan');
            redirect('admin/petugas');
        }
    }

    public function hapuspetugas($id){
        $this->Petugas_model->hapuspetugas($id);
        $this->session->set_flashdata('status', 'Dihapus');
        redirect('admin/petugas');
    }

}