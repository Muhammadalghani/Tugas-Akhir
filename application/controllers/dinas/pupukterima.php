<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Pupukterima extends CI_Controller 
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
            'content'       => 'dinas/tampil_datamasuk',
            'judul'         => 'Pupuk Masuk',
            'sub_judul'     => 'Pengecer',
            'data'          => $this->masuk_p->get(),
            'get_tahun'     => $this->masuk_p->get_tahun(),
            'get_bulan'     => $this->masuk_p->get_bulan(),
            'kecamatan'     => $this->KecamatanModel->view(),
            'user'          => 'Dinas'
        );

        $this->load->view('dinas/dinas_home', $isi);
    }

    public function by_bulan()
    {
        $bulan = $this->input->get('bulan');
        $isi = array(
            'header'        => 'Simpudi - Tampil Data Pupuk Masuk',
            'content'       => 'dinas/tampil_datamasuk',
            'judul'         => 'Pupuk Masuk',
            'sub_judul'     => 'Pengecer',
            'data'          => $this->masuk_p->by_bulan($bulan),
            'get_bulan'     => $this->masuk_p->get_bulan(),
            'kecamatan'     => $this->KecamatanModel->view(),
            'user'          => 'Dinas'
        );
        $this->load->view('dinas/dinas_home', $isi);
    }




}

?>