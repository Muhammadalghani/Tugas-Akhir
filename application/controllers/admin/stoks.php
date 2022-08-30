 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stoks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/stok_model', 'tok');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->tok->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Stok',
                'content'           => 'admin/stok/tampil_datastok',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Stok',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Stok',
                        'content'   => 'admin/stok/new_form', //untuk menampilkan konten
                        'judul'     => 'Stok',
                        'sub_judul' => 'Tambah Data',
                        'content_dis'=> $this->tok->getdistributor(),
                        'content_puk'=> $this->tok->getpupuk(),
                        'user'      => 'Admin'

                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->tok->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Stok',
                        'content'   => 'admin/stok/edit', //untuk menampilkan konten
                        'judul'     => 'Stok',
                        'sub_judul' => 'Edit Data',
                        'tok'       => $query->row(),
                        'content_dis'=> $this->tok->getdistributor(),
                        'content_puk'=> $this->tok->getpupuk(),
                        'user'      => 'Admin'
                        
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->tok->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->tok->edit($inputan);
        }
        redirect('admin/stoks');
    }

    public function del($id)
    {
        $this->tok->del($id);
        redirect('admin/stoks');
    }
}
