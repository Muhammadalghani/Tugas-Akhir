 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Butuh_g extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/butuhg_model', 'butuhg');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->butuhg->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kebutuhan Pupuk',
                'content'           => 'admin/kebutuhan_g/tampil_butuhg',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Rekap Gapoktan',
                'data'              => $this->butuhg->get(), 
                'get_tahun'         => $this->butuhg->get_tahun(),
                        'user'      => 'Admin'
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function by_tahun()
    {
        $tahun  =$this->input->get('tahun');
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kebutuhan Pupuk',
                'content'           => 'admin/kebutuhan_g/tampil_butuhg',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Rekap Gapoktan',
                'data'              => $this->butuhg->by_tahun($tahun),
                'get_tahun'         => $this->butuhg->get_tahun(),
                        'user'      => 'Admin'
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }
}
