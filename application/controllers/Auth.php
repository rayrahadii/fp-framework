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
	public function register()
	{
		if($this->input->post()){
			$username=$this->input->post('username');
			$nama=$this->input->post('nama');
			$email=$this->input->post('email');
			$password1=$this->input->post('password1');
			$password2=$this->input->post('password2');
			$npm=$this->input->post('npm');
			$level=$this->input->post('level');
			$fakultas=$this->input->post('fakultas');
			$image = $_FILES['image']['name'];
                $lokasi = $_FILES['image']['tmp_name'];
                move_uploaded_file($lokasi, "./uploads/ktm" . $image);

			$tambah=array(
				'username'=>$username,
				'password'=>$password1,
				'nama_anggota'=>$nama,
				'email'=>$email,
				'npm'=>$npm,
				'fakultas'=>$fakultas,
				'level'=>$level,
				'image'=>$image,
							);
				$this->db->insert('anggota',$tambah);
				redirect('home/login');
		}
		else {
			$this->load->view('register');
		}
}
}