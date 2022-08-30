<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		$this->load->library('session');
	}

	public function index()
	{
		$isi    = array('header'    => 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   => 'home/content_home', //untuk menampilkan konten
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('home/tampilan_home', $isi);

	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */