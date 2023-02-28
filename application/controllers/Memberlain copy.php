<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memberlain extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('filter','user');
	}

    public function index()
    {

        $this->load->helper('url');
		$this->load->helper('form');
		
		$provinsies = $this->user->get_list_provinsies();

		$opt = array('' => 'All Country');
		foreach ($provinsies as $provinsi) {
			$opt[$provinsi] = $provinsi;
		}

		$data['form_provinsi'] = form_dropdown('',$opt,'','id="provinsi" class="form-control"');
		// $this->load->view('customers_view', $data);


        $data['title'] = 'Temukan Member Lain';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->db->get('user')->result_array();
        $data['nama_provinsi'] = $this->db->get('master_provinsi')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('memberlain/index', $data);
        $this->load->view('templates/footer', $data);
    }

	public function ajax_list()
	{
		$list = $this->user->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $user) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $user->image;
			$row[] = $user->name;
			$row[] = $user->jns_keanggotaan;
			$row[] = $user->provinsi;


			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->user->count_all(),
						"recordsFiltered" => $this->user->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


}
