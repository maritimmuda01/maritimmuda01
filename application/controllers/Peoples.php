<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Peoples';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        //load model
		$this->load->model('Peoples_model', 'peoples');

		// load libaray
        $this->load->library('pagination');
        
        //ambil data searching

        if($this->input->post('submit')){

            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);

        } else{
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $config['base_url'] = 'http://localhost:8081/maritim/maritimmuda-home/peoples/index';
        $this->db->like('name', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;
        

		//initialize
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
