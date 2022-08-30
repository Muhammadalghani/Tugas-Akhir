<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Distributors extends CI_Controller
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
                'content'           => 'admin/distributor/tampil_datadistributor',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Distributor',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                );
        // $isi['distributors'] = $this->distributor->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Distributor',
                        'content'   => 'admin/distributor/new_form', //untuk menampilkan konten
                        'judul'     => 'Distributor',
                        'sub_judul' => 'Tambah Data',
                        // 'cont_des'  => $this->butor->getdesa(),
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->butor->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Distributor',
                        'content'   => 'admin/distributor/edit', //untuk menampilkan konten
                        'judul'     => 'Distributor',
                        'sub_judul' => 'Edit Data',
                        'butor'     => $query->row(),
                        // 'cont_des'  => $this->butor->getdesa()                
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->butor->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->butor->edit($inputan);
        }
        redirect('admin/distributors');
    }

    public function del($id)
    {
        $this->butor->del($id);
        redirect('admin/distributors');
    }
}
