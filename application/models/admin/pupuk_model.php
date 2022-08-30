<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pupuk_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select('*');
        $this->db->from('pupuk');
        if ($id != null) {
            $this->db->where('pupuk_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function masuk($data)
    {
        $param = array(
            // 'pupuk_id'    => $data['id'],
            'nama_pupuk'  		=> $data['nama'],//depan dr database blkg name dr new_form
            'jenis'  		    => $data['jenis'],
            'bentuk'            => $data['bentuk'],
            'warna'             => $data['warna'],
            'harga'  	        => $data['harga'],
            'kemasan'           => $data['kemasan'],
            'kandungan'         => $data['kandungan'],
        );
        $this->db->insert('pupuk', $param);
    }

    public function edit($data)
    {
        $param = array(
            // 'pupuk_id'    => $data['id'],
            'nama_pupuk'        => $data['nama'],//depan dr database blkg name dr new_form
            'jenis'             => $data['jenis'],
            'bentuk'            => $data['bentuk'],
            'warna'             => $data['warna'],
            'harga'             => $data['harga'],
            'kemasan'           => $data['kemasan'],
            'kandungan'         => $data['kandungan'],
        );
        $this->db->set($param);
        $this->db->where('pupuk_id', $data['id']);
        $this->db->update('pupuk');
    }

    public function del($id)
    {
        $this->db->where('pupuk_id', $id);
        $this->db->delete('pupuk');
    }

    //tutorial^^
}
