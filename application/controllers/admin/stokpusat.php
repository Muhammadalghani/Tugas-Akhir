 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stokpusat extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('admin/stok_pusat', 'pusat');     
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
    } 

    public function index()
    {
        $query = $this->pusat->get();
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Stok Pusat',
                'content'           => 'admin/stok_pusat/tampil_stokpusat',
                'judul'             => 'Data Stok',
                'sub_judul'         => 'Stok Pusat',
                'data'              => $query->result(),
                        'user'      => 'Admin'
                        );
        // $isi['stoke'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add($id= null)
    {
        $isi    = array('header'    => 'Simpudi-Tambah Data Stok',
                        'content'   => 'admin/stok_pusat/new_form', //untuk menampilkan konten
                        'judul'     => 'Stok',
                        'sub_judul' => 'Tambah Data',
                        'content_puk'=> $this->pusat->getpupuk($id),
                        'user'      => 'Admin'

                        );
        
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->pusat->get($id);
        $isi    = array(
                        'header'    => 'Simpudi-Edit Data Stok',
                        'content'   => 'admin/stok_pusat/edit', //untuk menampilkan konten
                        'judul'     => 'Stok',
                        'sub_judul' => 'Edit Data',
                        'pusat'       => $query->row(),
                        'content_puk'=> $this->pusat->getpupuk($id),
                        'user'      => 'Admin'
                        
                        );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->pusat->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->pusat->edit($inputan);
        }
        redirect('admin/stokpusat');
    }

    public function del($id)
    {
        $this->pusat->del($id);
        redirect('admin/stokpusat');
    }
}
