 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Butuh_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('poktan/Model_Poktan', 'model_p');
        $this->load->model('admin/KecamatanModel');
        $this->load->model('admin/DesaModel');        
        $this->load->model('admin/GapoktanModel');        
        $this->load->model('admin/PoktanModel');        
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
        if($this->session->userdata('level')!=="poktan")
        {
        redirect('login');
        }
    }

    public function index()
    { 
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kebutuhan Pupuk',
                'content'           => 'poktan/kebutuhan/tampil_butuh',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Kelompok Tani',
                'data'              => $this->model_p->get(),
                'data_diri'         => $this->model_p->get_id(),
                'get_tahun'         => $this->model_p->get_tahun(),
                'kecamatan'         => $this->KecamatanModel->view(),
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('poktan/poktan_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array(
                'header'        => 'Simpudi-Tambah Data Stok',
                'content'       => 'poktan/kebutuhan/new_form', //untuk menampilkan konten
                'judul'         => 'Kebutuhan Pupuk',
                'sub_judul'     => 'Tambah Data',
                'data_diri'         => $this->model_p->get_id(),
                'get_poktan'    => $this->model_p->getpoktan(),
                'get_gapoktan'  => $this->model_p->getgapoktan(),
                'get_desa'      => $this->model_p->getdesa(),
                'get_kecamatan' => $this->model_p->getkecamatan(),
                'get_tahun'     => $this->model_p->get_tahun(),
                );
        $this->load->view('poktan/poktan_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null)
    {
        $query = $this->model_p->get2($id);
        $isi    = array(
                'header'        => 'Simpudi-Edit Data kebutuhan',
                'content'       => 'poktan/kebutuhan/edit', //untuk menampilkan konten
                'judul'         => 'Kebutuhan Pupuk',
                'sub_judul'     => 'Edit Data',
                'butuhp'        => $query->row(),
                'data_diri'     => $this->model_p->get_id(),
                'get_poktan'    => $this->model_p->getpoktan(),
                'get_gapoktan'  => $this->model_p->getgapoktan(),
                'get_desa'      => $this->model_p->getdesa(),
                'get_kecamatan' => $this->model_p->getkecamatan(),
                'get_tahun'     => $this->model_p->get_tahun(),
                );
        $this->load->view('poktan/poktan_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) { 
            $inputan = $this->input->post(null, TRUE);
            $this->model_p->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->model_p->edit($inputan);
        }
        redirect('poktan/butuh_p');
    }

    public function del($id)
    {
        $this->model_p->del($id);
        redirect('poktan/butuh_p');
    }

  public function listDesa()
  {
    // Ambil data ID Kecamatan yang dikirim via ajax post
    $kecamatan_id = $this->input->post('kecamatan_id');
    
    $desa = $this->DesaModel->viewByKecamatan($kecamatan_id);
    
    // Buat variabel untuk menampung tag-tag option nya
    // Set defaultnya dengan tag option Pilih
    $lists = "<option value=''>Pilih</option>";
    
    foreach($desa as $data){
      $lists .= "<option value='".$data->desa_id."'>".$data->nama_desa."</option>"; // Tambahkan tag option ke variabel $lists
    }
    
    $callback = array('list_desa'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

  public function listPoktan()
  {
    // Ambil data ID Kecamatan yang dikirim via ajax post
    $gapoktan_id = $this->input->post('gapoktan_id');
    
    $poktan = $this->PoktanModel->viewByGapoktan($gapoktan_id);
    
    // Buat variabel untuk menampung tag-tag option nya
    // Set defaultnya dengan tag option Pilih
    $lists2 = "<option value=''>Pilih</option>";
    
    foreach($poktan as $data){
      $lists2 .= "<option value='".$data->poktan_id."'>".$data->nama_poktan."</option>"; // Tambahkan tag option ke variabel $lists
    }
    
    $callback = array('list_poktan'=>$lists2); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }    
}
