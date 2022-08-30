<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Poktans_d extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/poktan_model', 'tan');
    }

    public function index()
    {
        $query = $this->tan->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kelompok Tani',
                'content'           => 'dinas/tampil_datapoktan',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Kelompok Tani',
                'user'              => 'Kelompok Tani',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['poktans'] = $this->poktan->getAll(); //database di model
        $this->load->view('dinas/dinas_home', $isi); //untuk tampilan menu dan css
    }
}