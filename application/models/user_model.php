<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function create_user()
	{
		$object = array('username' => $this->input->post('username'),
		'password' => MD5($this->input->post('password')),
		'level' => '3' );
		$this->db->insert('login', $object);
	}

	public function getUserFromUser($fk_user)
	{
		$this->db->where('fk_user', $fk_user);
		$query = $this->db->get('user');
		return $query->result();
	}

	public function register_user($fk_user,$nama_pjawab,$cp_pjawab)
	{
		$object = array('nama' => $this->input->post('nama'),
		'nim' => $this->input->post('nim'),
		'nama_pjawab' => $nama_pjawab,
		'cp_pjawab' => $cp_pjawab,
		'fk_user' => $fk_user,
		'fk_ukm' => $this->input->post('fk_ukm') );
		$this->db->insert('user', $object);
	}

	public function getUkm($no_ukm)
	{
		$this->db->where('no_ukm', $no_ukm);
		$query = $this->db->get('dataukm');
		return $query->result();
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */