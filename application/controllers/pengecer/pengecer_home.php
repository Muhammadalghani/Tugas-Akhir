<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengecer_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		$this->load->library('session');	
		$this->load->model('model_login');
		$this->load->model('pengecer/Model_Pengecer','model_pe');
		$this->load->model('admin/KecamatanModel');
		$this->load->model('admin/PengecerModel');
		
		if($this->session->userdata('level')!=="pengecer")
		{
			redirect('login');
		}	
	}
	public function index()
	{
		$this->load->model('pengecer/Model_Pengecer','model_pe');
		$isi= array('header'		=> 'Dashboard Pengecer',
					'content' 		=> 'pengecer/content_pengecer',
					'judul' 		=> 'Dashboard',
					'sub_judul'		=> '',
					'salam' 		=> 1,
					'data'			=> $this->model_pe->get(),
					'data_diri'		=> $this->model_pe->get_id(),
					'get_pengecer' 	=> $this->model_pe->getpengecer(),
					'get_kecamatan' => $this->model_pe->getkecamatan(),
					'get_bulan'		=> $this->model_pe->get_bulan(),
					'get_tahun'		=> $this->model_pe->get_tahun(),
					'jumlah_masuk'	=> $this->model_pe->jumlahMasuk(),
					);
		$this->load->view('pengecer/pengecer_home', $isi);
		
	}
	
	public function by_tahun(){
		$tahun = $this->input->get('tahun');
		$isi	= array(
				'header'		=> 'Simpudi-Dashboard Pengecer',
				'content' 		=> 'pengecer/content_pengecer',
				'judul' 		=> 'Pupuk Masuk',
				'sub_judul'		=> 'Kios Pengecer',
				'salam' 		=> 0,
				'data_diri'		=> $this->model_pe->get_id(),
				'data'			=> $this->model_pe->by_tahun($tahun),
				'get_tahun'		=> $this->model_pe->get_tahun(),
				'kecamatan'		=> $this->KecamatanModel->view(),
				'jumlah_masuk'	=> $this->model_pe->jumlahMasuk(),
				'user'			=> 'Pengecer'
				);
	$this->load->view('pengecer/pengecer_home', $isi);
	}

	public function add()
	{
		// $id_login = $this->session->id_login;
		$isi = array(
			'header'			=> 'Simpudi-Input Data Pupuk Masuk',
			'content' 			=> 'pengecer/pupukmasuk/new_form',
			'judul' 			=> 'Pupuk Masuk',
			'sub_judul'			=> 'Kios Pengecer',
			'get_pengecer'		=> $this->model_pe->getpengecer(),
			'get_distributor'	=> $this->model_pe->getdistributor(),
			'get_kecamatan'		=> $this->model_pe->getkecamatan(),
			'get_bulan'			=> $this->model_pe->get_bulan(),
			'get_tahun'			=> $this->model_pe->get_tahun(),
			'get_pupuk'			=> $this->model_pe->getpupuk(),
			'data_diri'			=> $this->model_pe->get_id(),
			'data'				=> $this->model_pe->get(),
		);

		$this->load->view('pengecer/pengecer_home', $isi);
	}

	public function edit($id=null)
	{
		$id_login = $this->session->id_login;
		$query = $this->model_pe->get2($id);
		$isi = array(
			'header'			=> 'Simpudi-Input Data Pupuk Masuk',
			'content' 			=> 'pengecer/pupukmasuk/edit',
			'judul' 			=> 'Pupuk Masuk',
			'sub_judul'			=> 'Kios Pengecer',
			'pterima'			=> $query->row(),
			'get_pengecer'		=> $this->model_pe->getpengecer($id_login),
			'get_distributor'	=> $this->model_pe->getdistributor(),
			'get_kecamatan'		=> $this->model_pe->getkecamatan(),
			'get_bulan'			=> $this->model_pe->get_bulan(),
			'get_tahun'			=> $this->model_pe->get_tahun(),
			'get_pupuk'			=> $this->model_pe->getpupuk(),
			'data_diri'			=> $this->model_pe->get_id(),
			'data'				=> $this->model_pe->get(),
		);
		$this->load->view('pengecer/pengecer_home', $isi);
	}

	public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->model_pe->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->model_pe->edit($inputan);
        }
        redirect('pengecer/pengecer_home');
    }

	public function del($id)
	{
		$this->model_pe->del($id);
		redirect('pengecer/pengecer_home');
	}

	public function listPengecer()
	{
		$distributor_id = $this->input->post('distributor_id');

		$pengecer = $this->PengecerModel->viewByDistributor($distributor_id);
		$lists2 = "<option value=''>Pilih</option>";

		foreach($pengecer as $data){
			$lists2 .= "<option value='".$data->pengecer_id."'>".$data->nama_pengecer."</option>";
		}

		$callback = array('list_pengecer'=>$lists2);

		echo json_encode($callback);
	}
}

/* End of file admin_home.php */
/* Location: ./application/controllers/admin_home.php */
