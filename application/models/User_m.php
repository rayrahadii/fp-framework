<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model {

    
    public function login($post)
    {
        $this->db->from('anggota');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    
    public function get($id = null)
    {
        $this->db->from('anggota');
        if($id != null) {
            $this->db->where('anggota_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    
}