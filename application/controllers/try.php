<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class try extends CI_Controller {

	public function output()
	{
		$bil1 = $this->input->post('bil1');
		$bil2 = $this->input->post('bil2');
		$pilihan = $this->input->post('pilihan');
		$hasil_akhir = 0;

		if ($pilihan == "+") {
			$hasil_akhir = $bil1 + $bil2;
		}
		elseif ($pilihan == "-") {
			$hasil_akhir = $bil1 - $bil2;
		}
		elseif ($pilihan == "*") {
			$hasil_akhir = $bil1 * $bil2;
		}
		elseif ($pilihan == "/") {
			$hasil_akhir = $bil1 / $bil2;
		}

		$bil1['bil1'] = $bil1;
		$bil2['bil2'] = $bil2;
		$pilihan['pilihan'] = $pilihan;
		$output['hasil_akhir'] = $output;
		$this->load->view('Try', $data, FALSE);
	}

	public function public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('Try');
	}

}

/* End of file try.php */
/* Location: ./application/controllers/try.php */