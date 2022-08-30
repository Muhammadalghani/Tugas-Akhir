<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemetaan extends CI_Controller {
 
	public function index()
	{
		
		$content = file_get_contents(base_url() . '/mapdata/pdpariaman2022.geojson');
		$kecamatan = json_decode($content, true);
		
		if (!empty($_GET['submit'])) { 
			$tahun = $_GET['tahun'];
			$sql = "SELECT nama_kecamatan, SUM(luas_tanam) AS lt1 SUM(luas_tanam2) AS lt2, SUM(luas_tanam3) AS lt3
					FROM butuh_poktan
					INNER JOIN gapoktan ON butuh_poktan.gapoktan_id = gapoktan.gapoktan_id
					INNER JOIN kecamatan ON gapoktan.kecamatan_id = kecamatan.kecamatan_id
					WHERE tahun =$tahun 
					GROUP BY id_kecamatan";
			
			$luas = $this->db->query($sql)->result_array();
			foreach ($luas as $key => $val) {
				$nama_hewan = str_replace(' ' ,'_', $val['nama_hewan']);
				$ternak[$val['nama_kecamatan']][$nama_hewan] = $val;
			}
			
			$skip = array('NAME_3', 'TYPE_3', 'Warna');
			foreach ($kecamatan['features'] as $key => &$val) {
				$nama_kecamatan = $val['properties']['NAME_3'];
				if (key_exists($nama_kecamatan, $ternak)) {
					
					foreach($val['properties'] as $key2 => &$val2) {
						if (in_array($key2, $skip))
							continue;
						
						if (key_exists($key2, $ternak[$nama_kecamatan])) {

							$val2 =  $ternak[$nama_kecamatan][$key2]['jumlah_hewan'];
						} else {
							
							$val2 = 0;
						}
					}
					
				}
			}
			$isi['kecamatan'] =$kecamatan;
		}
		
		
		
		$isi['content']		='tampilan_content_front';
		$info =$this->input->get("informasi");
		
		$peta_informasi = $this->db->query("select * from peta_informasi")->result_array();
	
		$tahun = $this->db->query("select tahun from populasi_rumbes 
								UNION select tahun from populasi_rumcil
								UNION select tahun from produksi_susu
								UNION select tahun from produksi_daging
								ORDER BY tahun DESC
							")->result_array();
							
		$isi['tahun'] =$tahun;
		$isi['map_data'] =$info;
		$isi['peta_informasi'] =$peta_informasi;
		$this->load->view('tampilan_menu_awal',$isi);
		$this->load->view('tampilan_pemetaan',$isi);
	}


	public function cari_peta()
	{
		$info =$this->input->get('pilihan_info');
		

		$hasil = $this->load->view('tampilan_pemetaan_baru',
			array(
				'map_data'=>$info,
			),
		true	
		);

		$callback = array(
			'hasil' => $hasil, 
		);

		echo json_encode($callback);

	}
}
