<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		$this->load->library('session');	
		$this->load->model('model_login');
		$this->load->model('admin/butuhp_model', 'butuhp');
        $this->load->model('admin/KecamatanModel', 'km');
        $this->load->model('admin/DesaModel', 'dm');        
        $this->load->model('admin/gapoktan_model', 'gm');        
        $this->load->model('admin/poktan_model', 'pm');
        $this->load->model('admin/Grafik_model', 'grafik');  
		$this->load->model('admin/Polpuk_model', 'polpuk');
		$this->load->model('admin/masukp_model', 'masukp');
		if($this->session->userdata('level')!=="dinas")
		{
		redirect('login');
		}	
	}
	public function index()
	{
		
		$isi    = array('header'    	=> 'Dashboard Simpudi',
                        'content'   	=> 'dinas/content_dinas', //untuk menampilkan konten memanggil dari view admin bagian konten
                        'judul'     	=> 'Dashboard',
                        'sub_judul' 	=> '',
                        'salam'			=> 1,
		                'data'      	=> $this->butuhp->get(),
		                'total_poktan'	=> $this->pm->hitungJumlahPoktan(),
		                'total_desa' 	=> $this->dm->hitungJumlahDesa(),
		                'total_kec' 	=> $this->km->hitungJumlahKec(),
		                'total_gapoktan'=> $this->gm->hitungJumlahGapoktan(),
		                'total_datamasuk'=> $this->butuhp->hitungJumlahDataMasuk(),
		                'kecamatan' 	=> $this->km->view(),
		                //<grafik
		                'get_tahun'		=> $this->grafik->get_tahun(),
                        'data_grafik'	=> $this->grafik->report(),
                        //grafik>
                        'user'			=> 'Dinas'
                        );
		$this->load->view('dinas/dinas_home', $isi);
	}

	public function by_tahun()
	{ 
        $tahun  =$this->input->get('tahun');
        if ($tahun==='semua') {
        $isi    = array('header'    	=> 'Dashboard Simpudi',
                        'content'   	=> 'dinas/content_dinas', //untuk menampilkan konten memanggil dari view admin bagian konten
                        'judul'     	=> 'Dashboard',
                        'sub_judul' 	=> '',
                        'salam'			=> 0,
		                'total_poktan'	=> $this->pm->hitungJumlahPoktan(),
		                'total_desa' 	=> $this->dm->hitungJumlahDesa(),
		                'total_kec' 	=> $this->km->hitungJumlahKec(),
		                'total_gapoktan'=> $this->gm->hitungJumlahGapoktan(),
		                'total_datamasuk'=> $this->butuhp->hitungJumlahDataMasuk(),
		                'kecamatan' 	=> $this->km->view(),
		                //<grafik
		                'get_tahun'		=> $this->grafik->get_tahun(),
                        'data_grafik'	=> $this->grafik->by_tahun($tahun),
                        'data_grafik2'	=> $this->polpuk->by_tahun_only($tahun),
                		'data'          => $this->butuhp->by_tahun($tahun),
                        //grafik>
                        'user'			=> 'Dinas'
                        );	
        } else {
        $isi    = array('header'    	=> 'Dashboard Simpudi',
                        'content'   	=> 'dinas/content_dinas', //untuk menampilkan konten memanggil dari view admin bagian konten
                        'judul'     	=> 'Dashboard',
                        'sub_judul' 	=> '',
                        'salam'			=> 0,
		                'total_poktan'	=> $this->pm->hitungJumlahPoktan(),
		                'total_desa' 	=> $this->dm->hitungJumlahDesa(),
		                'total_kec' 	=> $this->km->hitungJumlahKec(),
		                'total_gapoktan'=> $this->gm->hitungJumlahGapoktan(),
		                'total_datamasuk'=> $this->butuhp->hitungJumlahDataMasukByTahun($tahun),
		                'kecamatan' 	=> $this->km->view(),
		                //<grafik
		                'get_tahun'		=> $this->grafik->get_tahun(),
                        'data_grafik'	=> $this->grafik->by_tahun($tahun),
                        'data_grafik2'	=> $this->polpuk->by_tahun_only($tahun),
                		'data'          => $this->butuhp->by_tahun($tahun),
                        //grafik>
                        'user'			=> 'Dinas'
                        );	
        }
		
		$this->load->view('dinas/dinas_home', $isi);
	}
}

/* End of file admin_home.php */
/* Location: ./application/controllers/admin_home.php */
