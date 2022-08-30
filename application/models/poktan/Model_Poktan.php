<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Poktan extends CI_Model {

	public function get($id=null) 
	{
/*		$data ="SELECT 
				contoh.id,
				contoh.id_login,
				contoh.jumlah_petani
				FROM
				contoh
				WHERE
				contoh.id_login = '".$_SESSION['id_login']."'
				";
		return $this->db->query($data);	*/
		$query = $this->db->query("
		SELECT
				butuh_poktan.butuhk_id,
				butuh_poktan.tahun_id,
				butuh_poktan.jumlah_petani,
				poktan.nama_poktan,
				poktan.poktan_id,
				poktan.nama_ketua,
				poktan.komoditas,
				gapoktan.nama_gapoktan,
				desa.nama_desa,
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
				butuh_poktan.za2,
				butuh_poktan.za3,
				butuh_poktan.npk1,
				butuh_poktan.npk2,
				butuh_poktan.npk3,
				butuh_poktan.organik1, 
				butuh_poktan.organik2,
				butuh_poktan.organik3,
				poktan.id_login
				FROM 
				butuh_poktan
				INNER JOIN poktan ON butuh_poktan.poktan_id = poktan.poktan_id
				INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
				INNER JOIN desa ON poktan.desa_id = desa.desa_id
				INNER JOIN kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id
				INNER JOIN login ON poktan.id_login = login.id_login
				WHERE tahun_id=3 AND login.id_login = '".$_SESSION['id_login']."'
				");
		if($query->num_rows() > 0){
			foreach($query->result() as $data){
				$hasil[] = $data;
			}  
			return $hasil;
			}
		}

		public function get_id($id=null) 
	{
		$query = $this->db->query("
		SELECT
				poktan.nama_poktan,
				poktan.poktan_id,
				poktan.nama_ketua,
				poktan.komoditas,
				kecamatan.nama_kecamatan,
				gapoktan.nama_gapoktan,
				gapoktan.gapoktan_id,
				desa.nama_desa,
				poktan.id_login
				FROM 
				poktan
				INNER JOIN gapoktan ON poktan.gapoktan_id = gapoktan.gapoktan_id
				INNER JOIN desa ON poktan.desa_id = desa.desa_id
				INNER JOIN kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id
				INNER JOIN login ON poktan.id_login = login.id_login
				WHERE login.id_login = '".$_SESSION['id_login']."'
				");
		if($query->num_rows() > 0){
			foreach($query->result() as $data){
				$hasil[] = $data;
			}  
			return $hasil;
			}
		}

	public function by_tahun($tahun) 
	{
		$query = $this->db->query("
				SELECT  butuh_poktan.butuhk_id,
				butuh_poktan.tahun_id,
				butuh_poktan.jumlah_petani,
				poktan.nama_poktan,
				poktan.nama_ketua,
				poktan.komoditas,
				gapoktan.nama_gapoktan,
				desa.nama_desa,
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
				butuh_poktan.za2,
				butuh_poktan.za3,
				butuh_poktan.npk1,
				butuh_poktan.npk2,
				butuh_poktan.npk3,
				butuh_poktan.organik1, 
				butuh_poktan.organik2,
				butuh_poktan.organik3,
				poktan.id_login
		FROM  butuh_poktan
		INNER JOIN  poktan ON butuh_poktan.poktan_id = poktan.poktan_id
		INNER JOIN  gapoktan ON butuh_poktan.gapoktan_id = gapoktan.gapoktan_id
		INNER JOIN  desa ON poktan.desa_id = desa.desa_id
		INNER JOIN  kecamatan ON desa.kecamatan_id = kecamatan.kecamatan_id
		INNER JOIN  login ON poktan.id_login = login.id_login
		WHERE butuh_poktan.tahun_id = $tahun AND login.id_login = '".$_SESSION['id_login']."'
		");
		// $this->db->
		if($query->num_rows() > 0){
			foreach($query->result() as $data){
				$hasil[] = $data;
			}  
			return $hasil;
			}
		}

public function get2($id=null)
 {
     $this->db->select(
                     'butuh_poktan.butuhk_id,
                     butuh_poktan.tahun_id,
                     poktan.poktan_id,
                     poktan.nama_poktan,
                     tahun.nama_tahun,
                     gapoktan.gapoktan_id,
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
                     butuh_poktan.organik3,
                     ');
     $this->db->from('butuh_poktan');
     $this->db->join('poktan', 'butuh_poktan.poktan_id = poktan.poktan_id');
     $this->db->join('gapoktan', 'butuh_poktan.gapoktan_id = gapoktan.gapoktan_id');
     $this->db->join('desa', 'poktan.desa_id = desa.desa_id');
     $this->db->join('kecamatan', 'desa.kecamatan_id = kecamatan.kecamatan_id');
     $this->db->join('tahun', 'butuh_poktan.tahun_id = tahun.tahun_id');
     $this->db->order_by('nama_poktan', 'asc');
     $this->db->group_by('nama_poktan');
         // $this->db->where('masa_tanam=="1"');
         if($id != null) {
                 $this->db->where('butuhk_id', $id);   
         }
         $query = $this->db->get();
         return $query;

 }
	public function masuk($data)
	{
			$param = array(
					// 'butuhk_id'      => $data['id'],
					'tahun_id'       => $data['tahun_id'],
					'poktan_id'      => $data['poktan'], //depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
					'desa_id'        => $data['desa'],
					'kec_id'         => $data['kecamatan'],
					'luas_tanam'     => $data['lt1'],
					'luas_tanam2'    => $data['lt2'],
					'luas_tanam3'    => $data['lt3'],
					'urea1'          => $data['lt1']*250,
					'urea2'          => $data['lt2']*250,
					'urea3'          => $data['lt3']*250,
					'sp1'            => $data['lt1']*50,
					'sp2'            => $data['lt2']*50,
					'sp3'            => $data['lt3']*50,
					'za1'            => $data['lt1']*0,
					'za2'            => $data['lt2']*0,
					'za3'            => $data['lt3']*0,
					'npk1'           => $data['lt1']*0,
					'npk2'           => $data['lt2']*0,
					'npk3'           => $data['lt3']*0,
					'organik1'       => $data['lt1']*0,
					'organik2'       => $data['lt2']*0,
					'organik3'       => $data['lt3']*0,
			);
			$this->db->insert('butuh_poktan', $param);

			 //urea1a
			$param_urea1a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'       => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 1,
					'bulan_id'      => 1,
					'jumlah'        => $data['lt1']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea1a);

			 //urea1b
			$param_urea1b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt1']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea1b);

			 //urea1c
			$param_urea1c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt1']*0*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea1c);

			 //urea2a
			$param_urea2a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt2']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea2a);

			 //urea2b
			$param_urea2b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt2']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea2b);

			 //urea2c
			$param_urea2c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt2']*0*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea2c);

			 //urea3a
			$param_urea3a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt3']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea3a);

			 //urea3b
			$param_urea3b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt3']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->insert('pola_pupuk', $param_urea3b);

			 //urea3c
			$param_urea3c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt3']*0*250
	//        'urea2'          => $data['urea2'],

			); 
			$this->db->insert('pola_pupuk', $param_urea3c);

			 //sp1a
			$param_sp1a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 2,
					'bulan_id'      => 1,
					'jumlah'        => $data['lt1']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp1a);

			 //sp1b
			$param_sp1b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt1']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp1b);

			 //sp1c
			$param_sp1c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt1']*0*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp1c);

			 //sp2a
			$param_sp2a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt2']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp2a);

			 //sp2b
			$param_sp2b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt2']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp2b);

			 //sp2c
			$param_sp2c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt2']*0*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp2c);

			 //sp3a
			$param_sp3a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt3']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp3a);

			 //sp3b
			$param_sp3b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt3']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp3b);

			 //sp3c
			$param_sp3c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt3']*0*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->insert('pola_pupuk', $param_sp3c);

			 //za1a
			$param_za1a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 3,
					'bulan_id'       => 1,
					'jumlah'          => $data['lt1']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za1a);

			 //za1b
			$param_za1b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt1']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za1b);

			 //za1c
			$param_za1c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt1']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za1c);

			 //za2a
			$param_za2a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt2']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za2a);

			 //za2b
			$param_za2b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt2']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za2b);

			 //za2c
			$param_za2c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt2']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za2c);

			 //za3a
			$param_za3a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt3']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za3a);

			 //za3b
			$param_za3b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt3']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za3b);

			 //za3c
			$param_za3c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt3']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_za3c);

			 //npk1a
			$param_npk1a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 4,
					'bulan_id'       => 1,
					'jumlah'          => $data['lt1']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk1a);

			 //npk1b
			$param_npk1b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt1']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk1b);

			 //npk1c
			$param_npk1c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt1']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk1c);

			 //npk2a
			$param_npk2a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt2']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk2a);

			 //npk2b
			$param_npk2b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt2']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk2b);

			 //npk2c
			$param_npk2c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt2']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk2c);

			 //npk3a
			$param_npk3a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt3']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk3a);

			 //npk3b
			$param_npk3b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt3']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->insert('pola_pupuk', $param_npk3b);

			 //npk3c
			$param_npk3c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt3']*0.22*0
	//        'npk2'          => $data['za2'],

			);
			$this->db->insert('pola_pupuk', $param_npk3c);

			 //organik1a
			$param_organik1a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 5,
					'bulan_id'       => 1,
					'jumlah'          => $data['lt1']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik1a);

			 //organik1b
			$param_organik1b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt1']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik1b);

			 //organik1c
			$param_organik1c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt1']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik1c);

			 //organik2a
			$param_organik2a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt2']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik2a);

			 //organik2b
			$param_organik2b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt2']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik2b);

			 //organik2c
			$param_organik2c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt2']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik2c);

			 //organik3a
			$param_organik3a = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt3']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik3a);

			 //organik3b
			$param_organik3b = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt3']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik3b);

			 //organik3c
			$param_organik3c = array(
					// 'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt3']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->insert('pola_pupuk', $param_organik3c);
	}
	
	public function edit($data)
	{
			$param = array(
					'butuhk_id'      => $data['id'],
					'tahun_id'       => $data['tahun_id'],
					'poktan_id'      => $data['poktan'], //depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
					'desa_id'        => $data['desa'],
					'kec_id'         => $data['kecamatan'],
					'luas_tanam'     => $data['lt1'],
					'luas_tanam2'    => $data['lt2'],
					'luas_tanam3'    => $data['lt3'],
					'urea1'          => $data['lt1']*250,
					'urea2'          => $data['lt2']*250,
					'urea3'          => $data['lt3']*250,
					'sp1'            => $data['lt1']*50,
					'sp2'            => $data['lt2']*50,
					'sp3'            => $data['lt3']*50,
					'za1'            => $data['lt1']*0,
					'za2'            => $data['lt2']*0,
					'za3'            => $data['lt3']*0,
					'npk1'           => $data['lt1']*0,
					'npk2'           => $data['lt2']*0,
					'npk3'           => $data['lt3']*0,
					'organik1'       => $data['lt1']*0,
					'organik2'       => $data['lt2']*0,
					'organik3'       => $data['lt3']*0,
			);
			$this->db->set($param);
			$this->db->where('butuhk_id', $data['id']);
			$this->db->update('butuh_poktan');
	

					 //urea1a
			$param_urea1a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 1,
					'bulan_id'      => 1,
					'jumlah'        => $data['lt1']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->set($param_urea1a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //urea1b
			$param_urea1b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt1']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->set($param_urea1b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea1c
			
			$param_urea1c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt1']*0*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->set($param_urea1c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea2a
			
			$param_urea2a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt2']*0.47*250
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_urea2a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea2b
			
			$param_urea2b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt2']*0.47*250
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_urea2b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea2c
			
			$param_urea2c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt2']*0*250
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_urea2c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea3a
			
			$param_urea3a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt3']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->set($param_urea3a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea3b
			
			$param_urea3b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt3']*0.47*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->set($param_urea3b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //urea3c
			
			$param_urea3c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 1,
					'jumlah'         => $data['lt3']*0*250
	//        'urea2'          => $data['urea2'],

			);
			$this->db->set($param_urea3c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');             //sp1a
			
			$param_sp1a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 2,
					'bulan_id'      => 1,
					'jumlah'        => $data['lt1']*0.99*75
	//        'sp2'          => $data['sp2'],

			);
			$this->db->set($param_sp1a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp1b
			
			$param_sp1b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt1']*0.99*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->set($param_sp1b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp1c

			$param_sp1c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt1']*0*50
	//        'sp2'          => $data['sp2'],

			);
			$this->db->set($param_sp1c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp2a
			
			$param_sp2a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt2']*0.99*50
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_sp2a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp2b
			
			$param_sp2b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt2']*0.99*50
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_sp2b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp2c
			
			$param_sp2c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt2']*0*75
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_sp2c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp3a
			
			$param_sp3a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt3']*0.99*50
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_sp3a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp3b
			
			$param_sp3b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt3']*0.99*50
	//        'lt2'          => $data['sp2'],

			);
			$this->db->set($param_sp3b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //sp3c
			
			$param_sp3c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 2,
					'jumlah'         => $data['lt3']*0*75
	//        'sp2'          => $data['sp2'],

			);
			$this->db->set($param_sp3c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za1a
			
			$param_za1a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 3,
					'bulan_id'       => 1,
					'jumlah'          => $data['lt1']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->set($param_za1a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za1b
			
			$param_za1b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt1']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->set($param_za1b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za1c
			
			$param_za1c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt1']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->set($param_za1c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za2a
			
			$param_za2a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt2']*0.46*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_za2a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za2b
			
			$param_za2b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt2']*0.46*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_za2b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za2c
			
			$param_za2c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt2']*0.46*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_za2c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za3a
			
			$param_za3a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt3']*0.46*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_za3a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za3b
			
			$param_za3b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt3']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->set($param_za3b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //za3c
			
			$param_za3c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 3,
					'jumlah'         => $data['lt3']*0.46*0
	//        'za2'          => $data['za2'],

			);
			$this->db->set($param_za3c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');     //npk1a
			
			$param_npk1a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 4,
					'bulan_id'       => 1,
					'jumlah'          => $data['lt1']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->set($param_npk1a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk1b
			
			$param_npk1b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt1']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->set($param_npk1b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk1c
			
			$param_npk1c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt1']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->set($param_npk1c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk2a
			
			$param_npk2a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt2']*0.22*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_npk2a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk2b
			
			$param_npk2b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt2']*0.22*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_npk2b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk2c
			
			$param_npk2c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt2']*0.22*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_npk2c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk3a
			
			$param_npk3a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt3']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->set($param_npk3a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk3b
			
			$param_npk3b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt3']*0.22*0
	//        'npk2'          => $data['npk2'],

			);
			$this->db->set($param_npk3b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //npk3c
			
			$param_npk3c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 4,
					'jumlah'         => $data['lt3']*0.22*0
	//        'npk2'          => $data['za2'],

			);
			$this->db->set($param_npk3c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');         //organik1a
			
			$param_organik1a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
		//      'desa_id'        => $data['desa_id'],
		//      'kecamatan_id'   => $data['kecamatan_id'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'pupuk_id'      => 5,
					'bulan_id'       => 1,
					'jumlah'          => $data['lt1']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->set($param_organik1a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik1b
			$param_organik1b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 2,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt1']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->set($param_organik1b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik1c
			$param_organik1c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 3,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt1']*0*0.15
	//        'organik2'          => $data['organik2'],

			);
			$this->db->set($param_organik1c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik2a
			$param_organik2a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 5,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt2']*0.15*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_organik2a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik2b
			$param_organik2b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 6,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt2']*0.15*0
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_organik2b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik2c
			$param_organik2c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 7,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt2']*0*0.15
	//        'lt2'          => $data['lt2'],

			);
			$this->db->set($param_organik2c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik3a
			$param_organik3a = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 9,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt3']*0.15*0
	//        'organik2'          => $data['organik2'],

			);
			$this->db->set($param_organik3a);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik3b
			$param_organik3b = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 10,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt3']*0*0.15
	//        'organik2'          => $data['organik2'],

			);
			$this->db->set($param_organik3b);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');

			 //organik3c
			$param_organik3c = array(
					'polpuk_id'      => $data['id'],
					'tahun_id'          => $data['tahun_id'],
					'poktan_id'      => $data['poktan'],//depan dr database blkg name dr new_form
					'gapoktan_id'    => $data['gapoktan'],
	 //      'luas_tanam'     => $data['luas_tanam'],
					'bulan_id'       => 11,
					'pupuk_id'       => 5,
					'jumlah'         => $data['lt3']*0*0.15
	//        'organik2'          => $data['organik2'],

			);
			$this->db->set($param_organik3c);
			$this->db->where('polpuk_id', $data['id']);
			$this->db->update('pola_pupuk');
	}
 

	public function del($id)
	{
			$this->db->where('butuhk_id', $id);
			$this->db->delete('butuh_poktan');
			$this->db->where('polpuk_id', $id);
			$this->db->delete('pola_pupuk');

	}

		public function get_tahun()
	{
			$query = $this->db->order_by('nama_tahun', 'asc');
			$query = $this->db->get('tahun');
			return $query->result();
   }

	//tutorial^^
	public function getpoktan()
	{
			$query = $this->db->order_by('nama_poktan', 'asc');
			$query = $this->db->get('poktan');
			return $query->result();
	}

	public function getgapoktan()
	{
			$query = $this->db->order_by('nama_gapoktan', 'asc');
			$query = $this->db->get('gapoktan');
			return $query->result();
	}

	public function getdesa()
	{
			$query = $this->db->order_by('nama_desa', 'asc');
			$query = $this->db->get('desa');
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
	$query = $this->db->get('butuh_poktan');
	if($query->num_rows()>0)
	{
	  return $query->num_rows();
	}
	else
	{
	  return 0;
	}
	}   
}