<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('artikel_m');;
	}
        
        public function index()
        {
        $data['row'] = $this->artikel_m->gethome();
        $this->load->view('/include/navbar');
        $this->load->view('home', $data);
        $this->load->view('/include/footer');
        }
        
        public function login()
	{
        $this->load->view('/include/navbar');
        $this->load->view('login');
        $this->load->view('/include/footer');
        }
        
        public function registrasi()
        {
        $this->load->view('/include/navbar');
        $this->load->view('registrasi');
        $this->load->view('/include/footer');
        }

        public function ukm()
        {
        $this->load->view('/include/navbar');
        $this->load->view('ukm');
        $this->load->view('/include/footer');
        }
        
        public function komunitas()
        {
        $this->load->view('/include/navbar');
        $this->load->view('komunitas');
        $this->load->view('/include/footer');
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