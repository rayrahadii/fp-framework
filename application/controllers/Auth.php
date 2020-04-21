<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'anggotaid' => $row->anggota_id,
					'ukmid' => $row->ukm_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script> 
					alert('Selamat Login Berhasil');
					window.location='".site_url('dashboard')."';
				</script>";
			} else {
				echo "<script> 
					alert('Login Gagal');
					window.location='".site_url('home/login')."';
				</script>";
			}
		}
	}
	
	public function logout()
	{
		$params = array('anggotaid', 'level');
		$this->session->unset_userdata($params);
		redirect('home/login');
	}
}