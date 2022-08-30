<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengecers_d extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pengecer_model', 'ecer');
    }

    public function index()
    {
        $query = $this->ecer->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Pengecer',
                'content'           => 'dinas/tampil_datapengecer',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Pengecer',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['pengecers'] = $this->pengecer->getAll(); //database di model
        $this->load->view('dinas/dinas_home', $isi); //untuk tampilan menu dan css
    }
}