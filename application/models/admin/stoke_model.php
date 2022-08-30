<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Stoke_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select(
                    'stok_ecer.stoke_id,
                    pengecer.nama_pengecer,
                    pupuk.nama_pupuk,
                    stok_ecer.jumlah');
        $this->db->from('stok_ecer');
        $this->db->join('pengecer', 'stok_ecer.pengecer_id = pengecer.pengecer_id');
        $this->db->join('pupuk', 'stok_ecer.pupuk_id = pupuk.pupuk_id');
        if($id != null) {
            $this->db->where('stoke_id', $id);   
        }
        $query = $this->db->get();
        return $query;

        

         
    // $data = "SELECT
    //             stok_ecer.stoke_id,
    //             pengecer.nama_pengecer,
    //             pupuk.nama_pupuk,
    //             stok_ecer.jumlah 
    //         FROM
    //             stok_ecer
    //             INNER JOIN pengecer ON stok_ecer.pengecer_id = pengecer.pengecer_id
    //             INNER JOIN pupuk ON stok_ecer.pupuk_id = pupuk.pupuk_id ";
    //     return $this->db->query($data);
    }

    public function masuk($data)
    {
        $param = array(
            // 'distributor_id'    => $data['id'],
            'pengecer_id'     => $data['pengecer'],//depan dr database blkg name dr new_form
            'pupuk_id'        => $data['pupuk'],
            'jumlah'          => $data['jumlah'],
        );
        $this->db->insert('stok_ecer', $param);
    }
    public function getpengecer()
    {
        $query = $this->db->get('pengecer');
        return $query->result();
    }

    public function getpupuk()
    {
        $query = $this->db->get('pupuk');
        return $query->result();
    }

    public function edit($data)
    {
        $param = array(
            // 'stok_id'    => $data['id'],
            'pengecer_id'     => $data['pengecer'],//depan dr database blkg name dr new_form
            'pupuk_id'        => $data['pupuk'],
            'jumlah'          => $data['jumlah'],
        );
        $this->db->set($param);
        $this->db->where('stoke_id', $data['id']);
        $this->db->update('stok_ecer');
    }

    public function del($id)
    {
        $this->db->where('stoke_id', $id);
        $this->db->delete('stok_ecer');
    }

    //tutorial^^
}