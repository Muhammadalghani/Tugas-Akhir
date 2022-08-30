<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengecerModel extends CI_Model {
  
  public function viewByDistributor($distributor_id){
    $this->db->where('distributor_id', $distributor_id);
    $result = $this->db->get('pengecer')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }
}