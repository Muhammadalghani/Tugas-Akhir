 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stoke extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/stoke_model', 'toke');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    }

    public function index()
    {
        $query = $this->toke->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Stok',
                'content'           => 'admin/stok_ecer/tampil_datastokecer',
                'judul'             => 'Input Data User',
                'sub_judul'         => 'Stok',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['stoke'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Stok',
                        'content'   => 'admin/stok_ecer/new_form', //untuk menampilkan konten
                        'judul'     => 'Stok',
                        'sub_judul' => 'Tambah Data',
                        'content_cer'=> $this->toke->getpengecer(),
                        'content_puk'=> $this->toke->getpupuk(),
                        'user'      => 'Admin'
                        );
        
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->toke->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Stok',
                        'content'   => 'admin/stok_ecer/edit', //untuk menampilkan konten
                        'judul'     => 'Stok',
                        'sub_judul' => 'Edit Data',
                        'toke'       => $query->row(),
                        'content_cer'=> $this->toke->getpengecer(),
                        'content_puk'=> $this->toke->getpupuk(),
                        'user'      => 'Admin'
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->toke->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->toke->edit($inputan);
        }
        redirect('admin/stoke');
    }

    public function del($id)
    {
        $this->toke->del($id);
        redirect('admin/stoke');
    }
}
