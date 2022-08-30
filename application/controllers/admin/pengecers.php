<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengecers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pengecer_model', 'ecer');     
        // $this->load->helper('url','html','form'); //tambahan 
        // $this->load->library('form_valida tion');
    }

    public function index()
    {
        $query = $this->ecer->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Pengecer',
                'content'           => 'admin/pengecer/tampil_datapengecer',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Pengecer',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['pengecers'] = $this->pengecer->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Pengecer',
                        'content'   => 'admin/pengecer/new_form', //untuk menampilkan konten
                        'judul'     => 'Pengecer',
                        'sub_judul' => 'Tambah Data',
                        'cont_kec'  => $this->ecer->getkecamatan(),
                        'cont_dis'  => $this->ecer->getdistributor(),
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->ecer->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Pengecer',
                        'content'   => 'admin/pengecer/edit', //untuk menampilkan konten
                        'judul'     => 'Pengecer',
                        'sub_judul' => 'Edit Data',
                        'ecer'     => $query->row(),
                        'cont_kec'  => $this->ecer->getkecamatan(),
                        'cont_dis'  => $this->ecer->getdistributor(),
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->ecer->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->ecer->edit($inputan);
        }
        redirect('admin/pengecers');
    }

    public function del($id)
    {
        $this->ecer->del($id);
        redirect('admin/pengecers');
    }
}
