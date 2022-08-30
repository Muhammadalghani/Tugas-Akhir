<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DesaModel extends CI_Model {
  
  public function viewByKecamatan($kecamatan_id){
    $this->db->where('kecamatan_id', $kecamatan_id);
    $result = $this->db->get('desa')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }

    public function hitungJumlahDesa()
    {   
    $query = $this->db->get('desa');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}  
}