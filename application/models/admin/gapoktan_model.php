<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Gapoktan_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select(
                        'gapoktan.gapoktan_id,
                        gapoktan.nama_gapoktan,
                        gapoktan.nama_ketua,
                        desa.nama_desa,
                        kecamatan.nama_kecamatan,
                        gapoktan.tanggal_pengukuhan,
                        gapoktan.no_reg,
                        gapoktan.jumlah_poktan
                        ');
        $this->db->from('gapoktan');
        $this->db->join('desa', 'gapoktan.desa_id = desa.desa_id');
        $this->db->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatan_id');
        $this->db->order_by('kecamatan.nama_kecamatan', 'ASC');
        if($id != null) {
            $this->db->where('gapoktan_id', $id);   
        }
        $query = $this->db->get();
        return $query;
    }
        // $data = "
        // SELECT
        //     gapoktan.gapoktan_id,
        //     gapoktan.nama_gapoktan,
        //     gapoktan.nama_ketua,
        //     desa.nama_desa,
        //     kecamatan.nama_kecamatan,
        //     gapoktan.luas_lahan,
        //     gapoktan.no_hp 
        // FROM
        //     gapoktan
        //     INNER JOIN desa ON gapoktan.desa_id = desa.desa_id
        //     INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id 
        //     AND desa.kecamatan_id = kecamatan.kecamatan_id 
        // ORDER BY
        //     desa.nama_desa ASC ";
        // return $this->db->query($data);

    public function masuk($data)
    {
        $param = array(
            // 'gapoktan_id'    => $data['id'],
            'nama_gapoktan'  	=> $data['nama'],//depan dr database blkg name dr new_form
            'nama_ketua'  		=> $data['namak'],
            'desa_id'           => $data['nama_desa'], 
            'kecamatan_id'      => $data['nama_kecamatan'],
            'tanggal_pengukuhan'=> $data['tanggal_pengukuhan'],
            'no_reg'            => $data['no_reg'],
            'jumlah_poktan'     => $data['jumlah_poktan'],
        );
        $this->db->insert('gapoktan', $param);
    }

    public function edit($data)
    {
        $param = array(
            'gapoktan_id'       => $data['id'],
            'nama_gapoktan'  	=> $data['nama'],//depan dr database blkg name dr new_form
            'nama_ketua'  		=> $data['namak'],
            'desa_id'           => $data['nama_desa'],
            'kecamatan_id'      => $data['nama_kecamatan'],
            'tanggal_pengukuhan'=> $data['tanggal_pengukuhan'],
            'no_reg'            => $data['no_reg'],
            'jumlah_poktan'     => $data['jumlah_poktan'],
        );
        $this->db->set($param);
        $this->db->where('gapoktan_id', $data['id']);
        $this->db->update('gapoktan');
    }

    public function del($id)
    {
        $this->db->where('gapoktan_id', $id);
        $this->db->delete('gapoktan');
    }

    //tutorial^^

    public function getdesa()
    {
        // $query = $this->db->get('desa');
        // // $query = $this->db->order_by('nama_desa', 'asc');
        // return $query->result();

        // $this->db->from($this->desa);
        // $this->db->order_by("nama_desa", "asc");
        // $query = $this->db->get(); 
        // return $query->result();

        $this->db->select('*');
        $this->db->from('desa');
        $this->db->order_by('nama_desa', 'ASC');
        return $this->db->get()->result();

    }

    public function getkecamatan()
    {
        // $query = $this->db->get('kecamatan');
        // // $query = $this->db->order_by('nama_kecamatan', 'asc');
        // return $query->result();

        // $this->db->from($this->kecamatan);
        // $this->db->order_by("nama_kecamatan", "asc");
        // $query = $this->db->get(); 
        // return $query->result();

        $this->db->select('*');
        $this->db->from("kecamatan");
        $this->db->order_by("nama_kecamatan", "ASC");
        return $this->db->get()->result();
    }

    public function hitungJumlahGapoktan()
    {   
    $query = $this->db->get('gapoktan');
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
