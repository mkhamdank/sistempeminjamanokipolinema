<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataalat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dataalat_model');
	}
	public function alatkmk($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/kmk', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alatkompen($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/kompen', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alatbkm($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/bkm', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alator($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/or', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alatpasti($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/pasti', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alatplfm($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/plfm', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alatrispol($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/rispol', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alattalitakum($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/talitakum', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alattheatristic($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/theatristic', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function alatusma($id_ukm)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['alat'] = $this->dataalat_model->getAlatUkm($id_ukm);
			$this->load->view('alat/usma', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

}

/* End of file dataalat.php */
/* Location: ./application/controllers/dataalat.php */