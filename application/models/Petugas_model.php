<?php

class Petugas_model extends CI_model {

    public function getAllPetugas()
    {
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->join('tb_level', 'tb_level.id_level=tb_petugas.id_level');

        $query =$this->db->get();
        return $query->result_array();
        // return $this->db->get('tb_masyarakat')->result_array();
    }

    public function hapuspetugas($id){
        $this->db->delete('tb_petugas',['id_petugas' => $id]);
    }

    public function tambahpetugas(){

        $data = [
            "nama_petugas" =>  $this->input->post('tambahnama',true),
            "username" =>  $this->input->post('tambahusername',true),
            "password" =>  $this->input->post('tambahpassword',true),
            "id_level" => $this->input->post('pilih', true)
        ];
        
        $this->db->insert('tb_petugas',$data);
    }

}