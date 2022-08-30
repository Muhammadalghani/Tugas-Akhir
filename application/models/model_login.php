<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_model {

	public function getlogin($u,$p)
	{
		$this->db->select('id_login, username, password, level');
		$this->db->from('login');
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->result();
		$count = count ($result);
		if ($count==1)
		{
			return $result;
		}
			else 
		{
		$this->session->set_flashdata('info','<center>Maaf Username atau Password Salah</center>');
		redirect('login');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */