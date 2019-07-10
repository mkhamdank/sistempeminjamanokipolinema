<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];

			$data['username'] = $username;

			if ($level == 1) {
				$this->load->view('admin/home_admin',$data);
			}
			else if ($level == 2) {
				redirect('admin_ukm_controller','refresh');
			}
			else if ($level == 3) {
				redirect('user','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function awal()
	{
		$this->load->view('view_peminjaman_awal');
	}

	public function dataukm()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];

			$data['username'] = $username;
			$data['dataukm'] = $this->admin_model->getUkm();
			$this->load->view('admin/view_data_ukm', $data, FALSE);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function user()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];

			$data['username'] = $username;
			$data['datauser'] = $this->admin_model->getDataUser();
			$this->load->view('admin/view_data_user', $data);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function create_user()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('password2', 'Password2', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/tambah_user',$data);
			} else {
				$this->admin_model->createUser();
				redirect('admin_controller/user','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function edit_user($id_user)
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];
			$id = $session_data['id'];
			$data['username'] = $username;
			$data['user'] = $this->admin_model->getDataUserById($id_user);
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('level', 'level', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/edit_user',$data);
			} else {
				$this->admin_model->editUser($id_user);
				redirect('admin_controller/user','refresh');
			}
		}
		else{
			redirect('login_controller','refresh');
		}
	}

	public function delete_user($id)
	{
		$this->admin_model->deleteUser($id);
		redirect('admin_controller/user','refresh');
	}

	public function peminjam()
	{
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$username = $session_data['username'];
			$password = $session_data['password'];
			$level = $session_data['level'];

			$data['username'] = $username;
			$data['datapeminjam'] = $this->admin_model->getPeminjam();
			$this->load->view('admin/view_data_peminjam', $data, FALSE);
		}
		else{
			redirect('login_controller','refresh');
		}
	}

}

/* End of file admin_controller.php */
/* Location: ./application/controllers/admin_controller.php */