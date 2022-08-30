<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditass extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/komoditas_model', 'tas');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }
 
    public function index()
    {
        $query = $this->tas->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Komoditas',
                'content'           => 'admin/komoditas/tampil_datakomoditas',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Komoditas',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['komoditass'] = $this->komoditas->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Komoditas',
                        'content'   => 'admin/komoditas/new_form', //untuk menampilkan konten
                        'judul'     => 'Komoditas',
                        'sub_judul' => 'Tambah Data',
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->tas->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Komoditas',
                        'content'   => 'admin/komoditas/edit', //untuk menampilkan konten
                        'judul'     => 'Komoditas',
                        'sub_judul' => 'Edit Data',
                        'tas'     => $query->row(),                
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->tas->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->tas->edit($inputan);
        }
        redirect('admin/komoditass');
    }

    public function del($id)
    {
        $this->tas->del($id);
        redirect('admin/komoditass');
    }
}
