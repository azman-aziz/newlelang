<?php

class Masyarakat_model extends CI_model {

    public function getAllMasyarakat()
    {
        return $this->db->get('tb_masyarakat')->result_array();
    }

    public function tambahDataMasyarakat(){

        $data = [
            "nama_lengkap" => $this->input->post('tambahnama',true),
            "username" => $this->input->post('tambahusername',true),
            "password" => $this->input->post('tambahpassword',true),
            "telp" => $this->input->post('tambahnomer',true)
        ];

        $this->db->insert('tb_masyarakat',$data);
    }

    public function hapusDataMasyarakat($id){
        $this->db->delete('tb_masyarakat',['id_user' => $id]);
    }

    public function editmasyarakat($id){

        $data = [
            "nama_lengkap" => $this->input->post('tambahnama',true),
            "username" => $this->input->post('tambahusername',true),
            "password" => $this->input->post('tambahpassword',true),
            "telp" => $this->input->post('tambahnomer',true)
        ];

        $this->db->where('id_user', $this->input->post('id'));
        $this->db->update('tb_masyarakat', $data);
    }

}