<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GapoktanModel extends CI_Model {
  
  public function view(){
    return $this->db->get('gapoktan')->result(); // Tampilkan semua data yang ada di tabel provinsi
  }
} 