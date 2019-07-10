<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataukm extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dataukm_model');
	}

	public function kmk()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['kmk'] = $this->dataukm_model->getDataKmk();
			$this->load->view('ukm/kmk', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function kompen()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['kompen'] = $this->dataukm_model->getDataKompen();
			$this->load->view('ukm/kompen', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function bkm()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['bkm'] = $this->dataukm_model->getDataBkm();
			$this->load->view('ukm/bkm', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function or()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['or'] = $this->dataukm_model->getDataOr();
			$this->load->view('ukm/or', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function pasti()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['pasti'] = $this->dataukm_model->getDataPasti();
			$this->load->view('ukm/pasti', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function plfm()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['plfm'] = $this->dataukm_model->getDataPlfm();
			$this->load->view('ukm/plfm', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function rispol()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['rispol'] = $this->dataukm_model->getDataRispol();
			$this->load->view('ukm/rispol', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function talitakum()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['talitakum'] = $this->dataukm_model->getDataTalitakum();
			$this->load->view('ukm/talitakum', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function teater()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['theatristic'] = $this->dataukm_model->getDataTheatristic();
			$this->load->view('ukm/theatristic', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function usma()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['usma'] = $this->dataukm_model->getDataUsma();
			$this->load->view('ukm/usma', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

}

/* End of file dataukm.php */
/* Location: ./application/controllers/dataukm.php */