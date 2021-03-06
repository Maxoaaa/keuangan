<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListAdmin extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
	}
	public function index()
	{
		$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 

		$dataHalaman = array(   
		'pagea'	=> "beranda",
          'da' => $kue,
          'pagea'=>   "h_admin"
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('dashboard/v_kategori');
		$this->load->view('dashboard/v_footer');
	}
}
