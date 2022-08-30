<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Grafik extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Grafik_model', 'grafik');
    }
    public function index()
    {

	$arrayFramework = array();
	$arrayNilai = array();
	if ($result->num_rows > 0)
	{
	    while($row = $result->fetch_assoc())
	    {
	        $arrayFramework[] = '"'.$row['framework'].'"';
	        $arrayNilai[] = $row['nilai'];
	    }
	}
        $data['tampil'] = $this->grafik->tampil();
        $this->load->view('map/content_map', $data);
    }

}