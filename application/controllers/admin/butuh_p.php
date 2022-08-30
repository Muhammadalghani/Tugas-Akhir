 <?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Butuh_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/butuhp_model', 'butuhp');
        $this->load->model('admin/KecamatanModel');
        $this->load->model('admin/DesaModel');        
        $this->load->model('admin/GapoktanModel');        
        $this->load->model('admin/PoktanModel');        
        // $this->load->helper('url','html','form'); //tambahan
        // $this->load->library('form_validation');
        // if($this->session->userdata('level')!=="admin")
        // {
        // redirect('login');
        // }
    }

    public function index()
    {
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kebutuhan Pupuk',
                'content'           => 'admin/kebutuhan_p/tampil_butuhp',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Kelompok Tani',
                'data'              => $this->butuhp->get(),
                'get_tahun'         => $this->butuhp->get_tahun(),
                'kecamatan'         => $this->KecamatanModel->view(),
                        'user'      => 'Admin'
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function by_tahun()
    {
        $tahun  =$this->input->get('tahun');
        $isi    = array(
                'header'            => 'Simpudi-Tampil Data Kebutuhan Pupuk',
                'content'           => 'admin/kebutuhan_p/tampil_butuhp',
                'judul'             => 'Kebutuhan Pupuk',
                'sub_judul'         => 'Kelompok Tani',
                'data'              => $this->butuhp->by_tahun($tahun),
                'get_tahun'         => $this->butuhp->get_tahun(),
                'kecamatan'         => $this->KecamatanModel->view(),
                        'user'      => 'Admin'
                        );
        // $isi['stoks'] = $this->stok->getAll(); //database di model
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function add()
    {
        $isi    = array(
                'header'        => 'Simpudi-Tambah Data Stok',
                'content'       => 'admin/kebutuhan_p/new_form', //untuk menampilkan konten
                'judul'         => 'Kebutuhan Pupuk',
                'sub_judul'     => 'Tambah Data',
                'get_poktan'    => $this->butuhp->getpoktan(),
                'get_gapoktan'  => $this->butuhp->getgapoktan(),
                'get_desa'      => $this->butuhp->getdesa(),
                'get_kecamatan' => $this->butuhp->getkecamatan(),
                'get_tahun'     => $this->butuhp->get_tahun(),
                'user'          => 'Admin'
                );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function edit($id= null) 
    { 
        $query = $this->butuhp->get2($id);
        $isi    = array(
                'header'        => 'Simpudi-Edit Data kebutuhan',
                'content'       => 'admin/kebutuhan_p/edit', //untuk menampilkan konten
                'judul'         => 'Kebutuhan Pupuk',
                'sub_judul'     => 'Update Data',
                'butuhp'        => $query->row(),
                'get_poktan'    => $this->butuhp->getpoktan(),
                'get_gapoktan'  => $this->butuhp->getgapoktan(),
                'get_desa'      => $this->butuhp->getdesa(),
                'get_kecamatan' => $this->butuhp->getkecamatan(),
                'get_tahun'     => $this->butuhp->get_tahun(),
                'user'      => 'Admin'
                );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

    public function proses()
    {
        if(isset($_POST['masuk'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->butuhp->masuk($inputan);
        } else if(isset($_POST['edit'])) {
            $inputan = $this->input->post(null, TRUE);
            $this->butuhp->edit($inputan);
        }
        redirect('admin/butuh_p');
    }

    public function del($id)
    {
        $this->butuhp->del($id);
        redirect('admin/butuh_p');
    }

    public function import()
    {
        $isi    = array(
                'header'        => 'Simpudi-Tambah Data Stok',
                'content'       => 'admin/kebutuhan_p/import_data', //untuk menampilkan konten
                'judul'         => 'Kebutuhan Pupuk',
                'sub_judul'     => 'Tambah Data',
                'get_poktan'    => $this->butuhp->getpoktan(),
                'get_gapoktan'  => $this->butuhp->getgapoktan(),
                'get_desa'      => $this->butuhp->getdesa(),
                'get_kecamatan' => $this->butuhp->getkecamatan(),
                'get_tahun'     => $this->butuhp->get_tahun(),
                'user'          => 'Admin'
                );
        $this->load->view('admin/admin_home', $isi); //untuk tampilan menu dan css
    }

  public function listDesa()
  {
    // Ambil data ID Kecamatan yang dikirim via ajax post
    $kecamatan_id = $this->input->post('kecamatan_id');
    
    $desa = $this->DesaModel->viewByKecamatan($kecamatan_id);
    
    // Buat variabel untuk menampung tag-tag option nya
    // Set defaultnya dengan tag option Pilih
    $lists = "<option value=''>-Pilih Desa-</option>";
    
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
    $lists2 = "<option value=''>-Pilih Kelompok Tani-</option>";
    
    foreach($poktan as $data){
      $lists2 .= "<option value='".$data->poktan_id."'>".$data->nama_poktan."</option>"; // Tambahkan tag option ke variabel $lists
    }
    
    $callback = array('list_poktan'=>$lists2); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }    
}
