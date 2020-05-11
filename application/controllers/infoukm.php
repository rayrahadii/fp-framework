<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoUkm extends CI_Controller {

	function __construct()
	{
        parent::__construct();
        $this->load->model('artikel_m');;
	}
        public function basket()
        {
        $this->load->view('/include/navbar');
        $this->load->view('infoukm/basket');
        $this->load->view('/include/footer');
        }
        
        public function futsal()
	{
        $this->load->view('/include/navbar');
        $this->load->view('infoukm/futsal');
        $this->load->view('/include/footer');
        }
        
        public function musik()
        {
        $this->load->view('/include/navbar');
        $this->load->view('infoukm/musik');
        $this->load->view('/include/footer');
        }
}