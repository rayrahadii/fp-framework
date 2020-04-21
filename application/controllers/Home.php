<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	}
        
        public function index()
        {
        $this->load->view('/include/navbar');
        $this->load->view('home');
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
}
