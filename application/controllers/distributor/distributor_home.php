<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		$this->load->library('session');	
		$this->load->model('model_login');
		if($this->session->userdata('level')!=="distributor")
		{
		redirect('login');
		}	
	}
	public function index()
	{
		$isi['content'] 	= 'admin/content_distributor';
		$isi['judul']		= 'Dashboard';
		$isi['sub_judul']	= '';
		$this->load->view('distributor/distributor_home');

	}

}

/* End of file admin_home.php */
/* Location: ./application/controllers/admin_home.php */
