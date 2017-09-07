<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtabel_user extends CI_Model
{


    public function tambah()
    {

        $a = $this->input->post('user');
        $b = md5($this->input->post('pass'));
        $c = $this->input->post('lev');

        $data = array(
            'username' => $a,
            'password' => $b,
            'level' => $c
        );
        $query = $this->db->insert('user', $data);
        return $query;

    }

    public function tampil()
    {

        $query = $this->db->get('user');
        return $query;
    }

    function tampil_id($data)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }


    /*public function edit($us,$da){
        $username=$us;
        $password = $da['pass'];
        $level = $da['level'];
         $data = array( 
                        'username' =>$username,
                        'password' =>$password ,
                       'level' =>$level
                       );
         //var_dump($data);die;
        $this->db->set('username', $username);
        $this->db->set('password', $password);
        $this->db->set('level', $level);
        $this->db->where('username', $username);
        $this->db->update('user');
        return true;
    }*/

    public function edit($id, $data)
    {

        $id = $this->input->post('id');
        $us = $this->input->post('user');
        $b = $this->input->post('pass');
        $c = $this->input->post('level');
        $data = array(
            'id' => $id,
            'username' => $us,
            'password' => $b,
            'level' => $c
        );
        //var_dump($data);die;
        // $this->db->where('username',$username);
        // return $this->db->update('user',$data);
        // $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('user', $data);

    }

    public function hapus($id)
    {
        return $this->db->delete('user', array('id' => $id));
    }


    public function ceklogin($username, $password)
    {
        $query = $this->db->query("select * from user where username='$username' AND password='$password' limit 1");
        return $query;
    }


}