<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Mapb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		$this->load->library('session');
	 	
	}

	public function index()
	{
		$this->load->model('admin/Polpuk_model', 'polpuk');
		$isi    = array('header'    	=> 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   	=> 'map_butuh/content_mapb', //untuk menampilkan konten
                        'get_tahun'		=> $this->polpuk->get_tahun(),
                        'get_bulan'		=> $this->polpuk->get_bulan(),
                        'get_kecamatan'	=> $this->polpuk->get_kecamatan(),
                        'get_pupuk'		=> $this->polpuk->get_pupuk(),
                        'data'		=> $this->polpuk->report(),
                        'dataurea'		=> $this->polpuk->urea(),
                        'dataza'		=> $this->polpuk->za(),
                        'datasp36'		=> $this->polpuk->sp36(),
                        'dataphonska'	=> $this->polpuk->phonska(),
                        'datapetroganik'=> $this->polpuk->petroganik(),
                        // 'report'	=> $this->polpuk->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('map_butuh/tampilan_mapb', $isi);

	} 
 
	public function by_tahun()
	{
		$this->load->model('admin/Polpuk_model', 'polpuk');
		$tahun 		=$this->input->get('tahun');
		$kecamatan 	      =$this->input->get('kecamatan');
		// $bulan 		=$this->input->get('bulan');
		// $pupuk 		=$this->input->get('pupuk');
	if ($kecamatan == 'semua') {
        $isi    = array('header'    	=> 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   	=> 'map_butuh/content_mapb', //untuk menampilkan konten
                        'data'		=> $this->polpuk->by_tahun_only($tahun),
				'dataurea'		=> $this->polpuk->urea_bytahun_only($tahun),
                        'dataza'		=> $this->polpuk->za_bytahun_only($tahun),
                        'datasp36'		=> $this->polpuk->sp36_bytahun_only($tahun),
                        'dataphonska'	=> $this->polpuk->phonska_bytahun_only($tahun),
                        'datapetroganik'  => $this->polpuk->petroganik_bytahun_only($tahun),
                        'get_tahun'		=> $this->polpuk->get_tahun(),
                        'get_kecamatan'	=> $this->polpuk->get_kecamatan(),
      //                   'get_bulan'		=> $this->polpuk->get_bulan(),
      //                   'get_pupuk'		=> $this->polpuk->get_pupuk(),
                        // 'report'	=> $this->polpuk->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
        } else {
		
		$isi    = array('header'    	=> 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   	=> 'map_butuh/content_mapb', //untuk menampilkan konten
                        'data'		=> $this->polpuk->by_tahun($kecamatan, $tahun),
				'dataurea'		=> $this->polpuk->urea_bytahun($kecamatan, $tahun),
                        'dataza'		=> $this->polpuk->za_bytahun($kecamatan, $tahun),
                        'datasp36'		=> $this->polpuk->sp36_bytahun($kecamatan, $tahun),
                        'dataphonska'	=> $this->polpuk->phonska_bytahun($kecamatan, $tahun),
                        'datapetroganik'  => $this->polpuk->petroganik_bytahun($kecamatan, $tahun),
                        'get_tahun'		=> $this->polpuk->get_tahun(),
                        'get_kecamatan'	=> $this->polpuk->get_kecamatan(),
      //                   'get_bulan'		=> $this->polpuk->get_bulan(),
      //                   'get_pupuk'		=> $this->polpuk->get_pupuk(),
                        // 'report'	=> $this->polpuk->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		}
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('map_butuh/tampilan_mapb', $isi);
	}
	

	public function grafik() 
	{
		$this->load->model('admin/Polpuk_model', 'polpuk');
		$tahun=$this->input->get('tahun');
		$data['data']=$this->polpuk->report($tahun);
		$data['get_tahun']=$this->polpuk->get_tahun();
		$this->load->view('map_butuh/grafik/grafik', $data);
	}

	public function list_pupuk()
	{
		// $this->load->model('admin/Grafik_model', 'grafik');
		$isi    = array('header'    => 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   => 'map/content_phonska', //untuk menampilkan konten
                        'data'		=> $this->polpuk->report()
                        // 'report'	=> $this->grafik->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('map_butuh/tampilan_mapb', $isi);

	} 

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */