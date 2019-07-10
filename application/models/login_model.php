<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {


	public function login($username,$password)
	{
		$this->db->select('id,username,password,level');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */