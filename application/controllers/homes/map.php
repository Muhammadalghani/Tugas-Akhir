 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','html','form');
		$this->load->library('session');
		
	}

	public function index()   
	{
		$this->load->model('admin/Grafik_model', 'grafik');
		$isi    = array('header'    => 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   => 'map/content_map', //untuk menampilkan konten
                        'get_tahun'	=> $this->grafik->get_tahun(),
                        'data'		=> $this->grafik->report(),
                        'tahun'		=> '2018'
                        // 'tahun'		=> 2018,
                        // 'report'	=> $this->grafik->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('map/tampilan_map', $isi);

	} 

	public function by_tahun() 
	{
		$this->load->model('admin/Grafik_model', 'grafik');
		$tahun=$this->input->get('tahun');
		$isi    = array('header'    => 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   => 'map/content_map', //untuk menampilkan konten
                        'data'		=> $this->grafik->by_tahun($tahun),
                        'get_tahun'	=> $this->grafik->get_tahun(),
                        // 'report'	=> $this->grafik->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('map/tampilan_map', $isi);
	}
	

	public function grafik() 
	{
		$this->load->model('admin/Grafik_model', 'grafik');
		$tahun=$this->input->get('tahun');
		$data['data']=$this->grafik->report($tahun);
		$data['get_tahun']=$this->grafik->get_tahun();
		$this->load->view('map/grafik/grafik', $data);
	}

	public function list_pupuk()
	{
		// $this->load->model('admin/Grafik_model', 'grafik');
		$isi    = array('header'    => 'Sistem Informasi Pupuk Bersubsidi ',
                        'content'   => 'map/content_phonska', //untuk menampilkan konten
                        'data'		=> $this->grafik->report()
                        // 'report'	=> $this->grafik->report()
                        // 'judul'     => 'Dashboard',
                        // 'sub_judul' => ''
                        );
		// $this->load->view('admin/admin_home', $isi);
		$this->load->view('map/tampilan_map', $isi);

	} 

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */