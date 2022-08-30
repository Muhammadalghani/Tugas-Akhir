<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Alokasi_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select(
                    'alokasi.alokasi_id,
                    pupuk.nama_pupuk,
                    musim.musim,
                    alokasi.jatah');
        $this->db->from('alokasi');
        $this->db->join('pupuk', 'alokasi.pupuk_id = pupuk.pupuk_id');
        $this->db->join('musim', 'alokasi.musim_id = musim.musim_id');
        if($id != null) {
            $this->db->where('alokasi_id', $id);   
        }
        $query = $this->db->get();
        return $query;

		// $data ="SELECT
		// 		alokasi.alokasi_id,
		// 		pupuk.nama_pupuk,
		// 		musim.musim,
  //               alokasi.jatah 
		// FROM
		// 		alokasi
		// 		INNER JOIN pupuk ON alokasi.pupuk_id = pupuk.pupuk_id
		// 		INNER JOIN musim ON alokasi.musim_id = musim.musim_id"; 
  //       return $this->db->query($data);
    }

    public function masuk($data)
    {
        $param = array(
            // 'alokasi_id'    => $data['id'],
            'pupuk_id'  		=> $data['pupuk'],//depan dr database blkg name dr new_form
            'musim_id'          => $data['musim'],
            'jatah'             => $data['jatah'],
        );
        $this->db->insert('alokasi', $param);
    }


    public function getmusim()
    {
        $query = $this->db->get('musim');
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
            // 'alokasi_id'    => $data['id'],
            'pupuk_id'  		=> $data['pupuk'],//depan dr database blkg name dr new_form
            'musim_id'          => $data['musim'],
            'jatah'             => $data['jatah'],
        );
        $this->db->set($param);
        $this->db->where('alokasi_id', $data['id']);
        $this->db->update('alokasi');
    }

    public function del($id)
    {
        $this->db->where('alokasi_id', $id);
        $this->db->delete('alokasi');
    }

    //tutorial^^
}
