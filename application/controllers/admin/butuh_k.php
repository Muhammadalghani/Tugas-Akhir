 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Butuh_k extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/butuhk_model', 'butuhk');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->butuhk->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kebutuhan Pupuk',
                'content'           => 'admin/kebutuhan_k/tampil_butuhk',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Rekap Kecamatan',
                'data'              => $this->butuhk->get(),
                'get_tahun'         => $this->butuhk->get_tahun(),
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
                'content'           => 'admin/kebutuhan_k/tampil_butuhk',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Rekap Kecamatan',
                'data'              => $this->butuhk->by_tahun($tahun),
                'get_tahun'         => $this->butuhk->get_tahun(),
                'get_tahun'         => $this->butuhk->get_tahun(),
                        'user'      => 'Admin'
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }
}
