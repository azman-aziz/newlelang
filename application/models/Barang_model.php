<?php

class Barang_model extends CI_model {


    public function getAllBarang()
    {   
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->join('tb_lelang', 'tb_barang.id_barang=tb_lelang.id_barang');

        $query =$this->db->get();
        return $query->result_array();

        
    }

    public function hapusDataBarang($id){
        $this->db->delete('tb_barang',['id_barang' => $id]);
    }


}