<?php defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('anggota');
        if($id != null) {
            $this->db->where('anggota_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    
    public function add($post)
    {
        $params = [
            'username' => $post['username'],
            'email' => $post['email'],
            'password' => sha1($post['password']),
            'nama_anggota' => $post['nama_anggota'],
            'npm' => $post['npm'],
            'fakultas' => $post['fakultas'],
            'image' => $post['image'],
            'ukm' => $post['ukm'],
            'level' =>'3',
        ];
        $this->db->insert('anggota', $params);
    }
    
    public function edit($post)
    {
        $params = [
            'username' => $post['username'],
            'email' => $post['email'],
            'password' => sha1($post['password']),
            'nama_anggota' => $post['nama_anggota'],
            'npm' => $post['npm'],
            'fakultas' => $post['fakultas'],
            'ukm' => $post['ukm'],
            'level' =>'3',
        ];
        $this->db->where('anggota_id', $post['id']);
        $this->db->update('anggota', $params);
    }

    public function del($id)
	{
		$this->db->where('anggota_id', $id);
		$this->db->delete('anggota');
    }

}
