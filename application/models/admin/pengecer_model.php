<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengecer_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select(
                    'pengecer.pengecer_id,
                    pengecer.nama_pengecer,
                    kecamatan.nama_kecamatan,
                    distributor.nama_distributor,
                    pengecer.pemilik_kios,
                    pengecer.alamat,
                    pengecer.no_hp');
        $this->db->from('pengecer');
        $this->db->join('kecamatan', 'pengecer.kecamatan_id = kecamatan.kecamatan_id');
        $this->db->join('distributor', 'pengecer.distributor_id = distributor.distributor_id');
        if($id != null) {
            $this->db->where('pengecer_id', $id);   
        }
        $query = $this->db->get();
        return $query;


        
        // $data = "
        //     SELECT
        //         pengecer.pengecer_id,
        //         pengecer.nama_pengecer,
        //         kecamatan.nama_kecamatan,
        //         distributor.nama_distributor,
        //         pengecer.nama_usaha,
        //         pengecer.tahun_berdiri,
        //         pengecer.no_hp 
        //     FROM
        //         pengecer
        //         INNER JOIN kecamatan ON pengecer.kecamatan_id = kecamatan.kecamatan_id
        //         INNER JOIN distributor ON pengecer.distributor_id = distributor.distributor_id 
        //     ORDER BY
        //         kecamatan.nama_kecamatan ASC";
        // return $this->db->query($data);
    }

    public function masuk($data)
    {
        $param = array(
            // 'pengecer_id'    => $data['id'],
            'nama_pengecer'     => $data['nama'],//depan dr database blkg name dr new_form
            'kecamatan_id'      => $data['kecamatan_id'],
            'distributor_id'    => $data['distributor'],
            'pemilik_kios'      => $data['pemilik_kios'],
            'alamat'            => $data['alamat'],
            'no_hp'             => $data['no_hp'],
        );
        $this->db->insert('pengecer', $param);
    }

    public function edit($data)
    {
        $param = array(
            // 'pengecer_id'    => $data['id'],
            'nama_pengecer'  => $data['nama'],//depan dr database blkg name dr new_form
            'kecamatan_id'      => $data['kecamatan_id'],
            'distributor_id'    => $data['distributor'],
            'pemilik_kios'      => $data['pemilik_kios'],
            'alamat'            => $data['alamat'],
            'no_hp'             => $data['no_hp'],
        );
        $this->db->set($param);
        $this->db->where('pengecer_id', $data['id']);
        $this->db->update('pengecer');
    }

    public function del($id)
    {
        $this->db->where('pengecer_id', $id);
        $this->db->delete('pengecer');
    }


    //tutorial^^

    public function getkecamatan()
    {
        $query = $this->db->get('kecamatan');
        // $query = $this->db->order_by('nama_kecamatan', 'asc');
        return $query->result();
    }

    public function getdistributor()
    {
        $query = $this->db->get('distributor');
        return $query->result();
    }

    public function hitungJumlahPengecer()
    {   
    $query = $this->db->get('pengecer');
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
