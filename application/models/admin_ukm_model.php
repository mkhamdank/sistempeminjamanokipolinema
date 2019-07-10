<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ukm_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataUkm()
	{
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getUkmByUname($fk_admin)
	{
		$this->db->where('fk_admin_ukm', $fk_admin);
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function getAlatById($id_ukm)
	{
		$this->db->where('fk_ukm', $id_ukm);
		$query = $this->db->get('alat');
		return $query->result();
	}

	public function getUkmById($id_ukm)
	{
		$this->db->where('no_ukm', $id_ukm);
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function create($fk_admin)
	{
		$object = array('nama_ukm' => $this->input->post('nama_ukm'),
		'nama_ketum' => $this->input->post('nama_ketum'),
		'jumlahanggota' => $this->input->post('jumlahanggota'),
		'nama_rt' => $this->input->post('nama_rt'),
		'cp_rt' => $this->input->post('cp_rt'),
		'fk_admin_ukm' => $fk_admin );
		$this->db->insert('dataukm', $object);
	}

	public function getUkm($id)
	{
		$this->db->select('login.id as id,login.username as username,login.password as password, login.level as level,dataukm.no_ukm as no_ukm,dataukm.nama_ketum as nama_ketum,dataukm.jumlahanggota as jumlahanggota,dataukm.nama_rt as nama_rt,dataukm.cp_rt as cp_rt,dataukm.fk_admin_ukm as fk_admin_ukm');
		$this->db->join('login', 'login.id = dataukm.fk_admin_ukm', 'join');
		$this->db->where('login.id', $id);
		$query = $this->db->get('dataukm');
		return $query->result();
	}

	public function createAlat($no_ukm)
	{
		$object = array(
			'nama_alat' => $this->input->post('nama_alat'),
			'jumlah_alat' => $this->input->post('jumlah_alat'),
			'kondisi_alat' => $this->input->post('kondisi_alat'),
			'batas_pinjam' => $this->input->post('batas'),
			'fk_ukm' => $no_ukm );
		$this->db->insert('alat', $object);
	}

	public function editAlat($kode_alat)
	{
		$this->db->where('kode_alat', $kode_alat);
		$object = array(
			'nama_alat' => $this->input->post('nama_alat'),
			'jumlah_alat' => $this->input->post('jumlah_alat'),
			'kondisi_alat' => $this->input->post('kondisi_alat'),
			'batas_pinjam' => $this->input->post('batas'));
		$this->db->update('alat', $object);
	}

	public function deleteAlat($kode_alat)
	{
		$this->db->where('kode_alat', $kode_alat);
		$this->db->delete('alat');
	}

	public function getAlatByKodeAlat($kode_alat)
	{
		$this->db->where('kode_alat', $kode_alat);
		$query = $this->db->get('alat');
		return $query->result();
	}

	public function getPeminjamanByUKM($kode_alat)
	{
		$this->db->select('peminjaman.jumlah_alat as jml,peminjaman.*, user.*, alat.*, dataukm.*');
		$this->db->where('fk_alat', $kode_alat);
		$this->db->where('peminjaman.status', 'Belum Kembali');
		// $this->db->where('peminjaman.status', 'Terlambat');
		$this->db->join('user', 'user.id_user = peminjaman.fk_user', 'join');
		$this->db->join('alat', 'alat.kode_alat = peminjaman.fk_alat', 'join');
		$this->db->join('dataukm', 'user.fk_ukm = dataukm.no_ukm', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanByUKMTerlambat($kode_alat)
	{
		$this->db->select('peminjaman.jumlah_alat as jml,peminjaman.*, user.*, alat.*, dataukm.*');
		$this->db->where('fk_alat', $kode_alat);
		// $this->db->where('peminjaman.status', 'Belum Kembali');
		$this->db->where('peminjaman.status', 'Terlambat');
		$this->db->join('user', 'user.id_user = peminjaman.fk_user', 'join');
		$this->db->join('alat', 'alat.kode_alat = peminjaman.fk_alat', 'join');
		$this->db->join('dataukm', 'user.fk_ukm = dataukm.no_ukm', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function getPeminjamanByUKMSudahKembali($kode_alat)
	{
		$this->db->select('peminjaman.jumlah_alat as jml,peminjaman.*, user.*, alat.*, dataukm.*');
		$this->db->where('fk_alat', $kode_alat);
		$this->db->where('peminjaman.status', 'Sudah Kembali');
		$this->db->join('user', 'user.id_user = peminjaman.fk_user', 'join');
		$this->db->join('alat', 'alat.kode_alat = peminjaman.fk_alat', 'join');
		$this->db->join('dataukm', 'user.fk_ukm = dataukm.no_ukm', 'join');
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function kembalikan($id_peminjaman)
	{
		$this->db->where('id_peminjaman', $id_peminjaman);
		$object = array('status' => 'Sudah Kembali' );
		$this->db->update('peminjaman', $object);
	}

	public function getPeminjaman($id_peminjaman)
	{
		$this->db->where('id_peminjaman', $id_peminjaman);
		$query = $this->db->get('peminjaman');
		return $query->result();
	}

	public function updateStatus($id_peminjaman)
	{
		$this->db->where('id_peminjaman', $id_peminjaman);
		$object = array('status' => 'Terlambat' );
		$this->db->update('peminjaman', $object);
	}

}

/* End of file admin_ukm_model.php */
/* Location: ./application/models/admin_ukm_model.php */