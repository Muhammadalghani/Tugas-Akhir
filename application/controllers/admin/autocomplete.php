<?php
class Autocomplete extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('au_model');
    }
 
    function index(){
        $this->load->view('au_view');
    }
 
    function get_autocomplete(){
    if (isset($_GET['term'])) {
        $result = $this->au_model->search_au($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->nama_pupuk,
                    'description'   => $row->harga,
             );
                echo json_encode($arr_result);
        }
    }
}
 
}