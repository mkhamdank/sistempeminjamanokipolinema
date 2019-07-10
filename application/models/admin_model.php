<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataUkm()
	{
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getUkm()
	{
		$this->db->join('login', 'login.id = dataukm.fk_admin_ukm', 'join');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataUser()
	{
		$query = $this->db->get('login');
		return $query->result();
	}

	public function getDataUserById($id_user)
	{
		$this->db->where('id', $id_user);
		$query = $this->db->get('login');
		return $query->result();
	}

	public function createUser()
	{
		$object = array('username' => $this->input->post('username'),
		'password' => MD5($this->input->post('password')),
		'level' => $this->input->post('level'));
		$this->db->insert('login', $object);
	}

	public function editUser($id_user)
	{
		$this->db->where('id', $id_user);
		$object = array('username' => $this->input->post('username'),
		'password' => MD5($this->input->post('password')),
		'level' => $this->input->post('level'));
		$this->db->update('login', $object);
	}

	public function deleteUser($id_user)
	{
		$this->db->where('id', $id_user);
		$this->db->delete('login');
	}

	public function getPeminjam()
	{
		$this->db->join('login', 'login.id = user.fk_user', 'join');
		$this->db->join('dataukm', 'dataukm.no_ukm = user.fk_ukm', 'join');
		$query = $this->db->get('user');
		return $query->result();
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */