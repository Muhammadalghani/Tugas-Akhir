<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Distributors_d extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/distributor_model', 'butor');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->butor->get();  
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Distributor',
                'content'           => 'dinas/tampil_datadistributor',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Distributor',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                );
        // $isi['distributors'] = $this->distributor->getAll(); //database di model
        $this->load->view('dinas/dinas_home', $isi); //untuk tampilan menu dan css
    }

}