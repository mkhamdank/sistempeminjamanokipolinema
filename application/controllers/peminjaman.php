<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('peminjaman_model');
		$this->load->library('form_validation');
	}
	public function index($id_alat)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$alat = $this->peminjaman_model->getAlatById($id_alat);
			$ukm = $this->peminjaman_model->getUkm();
			foreach ($alat as $key) {
				$stok = $key->jumlah_alat;
				$batas = $key->batas_pinjam;
			}
			$tgl=date('Y-m-d');
			$tanggal_kembali = date('Y-m-d',strtotime('+'.$batas.' days',strtotime($tgl)));
			$data['alat'] = $alat;
			$data['ukm'] = $ukm;
			$user = $this->peminjaman_model->getUser($id);
			foreach ($user as $key) {
				$id_user= $key->id_user;
			}
			$this->form_validation->set_rules('fk_alat', 'Nama Alat', 'trim|required');
			$this->form_validation->set_rules('jumlah_alat', 'Jumlah Alat', 'trim|required');
			$this->form_validation->set_rules('kondisi_alat', 'Kondisi Alat', 'trim|required');
			$this->form_validation->set_rules('jaminan', 'Jaminan', 'trim|required');
			$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('user/peminjaman', $data);
			} else {
				$jumlah = $this->input->post('jumlah_alat');
				$jml = $stok - $jumlah;
				if ($jumlah > $stok) {
					$this->load->view('user/peminjaman', $data);
				}
				else{
					$this->peminjaman_model->updateStok($id_alat,$jml);
					$this->peminjaman_model->pinjam($id_alat,$id_user,$tgl,$tanggal_kembali);
					redirect('user','refresh');
				}
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

}

/* End of file peminjaman.php */
/* Location: ./application/controllers/peminjaman.php */