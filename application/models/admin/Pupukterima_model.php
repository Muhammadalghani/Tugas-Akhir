<?php 
class Pupukterima_model extends CI_Model
{
    public function report()
    {
        $query = $this->db->query("
            SELECT
                    pupuk_terima.pterima_id,
                    pupuk_terima.pengecer_id,
                    pupuk_terima.kecamatan_id,
                    pupuk_terima.bulan_id,
                    pengecer.nama_pengecer,
                    SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
                    bulan.nama_bulan,
                    pupuk.nama_pupuk,
                    tahun.nama_tahun,
                    kecamatan.nama_kecamatan,
                    distributor.nama_distributor
                    FROM
                    pupuk_terima
                    INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
                    INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
                    INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
                    INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
                    INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
                    INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
                    GROUP BY nama_pupuk
                    ORDER BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function geo()
    {
        $query = $this->db->query("
            SELECT
                    pupuk_terima.pterima_id,
                    pupuk_terima.pengecer_id,
                    pupuk_terima.kecamatan_id,
                    pupuk_terima.bulan_id,
                    pengecer.nama_pengecer,
                    SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
                    bulan.nama_bulan,
                    pupuk.nama_pupuk,
                    tahun.nama_tahun,
                    kecamatan.nama_kecamatan,
                    kecamatan.geojson,
                    distributor.nama_distributor
                    FROM
                    pupuk_terima
                    INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
                    INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
                    INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
                    INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
                    INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
                    INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
                    GROUP BY kecamatan.geojson
        ");
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function urea()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 1
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0)
        {
        foreach($query->result() as $dataurea){
        $hasil[] = $dataurea;
        }
        return $hasil;
        }
    }

    public function sp36()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 2
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datasp36){
            $hasil[] = $datasp36;
        }
        return $hasil;
        }
    }

    public function za()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 3
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataza){
            $hasil[] = $dataza;
        }
        return $hasil;
        }
    }

    public function phonska()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 4
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataphonska){
            $hasil[] = $dataphonska;
        }
        return $hasil;
        }
    }

    public function petroganik()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 5
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datapetroganik){
            $hasil[] = $datapetroganik;
        }
        return $hasil;
        }
    }
    
    public function urea_total()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 1
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0)
        {
        foreach($query->result() as $dataurea){
        $hasil[] = $dataurea;
        }
        return $hasil;
        }
    }

    public function sp36_total()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 2
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datasp36){
            $hasil[] = $datasp36;
        }
        return $hasil;
        }
    }

    public function za_total()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 3
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataza){
            $hasil[] = $dataza;
        }
        return $hasil;
        }
    }

    public function phonska_total()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 4
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataphonska){
            $hasil[] = $dataphonska;
        }
        return $hasil;
        }
    }

    public function petroganik_total()
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 5
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datapetroganik){
            $hasil[] = $datapetroganik;
        }
        return $hasil;
        }
    }

    public function by_tahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk
        ORDER BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
            $hasil[] = $data;
        }
        return $hasil;
        }
    }

    public function geo_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
                    pupuk_terima.pterima_id,
                    pupuk_terima.pengecer_id,
                    pupuk_terima.kecamatan_id,
                    pupuk_terima.bulan_id,
                    pengecer.nama_pengecer,
                    SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
                    bulan.nama_bulan,
                    pupuk.nama_pupuk,
                    tahun.nama_tahun,
                    kecamatan.nama_kecamatan,
                    kecamatan.geojson,
                    distributor.nama_distributor
                    FROM
                    pupuk_terima
                    INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
                    INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
                    INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
                    INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
                    INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
                    INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
                    WHERE kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
                    GROUP BY nama_kecamatan
        ");
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function urea_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 1 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataurea){
            $hasil[] = $dataurea;
        }
        return $hasil;
        }
    }

    public function sp36_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 2 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datasp36){
            $hasil[] = $datasp36;
        }
        return $hasil;
        }
    }

    public function za_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 3 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataza){
            $hasil[] = $dataza;
        }
        return $hasil;
        }
    }

    public function phonska_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 4 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataphonska){
            $hasil[] = $dataphonska;
        }
        return $hasil;
        }
    }

    public function petroganik_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 5 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datapetroganik){
            $hasil[] = $datapetroganik;
        }
        return $hasil;
        }
    }

    public function urea_total_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 1 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0)
        {
        foreach($query->result() as $dataurea){
        $hasil[] = $dataurea;
        }
        return $hasil;
        }
    }

    public function sp36_total_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 2 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datasp36){
            $hasil[] = $datasp36;
        }
        return $hasil;
        }
    }

    public function za_total_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 3 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataza){
            $hasil[] = $dataza;
        }
        return $hasil;
        }
    }

    public function phonska_total_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 4 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataphonska){
            $hasil[] = $dataphonska;
        }
        return $hasil;
        }
    }

    public function petroganik_total_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 5 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datapetroganik){
            $hasil[] = $datapetroganik;
        }
        return $hasil;
        }
    }

    public function by_tahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE tahun.tahun_id = $tahun
        GROUP BY nama_pupuk
        ORDER BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
            $hasil[] = $data;
        }
        return $hasil;
    }
    }

    public function geo_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
                    pupuk_terima.pterima_id,
                    pupuk_terima.pengecer_id,
                    pupuk_terima.kecamatan_id,
                    pupuk_terima.bulan_id,
                    pengecer.nama_pengecer,
                    SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
                    bulan.nama_bulan,
                    pupuk.nama_pupuk,
                    tahun.nama_tahun,
                    kecamatan.nama_kecamatan,
                    kecamatan.geojson,
                    distributor.nama_distributor
                    FROM
                    pupuk_terima
                    INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
                    INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
                    INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
                    INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
                    INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
                    INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
                    WHERE tahun.tahun_id = $tahun
                    GROUP BY nama_kecamatan
        ");
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function urea_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 1 AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataurea){
            $hasil[] = $dataurea;
        }
        return $hasil;
    }
    }

    public function sp36_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 2 AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datasp36){
            $hasil[] = $datasp36;
        }
        return $hasil;
    }
    }

    public function za_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 3 AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataza){
            $hasil[] = $dataza;
        }
        return $hasil;
    }
    }

    public function phonska_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 4 AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataphonska){
            $hasil[] = $dataphonska;
        }
        return $hasil;
    }
    }

    public function petroganik_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 5 AND tahun.tahun_id = $tahun
        GROUP BY bulan.bulan_id ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datapetroganik){
            $hasil[] = $datapetroganik;
        }
        return $hasil;
        }
    }

    public function urea_total_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 1 AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0)
        {
        foreach($query->result() as $dataurea){
        $hasil[] = $dataurea;
        }
        return $hasil;
        }
    }

    public function sp36_total_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 2 AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datasp36){
            $hasil[] = $datasp36;
        }
        return $hasil;
        }
    }

    public function za_total_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 3 AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataza){
            $hasil[] = $dataza;
        }
        return $hasil;
        }
    }

    public function phonska_total_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 4 AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $dataphonska){
            $hasil[] = $dataphonska;
        }
        return $hasil;
        }
    }

    public function petroganik_total_bytahun_only($tahun)
    {
        $query = $this->db->query("
        SELECT
        pupuk_terima.pterima_id,
        kecamatan.kecamatan_id,
        pupuk_terima.tahun_id,
        pupuk_terima.bulan_id,
        pupuk_terima.pupuk_id,
        kecamatan.nama_kecamatan,
        tahun.nama_tahun,
        bulan.nama_bulan,
        pupuk.nama_pupuk,
        pengecer.nama_pengecer,
        distributor.nama_distributor,
        SUM(pupuk_terima.jumlah_terima) AS jumlah_terima
        FROM
        pupuk_terima
        INNER JOIN pengecer ON pupuk_terima.pengecer_id = pengecer.pengecer_id
        INNER JOIN pupuk ON pupuk_terima.pupuk_id = pupuk.pupuk_id
        INNER JOIN bulan ON pupuk_terima.bulan_id = bulan.bulan_id
        INNER JOIN tahun ON pupuk_terima.tahun_id = tahun.tahun_id
        INNER JOIN distributor ON pupuk_terima.distributor_id = distributor.distributor_id
        INNER JOIN kecamatan ON pupuk_terima.kecamatan_id = kecamatan.kecamatan_id
        WHERE pupuk_terima.pupuk_id = 5 AND tahun.tahun_id = $tahun
        GROUP BY nama_pupuk ASC
        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $datapetroganik){
            $hasil[] = $datapetroganik;
        }
        return $hasil;
        }
    }

    public function get_tahun()
    {
            $query = $this->db->order_BY('nama_tahun', 'asc');
            $query = $this->db->get('tahun');
            return $query->result();
    } 
    public function get_bulan()
    {
            $query = $this->db->order_BY('bulan_id', 'asc');
            $query = $this->db->get('bulan');
            return $query->result();
    } 
    public function get_kecamatan()
    {
            $query = $this->db->order_BY('nama_kecamatan', 'asc');
            $query = $this->db->get('kecamatan');
            return $query->result();
    } 
    public function get_pupuk()
    {
            $query = $this->db->order_BY('pupuk_id', 'asc');
            $query = $this->db->get('pupuk');
            return $query->result();
    } 
}
?>