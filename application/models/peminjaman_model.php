<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends CI_Model {

	public function pinjam($id_alat,$id_user,$tgl,$tgl_kembali)
	{
		$object = array('fk_alat' => $id_alat,
		'fk_user' => $id_user,
		'jumlah_alat' => $this->input->post('jumlah_alat'),
		'kondisi_alat' => $this->input->post('kondisi_alat'),
		'kegiatan' => $this->input->post('kegiatan'),
		'surat' => $this->input->post('surat'),
		'tgl_pinjam' => $tgl,
		'tgl_kembali' => $tgl_kembali,
		'jaminan' => $this->input->post('jaminan'),
		'status' => 'Belum Kembali');
		$this->db->insert('peminjaman', $object);
	}

	public function updateStok($id_alat,$jml)
	{
		$object = array('jumlah_alat' => $jml );
		$this->db->where('kode_alat', $id_alat);
		$this->db->update('alat', $object);
	}

	public function getAlatById($id_alat)
	{
		$this->db->where('kode_alat', $id_alat);
		$query = $this->db->get('alat');
		return $query->result();
	}

	public function getUkm()
	{
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getUser($id)
	{
		$this->db->where('fk_user', $id);
		$query = $this->db->get('user');
		return $query->result();
	}

}

/* End of file peminjaman_model.php */
/* Location: ./application/models/peminjaman_model.php */