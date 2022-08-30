<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gapoktan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/gapoktan_model', 'gap');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->gap->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Gabungan Kelompok Tani',
                'content'           => 'admin/gapoktan/tampil_datagapoktan',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Gabungan Kelompok Tani',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['gapoktan'] = $this->gapoktan->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Kemompok Tani',
                        'content'   => 'admin/gapoktan/new_form', //untuk menampilkan konten
                        'judul'     => 'Gabungan Kelompok Tani',
                        'sub_judul' => 'Tambah Data',
                        'cont_des'  => $this->gap->getdesa(),
                        'cont_kec'  => $this->gap->getkecamatan(),
                        'user'      => 'Admin'

                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->gap->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Gabungan Kelompok Tani',
                        'content'   => 'admin/gapoktan/edit', //untuk menampilkan konten
                        'judul'     => 'Gabungan Kelompok Tani',
                        'sub_judul' => 'Edit Data',
                        'gap'       => $query->row(),                
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->gap->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->gap->edit($inputan);
        }
        redirect('admin/gapoktan');
    }

    public function del($id)
    {
        $this->tan->del($id);
        redirect('admin/gapoktan');
    }
}
