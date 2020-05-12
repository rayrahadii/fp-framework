<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ketua extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ketua_m');;
		$this->load->model('anggota_m');;
	}

	public function index()
	{
		$data['row'] = $this->anggota_m->getUkm();
		$this->template->load('template', 'anggota/ketua_data', $data);
	}

	public function edit($id)
	{
		$query = $this->anggota_m->get($id);
		if($query->num_rows() > 0) {
			$anggota = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $anggota
			);
			$this->template->load('template', 'anggota/ketua_form', $data);
		} else {
			$this->session->set_flashdata('success', 'Data Berhasil Diperbarui');
			redirect('ketua');
		}
	}

	public function process()
	{	
		$config['upload_path']          = './uploads/ktm/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['file_name']			= 'ktm-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if(@$_FILES['image']['name'] != null){
				if($this->upload->do_upload('image')) {
				$post['image'] = $this->upload->data('file_name');
				$this->anggota_m->add($post);
				if($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('anggota');
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect('anggota/add');
			}
		}

		} else if(isset($_POST['edit'])) {
			$this->anggota_m->edit($post);
		} 
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		}
		redirect('ketua');
	}

	public function del($id)
	{
		$anggota = $this->anggota_m->get($id)->row();
				if($anggota->image != null) {
					$target_file =  './uploads/ktm/'.$anggota->image;
					unlink($target_file);
				}
		$this->anggota_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
		redirect('ketua');
	}

	public function detail($id)
	{
		$query = $this->ketua_m->getUkm($id);
		if($query->num_rows() > 0) {
			$anggota = $query->row();
			$data = array(
				'page' => 'detail',
				'row' => $anggota
			);
			$this->template->load('template', 'anggota/ketua_detail', $data);
		}
	}

}