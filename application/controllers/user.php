<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('admin_ukm_model');
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
			$user = $this->user_model->getUserFromUser($id);
			if (count($user) > 0) {
				$this->load->view('user/home_user', $data);
			}
			else{
				redirect('user/register_user','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function create()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password2', 'Retype Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/create_user');
		} else {
			$pass = $this->input->post('password');
			$pass2 = $this->input->post('password2');
			if ($pass == $pass2) {
				$this->user_model->create_user();
				redirect('login_controller','refresh');
			}
			else{
				$this->load->view('user/create_user');
			}
		}
	}

	public function register_user()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$user = $this->user_model->getUserFromUser($id);
			$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
			$this->form_validation->set_rules('nim', 'NIM', 'trim|required|is_unique[user.nim]');
			$data['ukm'] = $this->admin_ukm_model->getDataUkm();
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('user/register_user', $data);
			} else {
				$ukm = $this->input->post('fk_ukm');
				$dataukm = $this->user_model->getUkm($ukm);
				foreach ($dataukm as $key) {
					$namart = $key->nama_rt;
					$cprt = $key->cp_rt;
				}
				$this->user_model->register_user($id,$namart,$cprt);
				redirect('user','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */