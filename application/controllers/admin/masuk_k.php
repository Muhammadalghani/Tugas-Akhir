<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk_k extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/masukk_model','masuk_k');
        // $this->load->model('admin/KecamatanModel');
        // $this->load->model('admin/PengecerModel');
    }

    public function index()
    {
        $isi = array(
            'header'        => 'Simpudi - Tampil Data Pupuk Masuk',
            'content'       => 'admin/pupuk_masukk/tampil_kdatamasuk',
            'judul'         => 'Pupuk Masuk',
            'sub_judul'     => 'Rekap Kecamatan',
            'data'          => $this->masuk_k->get(),
            'get_bulan'     => $this->masuk_k->get_bulan(),
            'user'          => 'Admin'
        );

        $this->load->view('admin/admin_home', $isi);
    }

    public function by_bulan()
    {
        $bulan = $this->input->get('bulan');
        $isi = array(
            'header'        => 'Simpudi - Tampil Data Pupuk Masuk',
            'content'       => 'admin/pupuk_masukk/tampil_kdatamasuk',
            'judul'         => 'Pupuk Masuk',
            'sub_judul'     => 'Rekap Kecamatan',
            'data'          => $this->masuk_k->by_bulan($bulan),
            'get_bulan'     => $this->masuk_k->get_bulan(),
            // 'kecamatan'     => $this->KecamatanModel->view(),
            'user'          => 'Admin'
        );
        $this->load->view('admin/admin_home', $isi);
    }
}