<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataukm_model extends CI_Model {

	public function getDataKmk()
	{
		$this->db->where('nama_ukm', 'KMK');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataKompen()
	{
		$this->db->where('nama_ukm', 'LPM KOMPEN');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataBkm()
	{
		$this->db->where('nama_ukm', 'BKM POLINEMA');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataOr()
	{
		$this->db->where('nama_ukm', 'OLAHRAGA');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataPasti()
	{
		$this->db->where('nama_ukm', 'PASTI POLINEMA');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataPlfm()
	{
		$this->db->where('nama_ukm', 'PLFM');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataRispol()
	{
		$this->db->where('nama_ukm', 'RISPOL');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataTalitakum()
	{
		$this->db->where('nama_ukm', 'TALITAKUM');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataTheatristic()
	{
		$this->db->where('nama_ukm', 'THEATRISTIC');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getDataUsma()
	{
		$this->db->where('nama_ukm', 'USMA');
		$query = $this->db->get('dataukm');
		return $query->result();
	}

}

/* End of file dataukm_model.php */
/* Location: ./application/models/dataukm_model.php */