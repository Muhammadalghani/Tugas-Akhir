<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class KecamatanModel extends CI_Model
{

  public function view()
  {
    return $this->db->get('kecamatan')->result(); // Tampilkan semua data yang ada di tabel provinsi
  }

  public function viewByPengecer($pengecer_id)
  {
    $this->db->where('pengecer_id', $pengecer_id);
    $result = $this->db->get('kecamatan')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }

  public function hitungJumlahKec()
  {
    $query = $this->db->get('kecamatan');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
}
