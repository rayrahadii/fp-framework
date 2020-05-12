<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ketua_m extends CI_Model {

    public function getUkm($id = null)
    {
        $this->db->select('anggota.ukm_id, anggota_id, username, password, nama_anggota, email, npm, image, fakultas, ukm.ukm_id, ukm.nama_ukm');
        $this->db->from('anggota');
        $this->db->join('ukm', 'anggota.ukm_id = ukm.ukm_id');
        $this->db->where('anggota.ukm_id', $this->session->userdata('ukmid'));
        if($id != null) {
            $this->db->where('anggota.anggota_id', $id);
        }
        $query = $this->db->get();
        return $query;
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
