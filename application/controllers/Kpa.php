<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpa extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['member'] = $this->db->get('user')->result_array();

		$this->load->view('user/kpa', $data);
	}
}
