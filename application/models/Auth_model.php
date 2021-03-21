<?php

class Auth_model extends CI_model { 


    public function login(){ 
       

            $name = $this->input->post('name',true);
            $password = $this->input->post('password', true);
            $date = ['username' => $name, 'password' => $password];
            $data = $this->db->where('tb_petugas',$date)->num_rows;

            var_dump($data);
    }
}