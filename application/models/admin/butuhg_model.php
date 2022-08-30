 <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Butuhg_model extends CI_Model
{
    public function get($id=null){
    $query = $this->db->query("
    SELECT      butuh_poktan.butuhk_id,
                butuh_poktan.tahun_id,
                poktan.nama_poktan,
                gapoktan.nama_gapoktan,
                desa.nama_desa,
                kecamatan.nama_kecamatan,
                SUM(butuh_poktan.luas_tanam) AS luas_tanam,
                SUM(butuh_poktan.luas_tanam2) AS luas_tanam2,
                SUM(butuh_poktan.luas_tanam3) AS luas_tanam3,
                SUM(butuh_poktan.urea1) AS urea1,
                SUM(butuh_poktan.urea2) AS urea2,
                SUM(butuh_poktan.urea3) AS urea3,
                SUM(butuh_poktan.sp1) AS sp1,
                SUM(butuh_poktan.sp2) AS sp2,
                SUM(butuh_poktan.sp3) AS sp3,
                SUM(butuh_poktan.za1) AS za1,
                SUM(butuh_poktan.za3) AS za2,
                SUM(butuh_poktan.za2) AS za3,
                SUM(butuh_poktan.npk1) AS npk1,
                SUM(butuh_poktan.npk2) AS npk2,
                SUM(butuh_poktan.npk3) AS npk3,
                SUM(butuh_poktan.organik1) AS organik1,
                SUM(butuh_poktan.organik2) AS organik2,
                SUM(butuh_poktan.organik3) AS organik3 
    FROM butuh_poktan
    INNER JOIN poktan ON butuh_poktan.poktan_id = poktan.poktan_id
    INNER JOIN gapoktan ON butuh_poktan.gapoktan_id = gapoktan.gapoktan_id
    INNER JOIN desa ON poktan.desa_id = desa.desa_id 
    INNER JOIN kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id 
    GROUP BY nama_gapoktan
    ORDER BY nama_gapoktan asc");

/*        if($id != null) {
            $this->db->where('butuhk_id', $id);   
    }
    $query = $this->db->get();
    return $query;*/

      if($query->num_rows() > 0){
        foreach($query->result() as $data){
            $hasil[] = $data;
        }  
        return $hasil;
      }
    }

    public function by_tahun($tahun){
    $query = $this->db->query("
    SELECT      butuh_poktan.butuhk_id,
                butuh_poktan.tahun_id,
                poktan.nama_poktan,
                gapoktan.nama_gapoktan,
                desa.nama_desa,
                kecamatan.nama_kecamatan,
                SUM(butuh_poktan.luas_tanam) AS luas_tanam,
                SUM(butuh_poktan.luas_tanam2) AS luas_tanam2,
                SUM(butuh_poktan.luas_tanam3) AS luas_tanam3,
                SUM(butuh_poktan.urea1) AS urea1,
                SUM(butuh_poktan.urea2) AS urea2,
                SUM(butuh_poktan.urea3) AS urea3,
                SUM(butuh_poktan.sp1) AS sp1,
                SUM(butuh_poktan.sp2) AS sp2,
                SUM(butuh_poktan.sp3) AS sp3,
                SUM(butuh_poktan.za1) AS za1,
                SUM(butuh_poktan.za3) AS za2,
                SUM(butuh_poktan.za2) AS za3,
                SUM(butuh_poktan.npk1) AS npk1,
                SUM(butuh_poktan.npk2) AS npk2,
                SUM(butuh_poktan.npk3) AS npk3,
                SUM(butuh_poktan.organik1) AS organik1,
                SUM(butuh_poktan.organik2) AS organik2,
                SUM(butuh_poktan.organik3) AS organik3 
    FROM butuh_poktan
    INNER JOIN poktan ON butuh_poktan.poktan_id = poktan.poktan_id
    INNER JOIN gapoktan ON butuh_poktan.gapoktan_id = gapoktan.gapoktan_id
    INNER JOIN desa ON poktan.desa_id = desa.desa_id 
    INNER JOIN kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id
    WHERE butuh_poktan.tahun_id= $tahun
    GROUP BY nama_gapoktan
    ORDER BY nama_gapoktan asc");

/*        if($id != null) {
            $this->db->where('butuhk_id', $id);   
    }
    $query = $this->db->get();
    return $query;*/

      if($query->num_rows() > 0){
        foreach($query->result() as $data){
            $hasil[] = $data;
        }  
        return $hasil;
      }
    }
    // $data = "
    //     SELECT
    //         butuh_poktan.butuhd_id,
    //         poktan.nama_poktan,
    //         desa.nama_desa,
    //         musim_tanam.musim,
    //         pupuk.nama_pupuk,
    //         butuh_poktan.jumlah 
    //     FROM
    //         butuh_poktan
    //         INNER JOIN poktan ON butuh_poktan.poktan_id = poktan.poktan_id 
    //         AND butuh_poktan.desa_id = poktan.desa_id
    //         INNER JOIN musim_tanam ON butuh_poktan.musim_tanam = musim_tanam.musim_id
    //         INNER JOIN pupuk ON butuh_poktan.pupuk_id = pupuk.pupuk_id
    //         INNER JOIN desa ON poktan.desa_id = desa.desa_id ";
    //     return $this->db->query($data);
    //tutorial^^
    public function get_tahun()
    {
    $query = $this->db->order_by('nama_tahun', 'asc');
    $query = $this->db->get('tahun');
    return $query->result();
    }
}