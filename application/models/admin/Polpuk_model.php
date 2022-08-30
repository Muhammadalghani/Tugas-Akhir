<?php
class Polpuk_model extends CI_Model
{
    public function report()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            GROUP BY nama_pupuk
            ORDER BY nama_pupuk ASC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function geo_butuh()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan,
            kecamatan.geojson
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            GROUP BY kecamatan.geojson

        ");
        if($query->num_rows() > 0){
            foreach($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function urea()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 1
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataurea) {
                $hasil[] = $dataurea;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function sp36()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 2
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datasp36za) {
                $hasil[] = $datasp36za;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function za()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 3
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataza) {
                $hasil[] = $dataza;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function phonska()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 4
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataphonska) {
                $hasil[] = $dataphonska;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function petroganik()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 5
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datapetroganik) {
                $hasil[] = $datapetroganik;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function urea_tot()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 1
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataurea) {
                $hasil[] = $dataurea;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function sp36_tot()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 2
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datasp36za) {
                $hasil[] = $datasp36za;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function za_tot()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 3
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataza) {
                $hasil[] = $dataza;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function phonska_tot()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 4
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataphonska) {
                $hasil[] = $dataphonska;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function petroganik_tot()
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 5
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datapetroganik) {
                $hasil[] = $datapetroganik;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function by_tahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk
            ORDER BY nama_pupuk ASC");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
        // if($id != null) {
        //     $this->db->where('alokasi_id', $id);   
        // }
    }

    public function urea_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 1 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataurea) {
                $hasil[] = $dataurea;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function sp36_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 2 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datasp36za) {
                $hasil[] = $datasp36za;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function za_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 3 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataza) {
                $hasil[] = $dataza;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function phonska_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 4 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataphonska) {
                $hasil[] = $dataphonska;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function petroganik_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 5 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datapetroganik) {
                $hasil[] = $datapetroganik;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function urea_tot_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 1 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataurea) {
                $hasil[] = $dataurea;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function sp36_tot_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 2 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datasp36za) {
                $hasil[] = $datasp36za;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function za_tot_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 3 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataza) {
                $hasil[] = $dataza;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function phonska_tot_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 4 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataphonska) {
                $hasil[] = $dataphonska;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function petroganik_tot_bytahun($kecamatan, $tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 5 AND kecamatan.kecamatan_id = $kecamatan AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datapetroganik) {
                $hasil[] = $datapetroganik;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function by_tahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE tahun.tahun_id = $tahun
            GROUP BY nama_pupuk
            ORDER BY nama_pupuk ASC");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
        // if($id != null) {
        //     $this->db->where('alokasi_id', $id);   
        // }
    }

    public function urea_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 1 AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataurea) {
                $hasil[] = $dataurea;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function sp36_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 2 AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datasp36za) {
                $hasil[] = $datasp36za;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function za_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 3 AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataza) {
                $hasil[] = $dataza;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function phonska_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 4 AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataphonska) {
                $hasil[] = $dataphonska;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function petroganik_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 5 AND tahun.tahun_id = $tahun
            GROUP BY bulan.bulan_id ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datapetroganik) {
                $hasil[] = $datapetroganik;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function urea_tot_bytahun_onyl($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 1 AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataurea) {
                $hasil[] = $dataurea;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function sp36_tot_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 2 AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datasp36za) {
                $hasil[] = $datasp36za;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }

    public function za_tot_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 3 AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataza) {
                $hasil[] = $dataza;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function phonska_tot_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 4 AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $dataphonska) {
                $hasil[] = $dataphonska;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
    }
    public function petroganik_tot_bytahun_only($tahun)
    {
        $query = $this->db->query("
            SELECT
            pola_pupuk.polpuk_id,
            kecamatan.kecamatan_id,
            pola_pupuk.tahun_id,
            pola_pupuk.bulan_id,
            pola_pupuk.pupuk_id,
            kecamatan.nama_kecamatan,
            tahun.nama_tahun,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            poktan.nama_poktan,
            SUM(pola_pupuk.jumlah) AS jumlah,
            bulan.nama_bulan,
            pupuk.nama_pupuk,
            tahun.nama_tahun,
            gapoktan.nama_gapoktan,
            kecamatan.nama_kecamatan
            FROM
            pola_pupuk
            INNER JOIN poktan ON pola_pupuk.poktan_id = poktan.poktan_id
            INNER JOIN pupuk ON pola_pupuk.pupuk_id = pupuk.pupuk_id
            INNER JOIN bulan ON pola_pupuk.bulan_id = bulan.bulan_id
            INNER JOIN tahun ON pola_pupuk.tahun_id = tahun.tahun_id
            INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
            INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
            WHERE pola_pupuk.pupuk_id = 5 AND tahun.tahun_id = $tahun
            GROUP BY nama_pupuk ASC
            -- ORDER BY jumlah DESC
            ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $datapetroganik) {
                $hasil[] = $datapetroganik;
            }
            return $hasil;
        }
        // else {
        //     return false;
        // }
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
    public function get_kecamatan()
    {
        $query = $this->db->order_by('nama_kecamatan', 'asc');
        $query = $this->db->get('kecamatan');
        return $query->result();
    }
    public function get_pupuk()
    {
        $query = $this->db->order_by('pupuk_id', 'asc');
        $query = $this->db->get('pupuk');
        return $query->result();
    }
}
