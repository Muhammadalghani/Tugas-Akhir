<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk_p extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/masukp_model','masuk_p');
        $this->load->model('admin/KecamatanModel');
        $this->load->model('admin/PengecerModel');
    }

    public function index()
    {
        $isi = array(
            'header'        => 'Simpudi - Tampil Data Pupuk Masuk',
            'content'       => 'admin/pupuk_masuk/tampil_datapmasuk',
            'judul'         => 'Pupuk Masuk',
            'sub_judul'     => 'Pengecer',
            'data'          => $this->masuk_p->get(),
            'get_tahun'     => $this->masuk_p->get_tahun(),
            'get_bulan'     => $this->masuk_p->get_bulan(),
            'kecamatan'     => $this->KecamatanModel->view(),
            'user'          => 'Admin'
        );

        $this->load->view('admin/admin_home', $isi);
    }

    public function by_bulan()
    {
        $bulan = $this->input->get('bulan');
        $isi = array(
            'header'        => 'Simpudi - Tampil Data Pupuk Masuk',
            'content'       => 'admin/pupuk_masuk/tampil_datapmasuk',
            'judul'         => 'Pupuk Masuk',
            'sub_judul'     => 'Pengecer',
            'data'          => $this->masuk_p->by_bulan($bulan),
            'get_bulan'     => $this->masuk_p->get_bulan(),
            'kecamatan'     => $this->KecamatanModel->view(),
            'user'          => 'Admin'
        );
        $this->load->view('admin/admin_home', $isi);
    }

    public function add()
	{
		// $id_login = $this->session->id_login;
		$isi = array(
			'header'			=> 'Simpudi-Input Data Pupuk Masuk',
			'content' 			=> 'admin/pupuk_masuk/new_form',
			'judul' 			=> 'Pupuk Masuk',
			'sub_judul'			=> 'Kios Pengecer',
			'get_pengecer'		=> $this->masuk_p->getpengecer(),
			'get_distributor'	=> $this->masuk_p->getdistributor(),
			'get_kecamatan'		=> $this->masuk_p->getkecamatan(),
			'get_bulan'			=> $this->masuk_p->get_bulan(),
			'get_tahun'			=> $this->masuk_p->get_tahun(),
			'get_pupuk'			=> $this->masuk_p->getpupuk(),
			'data'				=> $this->masuk_p->get(),
            'user'              => 'Admin'
		);

		$this->load->view('admin/admin_home', $isi);
	}

	public function edit($id=null)
	{
		$query = $this->masuk_p->get2($id);
		$isi = array(
			'header'			=> 'Simpudi-Input Data Pupuk Masuk',
			'content' 			=> 'admin/pupuk_masuk/edit',
			'judul' 			=> 'Pupuk Masuk',
			'sub_judul'			=> 'Kios Pengecer',
			'pterima'			=> $query->row(),
			'get_pengecer'		=> $this->masuk_p->getpengecer(),
			'get_distributor'	=> $this->masuk_p->getdistributor(),
			'get_kecamatan'		=> $this->masuk_p->getkecamatan(),
			'get_bulan'			=> $this->masuk_p->get_bulan(),
			'get_tahun'			=> $this->masuk_p->get_tahun(),
			'get_pupuk'			=> $this->masuk_p->getpupuk(),
			'data'				=> $this->masuk_p->get(),
            'user'              => 'Admin'
		);
		$this->load->view('admin/admin_home', $isi);
	}

	public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->masuk_p->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->masuk_p->edit($inputan);
        }
        redirect('admin/masuk_p');
    }

	public function del($id)
	{
		$this->masuk_p->del($id);
		redirect('admin/masuk_p');
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

    public function listKecamatan()
	{
		$pengecer_id = $this->input->post('pengecer_id');

		$kecamatan = $this->KecamatanModel->viewByPengecer($pengecer_id);
		$lists3 = "<option value=''>Pilih</option>";

		foreach($kecamatan as $data){
			$lists3 .= "<option value='".$data->kecamatan_id."'>".$data->nama_kecamatan."</option>";
		}

		$callback = array('list_kecamatan'=>$lists3);

		echo json_encode($callback);
	}





}