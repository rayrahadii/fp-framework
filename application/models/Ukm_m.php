<?php defined('BASEPATH') or exit('No direct script access allowed');

class ukm_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('ukm');
        if($id != null) {
            $this->db->where('ukm_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function gethome1($id = null)
    {
        $this->db->from('ukm');
        $this->db->order_by('ukm_id', 'desc');
        $this->db->limit(3);
        if($id != null) {
            $this->db->where('ukm_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama_ukm' => $post['nama_ukm'],
            'ketua_ukm' => $post['ketua_ukm'],
            'keterangan_ukm' => $post['keterangan_ukm'],
            'jenis' => $post['jenis'],
            'status_ukm' => $post['status_ukm'],
            'image_ukm' => $post['image_ukm'],
        ];
        $this->db->insert('ukm', $params);
    }
    
    public function edit($post)
    {
        $params = [
            'nama_ukm' => $post['nama_ukm'],
            'ketua_ukm' => $post['ketua_ukm'],
            'keterangan_ukm' => $post['keterangan_ukm'],
            'jenis' => $post['jenis'],
            'status_ukm' => $post['status_ukm'],
        ];
        $this->db->where('ukm_id', $post['id']);
        $this->db->update('ukm', $params);
    }

    public function del($id)
	{
		$this->db->where('ukm_id', $id);
		$this->db->delete('ukm');
    }

}
