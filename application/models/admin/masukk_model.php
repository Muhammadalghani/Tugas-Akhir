<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Masukk_model extends CI_Model
{
    public function get($id=null)
    {
        $query = $this->db->query("
        SELECT
                pupuk_terima.pterima_id,
                pupuk_terima.tahun_id,
                pupuk_terima.jumlah_terima,
                bulan.nama_bulan,
                pengecer.pengecer_id,
                pengecer.nama_pengecer,
                distributor.distributor_id,
                distributor.nama_distributor,
                kecamatan.kecamatan_id,
                kecamatan.nama_kecamatan,
                pupuk.nama_pupuk
        FROM pupuk_terima
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        -- GROUP BY nama_kecamatan
        ORDER BY nama_bulan ASC
        ");

        if($query->num_rows() > 0 ){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function by_bulan($bulan)
    {
        $query = $this->db->query("
        SELECT 
                pupuk_terima.pterima_id,
                pupuk_terima.tahun_id,
                pupuk_terima.bulan_id,
                pupuk_terima.jumlah_terima,
                bulan.nama_bulan,
                pengecer.pengecer_id,
                pengecer.nama_pengecer,
                distributor.distributor_id,
                distributor.nama_distributor,
                kecamatan.kecamatan_id,
                kecamatan.nama_kecamatan,
                pupuk.pupuk_id,
                pupuk.nama_pupuk
        FROM 
        pupuk_terima
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        WHERE pupuk_terima.bulan_id = $bulan
        -- GROUP BY nama_kecamatan
        ORDER BY nama_kecamatan ASC
        ");

        if($query->num_rows() > 0 ){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get_bulan()
    {
        $query = $this->db->order_by('bulan_id', 'asc');
        $query = $this->db->get('bulan');
        return $query->result();
    }






}