<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('model_login');
			$this->load->library('session'); 
	}
	public function index()

	{
		$this->load->view('tampilan_login');
	}
	public function getlogin()
	{
		$u= $this->input->post('username');
		$p= $this->input->post('password');
	
		$ceklogin = $this->model_login->getlogin($u,$p);

		if ($ceklogin)
		{
			foreach ($ceklogin as $row) 
			{
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('password',$row->password);
				$this->session->set_userdata('id_login',$row->id_login);
				$this->session->set_userdata('level',$row->level);


				if ($this->session->userdata('level')=="admin")
				{
					redirect('admin/admin_home'); //controller
				}
				elseif ($this->session->userdata('level')=="dinas")
				{
					redirect('dinas/dinas_home');
				}
				elseif ($this->session->userdata('level')=="distributor")
				{
					redirect('distributor/distributor_home');
				}
				elseif ($this->session->userdata('level')=="pengecer")
				{
					redirect('pengecer/pengecer_home');
				}
				elseif ($this->session->userdata('level')=="poktan")
				{
					redirect('poktan/poktan_home');
				}
				
			}

		}
	}
	public function logout()
	{
			$this->session->sess_destroy();
			redirect('');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */