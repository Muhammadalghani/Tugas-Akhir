<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select(
                    'distributor.distributor_id,
                    distributor.nama_distributor,
                    distributor.alamat,
                    distributor.nama_usaha,
                    distributor.tahun_berdiri,
                    distributor.no_hp');
        $this->db->from('distributor');
        if($id != null) {
            $this->db->where('distributor_id', $id);   
        }
        $query = $this->db->get();
        return $query;
        // $data = "
        //         SELECT
        //             distributor.distributor_id,
        //             distributor.nama_distributor,
        //             distributor.alamat,
        //             distributor.nama_usaha,
        //             distributor.tahun_berdiri,
        //             distributor.no_hp 
        //         FROM
        //             distributor,
        //         if($id != null) {
        //         WHERE   
        //             distributor.distributor_id=$id,}";
        // return $this->db->query($data);
    }

    public function masuk($data)
    {
        $param = array(
            'distributor_id'    => $data['id'],
            'nama_distributor'  => $data['nama'], //depan dr database blkg name dr new_form
            'alamat'            => $data['alamat'],
            'nama_usaha'        => $data['nama_usaha'],
            'tahun_berdiri'     => $data['tahun_berdiri'],
            'no_hp'             => $data['no_hp'],
        );
        $this->db->insert('distributor', $param);
    }


    public function getdesa()
    {
        $query = $this->db->get('desa');
        return $query->result();
    }

    public function edit($data)
    {
        $param = array(
            'distributor_id'    => $data['id'],
            'nama_distributor'  => $data['nama'],//depan dr database blkg name dr new_form
            'alamat'            => $data['alamat'],
            'nama_usaha'        => $data['nama_usaha'],
            'tahun_berdiri'     => $data['tahun_berdiri'],
            'no_hp'             => $data['no_hp'],
        );
        $this->db->set($param);
        $this->db->where('distributor_id', $data['id']);
        $this->db->update('distributor');
    }

    public function del($id)
    {
        $this->db->where('distributor_id', $id);
        $this->db->delete('distributor');
    }

    public function hitungJumlahPoktan()
    {   
    $query = $this->db->get('distributor');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
    }

    //tutorial^^
}
