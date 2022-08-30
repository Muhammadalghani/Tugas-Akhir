<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masukp_model extends CI_Model
{

    public function get($id = null)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        pupuk_terima.tahun_id,
        pupuk_terima.jumlah_terima,
        bulan.nama_bulan,
        pengecer.id_login,
        pengecer.pengecer_id,
        pengecer.nama_pengecer,
        distributor.distributor_id,
        distributor.nama_distributor,
        kecamatan.kecamatan_id,
        kecamatan.nama_kecamatan,
        pupuk.nama_pupuk
        FROM pupuk_terima
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        GROUP BY pterima_id
        ORDER BY nama_bulan ASC
        ");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
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
                SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
                bulan.nama_bulan,
                pengecer.pengecer_id,
                pengecer.nama_pengecer,
                distributor.distributor_id,
                distributor.nama_distributor,
                kecamatan.kecamatan_id,
                kecamatan.nama_kecamatan,
                pupuk.nama_pupuk
        FROM 
        pupuk_terima
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        WHERE pupuk_terima.bulan_id = $bulan
        GROUP BY pterima_id
        ORDER BY bulan_id ASC
        ");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function get2($id = null)
    {
        $this->db->select('
        pupuk_terima.pterima_id,
        pupuk_terima.tahun_id,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
        bulan.nama_bulan,
        pengecer.pengecer_id,
        pengecer.nama_pengecer,
        distributor.distributor_id,
        distributor.nama_distributor,
        kecamatan.kecamatan_id,
        kecamatan.nama_kecamatan,
        pupuk.nama_pupuk
        ');
        $this->db->from('pupuk_terima');
        $this->db->join('bulan', 'pupuk_terima.bulan_id = bulan.bulan_id');
        $this->db->join('pupuk', 'pupuk_terima.pupuk_id = pupuk.pupuk_id');
        $this->db->join('tahun', 'pupuk_terima.tahun_id = tahun.tahun_id');
        $this->db->join('pengecer', 'pupuk_terima.pengecer_id = pengecer.pengecer_id');
        $this->db->join('kecamatan', 'pupuk_terima.kecamatan_id = kecamatan.kecamatan_id');
        $this->db->join('distributor', 'pupuk_terima.distributor_id = distributor.distributor_id');
        $this->db->order_by('nama_pengecer', 'asc');
        $this->db->group_by('nama_bulan');

        if ($id != null) {
            $this->db->where('pterima_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function masuk($data)
    {
        $param = array(
            'tahun_id'              => $data['tahun_id'],
            'bulan_id'              => $data['bulan_id'],
            'distributor_id'        => $data['distributor'],
            'pengecer_id'           => $data['pengecer'],
            'kecamatan_id'          => $data['kecamatan_id'],
            'jumlahurea_msk'        => $data['jumlahurea_msk'],
            'jumlahsp_msk'        => $data['jumlahsp_msk'],
            'jumlahza_msk'        => $data['jumlahza_msk'],
            'jumlahphonska_msk'        => $data['jumlahphonska_msk'],
            'jumlahpetroganik_msk'        => $data['jumlahpetroganik_msk'],
        );
        $this->db->insert('pupuk_masuk', $param);

        $param_urea = array(
            'tahun_id'              => $data['tahun_id'],
            'bulan_id'              => $data['bulan_id'],
            'distributor_id'        => $data['distributor'],
            'pengecer_id'           => $data['pengecer'],
            'kecamatan_id'          => $data['kecamatan_id'],
            'pupuk_id'              => 1,
            'jumlah_terima'        => $data['jumlahurea_msk'],
        );
        $this->db->insert('pupuk_terima', $param_urea);

        $param_sp36 = array(
            'tahun_id'              => $data['tahun_id'],
            'bulan_id'              => $data['bulan_id'],
            'distributor_id'        => $data['distributor'],
            'pengecer_id'           => $data['pengecer'],
            'kecamatan_id'          => $data['kecamatan_id'],
            'pupuk_id'              => 2,
            'jumlah_terima'        => $data['jumlahsp_msk'],
        );
        $this->db->insert('pupuk_terima', $param_sp36);
        
        $param_za = array(
            'tahun_id'              => $data['tahun_id'],
            'bulan_id'              => $data['bulan_id'],
            'distributor_id'        => $data['distributor'],
            'pengecer_id'           => $data['pengecer'],
            'kecamatan_id'          => $data['kecamatan_id'],
            'pupuk_id'              => 3,
            'jumlah_terima'        => $data['jumlahza_msk'],
        );
        $this->db->insert('pupuk_terima', $param_za);
        
        $param_phonska = array(
            'tahun_id'              => $data['tahun_id'],
            'bulan_id'              => $data['bulan_id'],
            'distributor_id'        => $data['distributor'],
            'pengecer_id'           => $data['pengecer'],
            'kecamatan_id'          => $data['kecamatan_id'],
            'pupuk_id'              => 4,
            'jumlah_terima'        => $data['jumlahphonska_msk'],
        );
        $this->db->insert('pupuk_terima', $param_phonska);

        $param_petroganik = array(
            'tahun_id'              => $data['tahun_id'],
            'bulan_id'              => $data['bulan_id'],
            'distributor_id'        => $data['distributor'],
            'pengecer_id'           => $data['pengecer'],
            'kecamatan_id'          => $data['kecamatan_id'],
            'pupuk_id'              => 5,
            'jumlah_terima'        => $data['jumlahpetroganik_msk'],
        );
        $this->db->insert('pupuk_terima', $param_petroganik);
    }

    public function edit($data)
    {
        $param = array(
            'pterima_id'         => $data['id'],
            'tahun_id'          => $data['tahun_id'],
            'bulan_id'          => $data['bulan_id'],
            'distributor_id'    => $data['distributor'],
            'pengecer_id'       => $data['pengecer'],
            'kecamatan_id'      => $data['kecamatan_id'],
            'jumlah_terima'        => $data['jumlah_terima'],
        );
        $this->db->set($param);
        $this->db->where('pterima_id', $data['id']);
        $this->db->update('pupuk_terima');

        // $param_urea = array(
        //     'pterima_id'            => $data['id'],
        //     'tahun_id'              => $data['tahun_id'],
        //     'bulan_id'              => $data['bulan_id'],
        //     'distributor_id'        => $data['distributor'],
        //     'pengecer_id'           => $data['pengecer'],
        //     'kecamatan_id'          => $data['kecamatan_id'],
        //     'pupuk_id'              => 1,
        //     'jumlah_terima'        => $data['jumlahurea_msk'],
        // );
        // $this->db->set($param_urea);
        // $this->db->where('pterima_id', $data['id']);
        // $this->db->where('bulan', $data['bulan_id']);
        // $this->db->where('pengecer', $data['pengecer']);
        // // $this->db->where('pupuk', 1);
        // $this->db->update('pupuk_terima');
        
        // $param_sp36 = array(
        //     'pterima_id'            => $data['id'],
        //     'tahun_id'              => $data['tahun_id'],
        //     'bulan_id'              => $data['bulan_id'],
        //     'distributor_id'        => $data['distributor'],
        //     'pengecer_id'           => $data['pengecer'],
        //     'kecamatan_id'          => $data['kecamatan_id'],
        //     'pupuk_id'              => 2,
        //     'jumlah_terima'        => $data['jumlahsp_msk'],
        // );
        // $this->db->set($param_sp36);
        // $this->db->where('pterima_id', $data['id']);
        // $this->db->where('bulan', $data['bulan_id']);
        // $this->db->where('pengecer', $data['pengecer']);
        // // $this->db->where('pupuk', 2);
        // $this->db->update('pupuk_terima');
        
        // $param_za = array(
        //     'pterima_id'            => $data['id'],
        //     'tahun_id'              => $data['tahun_id'],
        //     'bulan_id'              => $data['bulan_id'],
        //     'distributor_id'        => $data['distributor'],
        //     'pengecer_id'           => $data['pengecer'],
        //     'kecamatan_id'          => $data['kecamatan_id'],
        //     'pupuk_id'              => 3,
        //     'jumlah_terima'        => $data['jumlahza_msk'],
        // );
        // $this->db->set($param_za);
        // $this->db->where('pterima_id', $data['id']);
        // $this->db->where('bulan', $data['bulan_id']);
        // $this->db->where('pengecer', $data['pengecer']);
        // // $this->db->where('pupuk', 3);
        // $this->db->update('pupuk_terima');
        
        // $param_phonska = array(
        //     'pterima_id'            => $data['id'],
        //     'tahun_id'              => $data['tahun_id'],
        //     'bulan_id'              => $data['bulan_id'],
        //     'distributor_id'        => $data['distributor'],
        //     'pengecer_id'           => $data['pengecer'],
        //     'kecamatan_id'          => $data['kecamatan_id'],
        //     'pupuk_id'              => 4,
        //     'jumlah_terima'        => $data['jumlahphonska_msk'],
        // );
        // $this->db->set($param_phonska);
        // $this->db->where('pterima_id', $data['id']);
        // $this->db->where('bulan', $data['bulan_id']);
        // $this->db->where('pengecer', $data['pengecer']);
        // // $this->db->where('pupuk', 4);
        // $this->db->update('pupuk_terima');
        
        // $param_petroganik = array(
        //     'pterima_id'            => $data['id'],
        //     'tahun_id'              => $data['tahun_id'],
        //     'bulan_id'              => $data['bulan_id'],
        //     'distributor_id'        => $data['distributor'],
        //     'pengecer_id'           => $data['pengecer'],
        //     'kecamatan_id'          => $data['kecamatan_id'],
        //     'pupuk_id'              => 5,
        //     'jumlah_terima'        => $data['jumlahpetroganik_msk'],
        // );
        // $this->db->set($param_petroganik);
        // $this->db->where('pterima_id', $data['id']);
        // $this->db->where('bulan', $data['bulan_id']);
        // $this->db->where('pengecer', $data['pengecer']);
        // // $this->db->where('pupuk', 5);
        // $this->db->update('pupuk_terima');
    }

    public function del($id)
    {
        $this->db->where('pterima_id', $id);
        $this->db->delete('pupuk_terima');
        $this->db->where('pterima_id', $id);
        $this->db->delete('pupuk_terima');
    }

    public function get_tahun()
    {
        $query = $this->db->order_by('nama_tahun', 'asc');
        $query = $this->db->get('tahun');
        return $query->result();
    }

    public function get_bulan()
    {
        $query = $this->db->order_by('bulan_id', 'asc');
        $query = $this->db->get('bulan');
        return $query->result();
    }

    public function getpupuk()
    {
        $query = $this->db->order_by('pupuk_id', 'asc');
        $query = $this->db->get('pupuk');
        return $query->result();
    }

    public function getdistributor()
    {
        $query = $this->db->order_by('nama_distributor', 'asc');
        $query = $this->db->get('distributor');
        return $query->result();
    }

    public function getpengecer()
    {
        $query = $this->db->order_by('nama_pengecer', 'asc');
        $query = $this->db->get('pengecer');
        return $query->result();
    }

    public function getkecamatan()
    {
        $query = $this->db->order_by('nama_kecamatan', 'asc');
        $query = $this->db->get('kecamatan');
        return $query->result();
    }

    public function hitungJumlahDataMasuk()
    {
        $query = $this->db->get('pupuk_terima');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
