<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alokasis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/alokasi_model', 'kasi');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->kasi->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Alokasi Pupuk Bersubsidi',
                'content'           => 'admin/alokasi/tampil_dataalokasi',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Alokasi Pupuk Subsidi',
                'data'              =>  $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['alokasis'] = $this->alokasi->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Alokasi Pupuk Bersubsidi',
                        'content'   => 'admin/alokasi/new_form', //untuk menampilkan konten
                        'judul'     => 'Alokasi Pupuk Bersubsidi',
                        'sub_judul' => 'Tambah Data',
                        'content_sim'=> $this->kasi->getmusim(),
                        'content_puk'=> $this->kasi->getpupuk(),
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->kasi->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Alokasi Pupuk Bersubsidi',
                        'content'   => 'admin/alokasi/edit', //untuk menampilkan konten
                        'judul'     => 'Alokasi Pupuk Bersubsidi',
                        'sub_judul' => 'Edit Data',
                        'content_sim'=> $this->kasi->getmusim(),
                        'content_puk'=> $this->kasi->getpupuk(),
                        'kasi'     => $query->row(),                
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->kasi->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->kasi->edit($inputan);
        }
        redirect('admin/alokasis');
    }

    public function del($id)
    {
        $this->kasi->del($id);
        redirect('admin/alokasis');
    }
}
