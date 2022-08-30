<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PoktanModel extends CI_Model {
  
  public function viewByGapoktan($gapoktan_id){
    $this->db->where('gapoktan_id', $gapoktan_id);
    $result = $this->db->get('poktan')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }
}