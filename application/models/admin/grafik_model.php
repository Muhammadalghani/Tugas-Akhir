 <?php    
class Grafik_model extends CI_Model{
    public function report(){
        $query = $this->db->query("
        	SELECT 		butuh_poktan.butuhk_id,
                        butuh_poktan.tahun_id,
                        tahun.nama_tahun,
                        poktan.nama_poktan,
                        gapoktan.nama_gapoktan,
                        desa.nama_desa,
                        kecamatan.nama_kecamatan,
                        SUM(butuh_poktan.luas_tanam) AS luas_tanam,
                        SUM(butuh_poktan.luas_tanam2) AS luas_tanam2,
                        SUM(butuh_poktan.luas_tanam3) AS luas_tanam3,
                        butuh_poktan.urea1,
                        butuh_poktan.urea2,
                        butuh_poktan.urea3,
                        butuh_poktan.sp1,
                        butuh_poktan.sp2,
                        butuh_poktan.sp3,
                        butuh_poktan.za1,
                        butuh_poktan.za3,
                        butuh_poktan.za2,
                        butuh_poktan.npk1,
                        butuh_poktan.npk2,
                        butuh_poktan.npk3,
                        butuh_poktan.organik1,
                        butuh_poktan.organik2,
                        butuh_poktan.organik3 
        	FROM butuh_poktan
            INNER JOIN poktan ON butuh_poktan.poktan_id = poktan.poktan_id
            INNER JOIN gapoktan ON butuh_poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN desa ON poktan.desa_id = desa.desa_id 
            INNER JOIN kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id 
            INNER JOIN tahun ON butuh_poktan.tahun_id = tahun.tahun_id
            WHERE butuh_poktan.tahun_id = 3
            GROUP BY nama_kecamatan
            ORDER BY luas_tanam DESC");
            if($query->num_rows() > 0){
                foreach($query->result() as $data){
                    $hasil[] = $data;
                }  
                return $hasil;
            }
            // else {
            //     return false; 
            // }
    }

    public function by_tahun($tahun){
        $query = $this->db->query("
            SELECT      butuh_poktan.butuhk_id,
                        butuh_poktan.tahun_id,
                        tahun.nama_tahun,
                        poktan.nama_poktan,
                        gapoktan.nama_gapoktan,
                        desa.nama_desa,
                        kecamatan.nama_kecamatan,
                        SUM(butuh_poktan.luas_tanam) AS luas_tanam,
                        SUM(butuh_poktan.luas_tanam2) AS luas_tanam2,
                        SUM(butuh_poktan.luas_tanam3) AS luas_tanam3,
                        butuh_poktan.urea1,
                        butuh_poktan.urea2,
                        butuh_poktan.urea3,
                        butuh_poktan.sp1,
                        butuh_poktan.sp2,
                        butuh_poktan.sp3,
                        butuh_poktan.za1,
                        butuh_poktan.za3,
                        butuh_poktan.za2,
                        butuh_poktan.npk1,
                        butuh_poktan.npk2,
                        butuh_poktan.npk3,
                        butuh_poktan.organik1,
                        butuh_poktan.organik2,
                        butuh_poktan.organik3 
            FROM butuh_poktan
            INNER JOIN poktan ON butuh_poktan.poktan_id = poktan.poktan_id
            INNER JOIN gapoktan ON butuh_poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN desa ON poktan.desa_id = desa.desa_id 
            INNER JOIN kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id 
            INNER JOIN tahun ON butuh_poktan.tahun_id = tahun.tahun_id
            WHERE butuh_poktan.tahun_id = $tahun
            GROUP BY nama_kecamatan
            ORDER BY luas_tanam DESC");
            if($query->num_rows() > 0){ 
                foreach($query->result() as $data){
                    $hasil[] = $data;
                }  
                return $hasil;
            }
            else {
                return false;
            }
    }


    public function get_tahun()
    {
            $query = $this->db->order_by('nama_tahun', 'asc');
            $query = $this->db->get('tahun');
            return $query->result();
    }    
}