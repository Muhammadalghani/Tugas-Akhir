 <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_model extends CI_Model
{
    public function get($id=null)
    {
        $this->db->select(
                    'stok_dis.stokd_id,
                    distributor.nama_distributor,
                    pupuk.nama_pupuk,
                    stok_dis.jumlah');
        $this->db->from('stok_dis');
        $this->db->join('distributor', 'stok_dis.distributor_id = distributor.distributor_id');
        $this->db->join('pupuk', 'stok_dis.pupuk_id = pupuk.pupuk_id');
        if($id != null) {
            $this->db->where('stokd_id', $id);   
        }
        $query = $this->db->get();
        return $query;

        // $data = "SELECT
        //         stok_dis.stokd_id,
        //         distributor.nama_distributor,
        //         pupuk.nama_pupuk,
        //         stok_dis.jumlah 
        //         FROM
        //         stok_dis
        //         INNER JOIN distributor ON stok_dis.distributor_id = distributor.distributor_id
        //         INNER JOIN pupuk ON stok_dis.pupuk_id = pupuk.pupuk_id";
        // return $this->db->query($data);
    }

    public function masuk($data)
    {
        $param = array(
            // 'distributor_id'    => $data['id'],
            'distributor_id'  => $data['distributor'],//depan dr database blkg name dr new_form
            'pupuk_id'        => $data['pupuk'],
            'jumlah'          => $data['jumlah'],
        );
        $this->db->insert('stok_dis', $param);
    }
    public function getdistributor()
    {
        $query = $this->db->get('distributor');
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
            'distributor_id'  => $data['distributor'],//depan dr database blkg name dr new_form
            'pupuk_id'        => $data['pupuk'],
            'jumlah'          => $data['jumlah'],
        );
        $this->db->set($param);
        $this->db->where('stokd_id', $data['id']);
        $this->db->update('stok_dis');
    }

    public function del($id)
    {
        $this->db->where('stokd_id', $id);
        $this->db->delete('stok_dis');
    }

    //tutorial^^
}