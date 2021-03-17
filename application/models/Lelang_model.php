<?php

class Lelang_model extends CI_model {


    public function getAllLelang()
    {   
        $this->db->select('*');
        $this->db->from('tb_lelang');
        $this->db->join('tb_barang', 'tb_lelang.id_barang=tb_barang.id_barang');
        $this->db->join('tb_masyarakat', 'tb_lelang.id_user=tb_masyarakat.id_user');
        

        $query =$this->db->get();
        return $query->result_array();

        
    }
    public function hapuslelang($id){
        $this->db->trans_start();
        $this->db->delete('tb_lelang',['id_lelang' => $id]);
        $this->db->delete('tb_barang',['id_barang' => $id]);
        $this->db->trans_complete();
    }
}