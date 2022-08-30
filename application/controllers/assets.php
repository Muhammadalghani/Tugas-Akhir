<?php 
class assets extends CI_Controller {
	public function __construct() {}
	public function geojson() {
		$tahun = $this->input->get('tahun');
	}
}
?>