<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Poktan_model extends CI_Model
{
    public function get($id=null)
    { 
        $this->db->select(
                        'poktan.poktan_id,
                        poktan.nama_poktan,
                        poktan.nama_ketua,
                        gapoktan.nama_gapoktan,
                        desa.nama_desa,
                        kecamatan.nama_kecamatan,
                        poktan.sk,
                        poktan.komoditas
                        '); //coba cari cara untuk menghitung jumlah rows
        $this->db->from('poktan');
        $this->db->join('desa', 'poktan.desa_id = desa.desa_id');
        $this->db->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatan_id ');
        $this->db->join('gapoktan', 'poktan.gapoktan_id = gapoktan.gapoktan_id ');
        // $this->db->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatan_id');
        $this->db->order_by('kecamatan.nama_kecamatan', 'ASC');
        if($id != null) {
            $this->db->where('poktan_id', $id);   
        }
        $query = $this->db->get();
        return $query;
      
        // $data = "
        // SELECT
        //     poktan.poktan_id,
        //     poktan.nama_poktan,
        //     poktan.nama_ketua,
        //     desa.nama_desa,
        //     kecamatan.nama_kecamatan,
        //     poktan.luas_lahan,
        //     poktan.no_hp 
        // FROM
        //     poktan
        //     INNER JOIN desa ON poktan.desa_id = desa.desa_id
        //     INNER JOIN kecamatan ON poktan.kecamatan_id = kecamatan.kecamatan_id 
        //     AND desa.kecamatan_id = kecamatan.kecamatan_id 
        // ORDER BY
        //     desa.nama_desa ASC ";
        // return $this->db->query($data);

    }

    public function masuk($data)
    {
        $param = array(
            // 'poktan_id'    => $data['id'],
            'nama_poktan'  		=> $data['nama'],//depan dr database blkg name dr new_form
            'nama_ketua'  		=> $data['namak'],
            'alamat'            => $data['alamat'],
            'luas_lahan'     	=> $data['luas_lahan'],
            'no_hp'             => $data['no_hp'],
        );
        $this->db->insert('poktan', $param);
    }

    public function edit($data)
    {
        $param = array(
            // 'poktan_id'    => $data['id'],
            'nama_poktan'  		=> $data['nama'],//depan dr database blkg name dr new_form
            'nama_ketua'  		=> $data['namak'],
            'alamat'            => $data['alamat'],
            'luas_lahan'     	=> $data['luas_lahan'],
            'no_hp'             => $data['no_hp'],
        );
        $this->db->set($param);
        $this->db->where('poktan_id', $data['id']);
        $this->db->update('poktan');
    }

    public function del($id)
    {
        $this->db->where('poktan_id', $id);
        $this->db->delete('poktan');
    }
 
    //tutorial^^

    public function hitungJumlahPoktan()
    {   
    $query = $this->db->get('poktan');
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

