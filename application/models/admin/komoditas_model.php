<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditas_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select('*');
        $this->db->from('komoditas');
        if ($id != null) {
            $this->db->where('komoditas_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function masuk($data)
    {
        $param = array(
            // 'komoditas_id'    => $data['id'],
            'nama'  		    => $data['nama'],//depan dr database blkg name dr new_form
        );
        $this->db->insert('komoditas', $param);
    }

    public function edit($data)
    {
        $param = array(
            // 'komoditas_id'    => $data['id'],
            'nama'  		    => $data['nama'],//depan dr database blkg name dr new_form
            
        );
        $this->db->set($param);
        $this->db->where('komoditas_id', $data['id']);
        $this->db->update('komoditas');
    }

    public function del($id)
    {
        $this->db->where('komoditas_id', $id);
        $this->db->delete('komoditas');
    }

    //tutorial^^
}
