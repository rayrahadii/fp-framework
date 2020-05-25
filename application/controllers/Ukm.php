<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ukm extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ukm_m');;
	}
	
	public function index()
	{
		$data['row'] = $this->ukm_m->get();
		$this->template->load('template', 'ukm/ukm_data', $data);
	}

	public function detailukm($id)
	{
			$query = $this->ukm_m->get($id);
			if($query->num_rows() > 0) {
				$ukm = $query->row();
				$data = array(
					'row' => $ukm
				);
				$this->load->view('/include/navbar');
    			$this->load->view('ukm/ukm_detail_home', $data);
    			$this->load->view('/include/footer');
			}
		
	}

	public function add() 
	{
		$ukm = new stdClass();
		$ukm->ukm_id = null;
		$ukm->nama_ukm = null;
		$ukm->ketua_ukm = null;
		$ukm->status_ukm = null;
		$ukm->keterangan_ukm = null;
		$ukm->jenis = null;
		$data = array(
			'page' => 'add',
			'row' => $ukm
		);
		$this->template->load('template', 'ukm/ukm_form', $data);
	}

	public function edit($id)
	{
		$query = $this->ukm_m->get($id);
		if($query->num_rows() > 0) {
			$ukm = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $ukm
			);
			$this->template->load('template', 'ukm/ukm_form', $data);
		} else {
			$this->session->set_flashdata('success', 'Data Berhasil Diperbarui');
			redirect('ukm');
		}
	}

	public function process()
	{	
		$config['upload_path']          = './uploads/ukm/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['file_name']			= 'ukm-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);
		
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			if(@$_FILES['image_ukm']['name'] != null){
				if($this->upload->do_upload('image_ukm')) {
				$post['image_ukm'] = $this->upload->data('file_name');
				$this->ukm_m->add($post);
				if($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
				}
				redirect('ukm');
			} else {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $error);
				redirect('ukm/add');
			}
		}

		} else if(isset($_POST['edit'])) {
			$this->ukm_m->edit($post);
		} 
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
		}
		redirect('ukm');
	}

	public function del($id)
	{
		$ukm = $this->ukm_m->get($id)->row();
				if($ukm->image != null) {
					$target_file =  './uploads/ukm/'.$ukm->image_ukm;
					unlink($target_file);
				}
		$this->ukm_m->del($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
		}
		redirect('ukm');
	}

	public function detail($id)
	{
		$query = $this->ukm_m->get($id);
		if($query->num_rows() > 0) {
			$ukm = $query->row();
			$data = array(
				'page' => 'detail',
				'row' => $ukm
			);
			$this->template->load('template', 'ukm/ukm_detail', $data);
		}
	}

}