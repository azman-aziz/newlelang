<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Masyarakat_model');
        
    }

    public function index(){
        $data['judul'] = 'Halaman masyarakat';
        //ambil data masyarakat
        $data['masyarakat'] = $this->Masyarakat_model->getAllMasyarakat();
		$this->load->view('backend/template/header', $data);
		$this->load->view('backend/masyarakat/masyarakat', $data);
		$this->load->view('backend/template/footer');
    }
    
    public function tambahmasyarakat(){
        $this->form_validation->set_rules('tambahnama', 'Nama', 'required');
        $this->form_validation->set_rules('tambahusername', 'Username', 'required');
        $this->form_validation->set_rules('tambahpassword', 'Password', 'required');
        $this->form_validation->set_rules('tambahnomer', 'Nomer', 'required|numeric');

        $data['judul'] = 'Tambah Data masyarakat';

        if( $this->form_validation->run() == false){
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/masyarakat/tambahmasyarakat', $data);
            $this->load->view('backend/template/footer');
        } else {
            $this->Masyarakat_model->tambahDataMasyarakat();
            $this->session->set_flashdata('status','Ditambahkan');
            redirect('admin/masyarakat');
        }
    }

    public function hapusmasyarakat($id){
        $this->Masyarakat_model->hapusDataMasyarakat($id);
        $this->session->set_flashdata('status', 'Dihapus');
        redirect('admin/masyarakat');
    }

    public function editmasyarakat($id){

        $this->form_validation->set_rules('tambahnama', 'Nama', 'required');
        $this->form_validation->set_rules('tambahusername', 'Username', 'required');
        $this->form_validation->set_rules('tambahpassword', 'Password', 'required');
        $this->form_validation->set_rules('tambahnomer', 'Nomer', 'required|numeric');

        $data['masyarakat'] = $this->Masyarakat_model->getMasyarakatById($id);
        $data['judul'] = 'Edit Data masyarakat';

        if( $this->form_validation->run() == false){
            $this->load->view('backend/template/header', $data);
            $this->load->view('backend/masyarakat/editmasyarakat', $data);
            $this->load->view('backend/template/footer');
        } else {
            $this->Masyarakat_model->editmasyarakat($id);
            $this->session->set_flashdata('status', 'Diubah');
            redirect('admin/masyarakat');
        }
        
    }


}