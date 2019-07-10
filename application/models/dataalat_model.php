<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataalat_model extends CI_Model {

	public function getAlatUkm($id_ukm)
	{
		$this->db->where('fk_ukm', $id_ukm);
		$query = $this->db->get('alat');
		return $query->result();
	}

}

/* End of file dataalat_model.php */
/* Location: ./application/models/dataalat_model.php */