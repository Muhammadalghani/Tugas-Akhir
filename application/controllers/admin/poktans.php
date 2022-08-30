<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Poktans extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/poktan_model', 'tan');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->tan->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kelompok Tani',
                'content'           => 'admin/poktan/tampil_datapoktan',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Kelompok Tani',
                'user'              => 'Kelompok Tani',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['poktans'] = $this->poktan->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Kemompok Tani',
                        'content'   => 'admin/poktan/new_form', //untuk menampilkan konten
                        'judul'     => 'Kelompok Tani',
                        'sub_judul' => 'Tambah Data',
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->tan->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Kelompok Tani',
                        'content'   => 'admin/poktan/edit', //untuk menampilkan konten
                        'judul'     => 'Kelompok Tani',
                        'sub_judul' => 'Edit Data',
                        'tan'     => $query->row(),                
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->tan->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->tan->edit($inputan);
        }
        redirect('admin/poktans');
    }

    public function del($id)
    {
        $this->tan->del($id);
        redirect('admin/poktans');
    }
}
