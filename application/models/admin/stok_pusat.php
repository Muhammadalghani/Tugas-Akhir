 <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_pusat extends CI_Model
{
    public function get($id=null)
    { 
        $this->db->select(
                    'stok_pusat.total_id,
                    pupuk.nama_pupuk,
                    stok_pusat.jumlah');
        $this->db->from('stok_pusat');
        $this->db->join('pupuk', 'stok_pusat.pupuk_id = pupuk.pupuk_id');
        if($id != null) {
            $this->db->where('total_id', $id);   
        }
        $query = $this->db->get();
        return $query;

        

    //     $data = "SELECT
				// 	stok_pusat.total_id,
				// 	pupuk.nama_pupuk,
				// 	stok_pusat.jumlah 
				// FROM
				// 	stok_pusat
				// 	INNER JOIN pupuk ON stok_pusat.pupuk_id = pupuk.pupuk_id";
    //     return $this->db->query($data);
    }

    public function masuk($data)
    {
        $param = array(
            // 'distributor_id'    => $data['id'],
            'pupuk_id'  	      => $data['nama_pupuk'],//depan dr database blkg name dr new_form
            'jumlah'          => $data['jumlah'],
        );
        $this->db->insert('stok_pusat', $param);
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
            'pupuk_id'            => $data['nama_pupuk'],//depan dr database blkg name dr new_form
            'jumlah'          => $data['jumlah'],
        );
        $this->db->set($param);
        $this->db->where('total_id', $data['id']);
        $this->db->update('stok_pusat');
    }

    public function del($id)
    {
        $this->db->where('total_id', $id);
        $this->db->delete('stok_pusat');
    }

    //tutorial^^
}