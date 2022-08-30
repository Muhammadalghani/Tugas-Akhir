<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pupuks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pupuk_model', 'puk');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->puk->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Pupuk',
                'content'           => 'admin/pupuk/tampil_datapupuk',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Pupuk',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['pupuks'] = $this->pupuk->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Pupuk',
                        'content'   => 'admin/pupuk/new_form', //untuk menampilkan konten
                        'judul'     => 'Pupuk',
                        'sub_judul' => 'Tambah Data',
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->puk->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Pupuk',
                        'content'   => 'admin/pupuk/edit', //untuk menampilkan konten
                        'judul'     => 'Pupuk',
                        'sub_judul' => 'Edit Data',
                        'puk'     => $query->row(),                
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->puk->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->puk->edit($inputan);
        }
        redirect('admin/pupuks');
    }

    public function del($id)
    {
        $this->puk->del($id);
        redirect('admin/pupuks');
    }
}
