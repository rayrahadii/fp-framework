<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('anggota_m');;
	}

	public function add()
	{
		$anggota = new stdClass();
		$anggota->anggota_id = null;
		$anggota->ukm_id = null;
		$anggota->nama_anggota = null;
		$anggota->username = null;
		$anggota->password = null;
		$anggota->npm = null;
		$anggota->email = null;
		$anggota->fakultas = null;
		$anggota->ukm = null;
		$anggota->level = null;
		$data = array(
			'row' => $anggota
		);
		$this->load->view('/include/navbar');
    	$this->load->view('registrasi', $data);
    	$this->load->view('/include/footer');
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
				redirect('home');
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect('register/add');
			}
		}

		} else if(isset($_POST['edit'])) {
			$this->anggota_m->edit($post);
		} 
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		}
		redirect('register');
	}

    
}
