<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pupukterima_p extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'html', 'form');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->model('admin/Pupukterima_model', 'pupukterima');
        $this->load->model('admin/Polpuk_model', 'polpuk');
        $isi = array(
            'header'            => 'Sistem Informasi Pupuk Bersubsidi',
            'content'           => 'map_pupukterima/content_mapterima',
            'get_tahun'            => $this->pupukterima->get_tahun(),
            'get_bulan'            => $this->pupukterima->get_bulan(),
            'get_kecamatan'        => $this->pupukterima->get_kecamatan(),
            'get_pupuk'            => $this->pupukterima->get_pupuk(),
            'datab'		        => $this->polpuk->report(),
            // 'dataureatot'            => $this->polpuk->urea_tot(),
            // 'datazatot'            => $this->polpuk->za_tot(),
            // 'datasp36tot'            => $this->polpuk->sp36_tot(),
            // 'dataphonskatot'        => $this->polpuk->phonska_tot(),
            // 'datapetroganiktot'    => $this->polpuk->petroganik_tot(),
            'data'                    => $this->pupukterima->report(),
            'dataurea'            => $this->pupukterima->urea(),
            'dataza'            => $this->pupukterima->za(),
            'datasp36'            => $this->pupukterima->sp36(),
            'dataphonska'        => $this->pupukterima->phonska(),
            'datapetroganik'   => $this->pupukterima->petroganik(),
            'dataureatotal'     => $this->pupukterima->urea_total(),
            'datazatotal'     => $this->pupukterima->za_total(),
            'datasp36total'     => $this->pupukterima->sp36_total(),
            'dataphonskatotal'     => $this->pupukterima->phonska_total(),
            'datapetroganiktotal'     => $this->pupukterima->petroganik_total(),
            'datageojson'           => $this->pupukterima->geo(),
        );
        $this->load->view('map_pupukterima/tampilan_mapterima', $isi);
    }

    public function by_tahun()
    {
        $this->load->model('admin/pupukterima_model', 'pupukterima');
        $this->load->model('admin/Polpuk_model', 'polpuk');
        $tahun = $this->input->get('tahun');
        $kecamatan = $this->input->get('kecamatan');

        if ($kecamatan == 'semua') {
            $isi = array(
                'header'            => 'Sistem Informasi Pupuk Bersubsidi',
                'content'           => 'map_pupukterima/content_mapterima',
                'datab'		        => $this->polpuk->by_tahun_only($tahun),
                // 'dataureatot'            => $this->polpuk->urea_tot_bytahun_only($tahun),
                // 'datazatot'            => $this->polpuk->za_tot_bytahun_only($tahun),
                // 'datasp36tot'            => $this->polpuk->sp36_tot_bytahun_only($tahun),
                // 'dataphonskatot'        => $this->polpuk->phonska_tot_bytahun_only($tahun),
                // 'datapetroganiktot'    => $this->polpuk->petroganik_tot_bytahun_only($tahun),
                'data'                        => $this->pupukterima->by_tahun_only($tahun),
                'dataurea'                => $this->pupukterima->urea_bytahun_only($tahun),
                'dataza'                => $this->pupukterima->za_bytahun_only($tahun),
                'datasp36'                => $this->pupukterima->sp36_bytahun_only($tahun),
                'dataphonska'            => $this->pupukterima->phonska_bytahun_only($tahun),
                'datapetroganik'       => $this->pupukterima->petroganik_bytahun_only($tahun),
                'dataureatotal'     => $this->pupukterima->urea_total_bytahun_only($tahun),
                'datazatotal'     => $this->pupukterima->za_total_bytahun_only($tahun),
                'datasp36total'     => $this->pupukterima->sp36_total_bytahun_only($tahun),
                'dataphonskatotal'     => $this->pupukterima->phonska_total_bytahun_only($tahun),
                'datapetroganiktotal'     => $this->pupukterima->petroganik_total_bytahun_only($tahun),
                'datageojson'           => $this->pupukterima->geo_bytahun_only($tahun),
                'get_tahun'            => $this->pupukterima->get_tahun(),
                'get_kecamatan'        => $this->pupukterima->get_kecamatan(),
            );
        } else {
            $isi = array(
                'header'            => 'Sistem Informasi Pupuk Bersubsidi',
                'content'           => 'map_pupukterima/content_mapterima',
                'datab'		        => $this->polpuk->by_tahun($kecamatan, $tahun),
                // 'dataureatot'		    => $this->polpuk->urea_tot_bytahun($kecamatan, $tahun),
                // 'datazatot'		    => $this->polpuk->za_tot_bytahun($kecamatan, $tahun),
                // 'datasp36tot'		    => $this->polpuk->sp36_tot_bytahun($kecamatan, $tahun),
                // 'dataphonskatot'	    => $this->polpuk->phonska_tot_bytahun($kecamatan, $tahun),
                // 'datapetroganiktot'    => $this->polpuk->petroganik_tot_bytahun($kecamatan, $tahun),
                'data'                => $this->pupukterima->by_tahun($kecamatan, $tahun),
                'dataurea'                => $this->pupukterima->urea_bytahun($kecamatan, $tahun),
                'dataza'                => $this->pupukterima->za_bytahun($kecamatan, $tahun),
                'datasp36'                => $this->pupukterima->sp36_bytahun($kecamatan, $tahun),
                'dataphonska'            => $this->pupukterima->phonska_bytahun($kecamatan, $tahun),
                'datapetroganik'       => $this->pupukterima->petroganik_bytahun($kecamatan, $tahun),
                'dataureatotal'     => $this->pupukterima->urea_total_bytahun($kecamatan, $tahun),
                'datazatotal'     => $this->pupukterima->za_total_bytahun($kecamatan, $tahun),
                'datasp36total'     => $this->pupukterima->sp36_total_bytahun($kecamatan, $tahun),
                'dataphonskatotal'     => $this->pupukterima->phonska_total_bytahun($kecamatan, $tahun),
                'datapetroganiktotal'     => $this->pupukterima->petroganik_total_bytahun($kecamatan, $tahun),
                'datageojson'           => $this->pupukterima->geo_bytahun($kecamatan, $tahun),
                'get_tahun'            => $this->pupukterima->get_tahun(),
                'get_kecamatan'        => $this->pupukterima->get_kecamatan(),
            );
        }

        $this->load->view('map_pupukterima/tampilan_mapterima', $isi);
    }

    public function grafik()
    {
        $this->load->model('admin/pupukterima_model', 'pupukterima');
        $tahun = $this->input->get('tahun');
        $data['data'] = $this->pupukterima->report($tahun);
        $data['get_tahun'] = $this->pupukterima->get_tahun();
        $this->load->view('map_butuh/grafik/grafik', $data);
    }
}
