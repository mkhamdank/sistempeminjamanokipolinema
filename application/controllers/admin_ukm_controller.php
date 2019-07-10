<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ukm_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_ukm_model');
		$this->load->model('peminjaman_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$dataukm = $this->admin_ukm_model->getUkmByUname($id);
			$data['ukm'] = $dataukm;
			foreach ($dataukm as $key) {
				$fk = $key->fk_admin_ukm;
			}
			if (ISSET($fk) && $fk == $id) {
				$this->load->view('admin_ukm/home_admin_ukm', $data);
			}
			else{
				redirect('admin_ukm_controller/register','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function dataalat()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$dataukm = $this->admin_ukm_model->getUkmByUname($id);
			if (ISSET($dataukm)) {
				foreach ($dataukm as $val) {
					$ukm = $val->no_ukm;
				}			
				$dataalat = $this->admin_ukm_model->getAlatById($ukm);
				foreach ($dataalat as $key) {
					$fk_ukm = $key->fk_ukm;
				}
				if(ISSET($fk_ukm)){
					$data['ukm'] = $this->admin_ukm_model->getUkmById($fk_ukm);
				}
				else{
					redirect('admin_ukm_controller/create_alat','refresh');
				}		
			}
					
			$data['username'] = $username;
			$data['alat'] = $dataalat;
			$this->load->view('admin_ukm/view_alat_ukm', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function register()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$this->form_validation->set_rules('nama_ukm', 'Nama UKM', 'trim|required');
			$this->form_validation->set_rules('nama_ketum', 'Nama Ketua Umum', 'trim|required');
			$this->form_validation->set_rules('jumlahanggota', 'Jumlah Anggota', 'trim|required');
			$this->form_validation->set_rules('nama_rt', 'Nama RT', 'trim|required');
			$this->form_validation->set_rules('cp_rt', 'Contact Person', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin_ukm/register',$data);
			} else {
				$this->admin_ukm_model->create($id);
				redirect('admin_ukm_controller','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function create_alat()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$dataukm = $this->admin_ukm_model->getUkm($id);
			foreach ($dataukm as $key) {
				$no_ukm = $key->no_ukm;
			}
			$this->form_validation->set_rules('nama_alat', 'Nama Alat', 'trim|required');
			$this->form_validation->set_rules('jumlah_alat', 'Jumlah Alat', 'trim|required');
			$this->form_validation->set_rules('kondisi_alat', 'Kondisi Alat', 'trim|required');
			$this->form_validation->set_rules('batas', 'Batas Pengembalian', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin_ukm/create_alat',$data);
			} else {
				$this->admin_ukm_model->createAlat($no_ukm);
				redirect('admin_ukm_controller','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function edit_alat($kode_alat)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$dataukm = $this->admin_ukm_model->getUkm($id);
			$data['alat'] = $this->admin_ukm_model->getAlatByKodeAlat($kode_alat);
			$this->form_validation->set_rules('nama_alat', 'Nama Alat', 'trim|required');
			$this->form_validation->set_rules('jumlah_alat', 'Jumlah Alat', 'trim|required');
			$this->form_validation->set_rules('kondisi_alat', 'Kondisi Alat', 'trim|required');
			$this->form_validation->set_rules('batas', 'Batas Pengembalian', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin_ukm/edit_alat',$data);
			} else {
				$this->admin_ukm_model->editAlat($kode_alat);
				redirect('admin_ukm_controller/dataalat','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function delete_alat($id_alat)
	{
		
		$this->admin_ukm_model->deleteAlat($id_alat);
		redirect('admin_ukm_controller','refresh');
	}

	public function datapeminjaman()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$dataukm = $this->admin_ukm_model->getUkmByUname($id);
			foreach ($dataukm as $val) {
				$ukm = $val->no_ukm;
			}			
			$dataalat = $this->admin_ukm_model->getAlatById($ukm);
				foreach ($dataalat as $key) {
					$fk_ukm = $key->fk_ukm;
				}
			$data['ukm'] = $this->admin_ukm_model->getUkmById($fk_ukm);
			foreach ($dataalat as $key) {
				$kode_alat = $key->kode_alat;
			}
			$peminjaman = $this->admin_ukm_model->getPeminjamanByUKM($kode_alat);
			$peminjaman_terlambat = $this->admin_ukm_model->getPeminjamanByUKMTerlambat($kode_alat);
			foreach ($peminjaman as $val) {
				$tgl_kembali = $val->tgl_kembali;
				$id_peminjaman = $val->id_peminjaman;
				$tgl=date('Y-m-d');
				if ($tgl > $tgl_kembali) {
					$this->admin_ukm_model->updateStatus($id_peminjaman);
				}
			}

			$data['username'] = $username;
			$data['peminjaman'] = $peminjaman;
			$data['peminjaman_terlambat'] = $peminjaman_terlambat;
			$this->load->view('admin_ukm/view_peminjaman', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function kembalikan($id_peminjaman)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$peminjaman = $this->admin_ukm_model->getPeminjaman($id_peminjaman);
			foreach ($peminjaman as $key) {
				$jumlah = $key->jumlah_alat;
			}
			$dataukm = $this->admin_ukm_model->getUkmByUname($id);
			foreach ($dataukm as $val) {
				$ukm = $val->no_ukm;
			}			
			$dataalat = $this->admin_ukm_model->getAlatById($ukm);
				foreach ($dataalat as $key) {
					$jumlah_alat = $key->jumlah_alat;
					$id_alat = $key->kode_alat;
				}

			$jml = $jumlah + $jumlah_alat;
			$this->peminjaman_model->updateStok($id_alat,$jml);
			$this->admin_ukm_model->kembalikan($id_peminjaman);
			redirect('admin_ukm_controller/datapeminjaman','refresh');
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function rekap_peminjaman()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$dataukm = $this->admin_ukm_model->getUkmByUname($id);
			foreach ($dataukm as $val) {
				$ukm = $val->no_ukm;
			}			
			$dataalat = $this->admin_ukm_model->getAlatById($ukm);
				foreach ($dataalat as $key) {
					$fk_ukm = $key->fk_ukm;
				}
			$data['ukm'] = $this->admin_ukm_model->getUkmById($fk_ukm);
			foreach ($dataalat as $key) {
				$kode_alat = $key->kode_alat;
			}
			$peminjaman = $this->admin_ukm_model->getPeminjamanByUKMSudahKembali($kode_alat);
			
					
			$data['username'] = $username;
			$data['peminjaman'] = $peminjaman;
			$this->load->view('admin_ukm/rekap_peminjaman', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

}

/* End of file admin_ukm_controller.php */
/* Location: ./application/controllers/admin_ukm_controller.php */