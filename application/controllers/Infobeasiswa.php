<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infobeasiswa extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'Info Beasiswa';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['beasiswa'] = $this->db->get('beasiswa')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/info_beasiswa', $data);
        $this->load->view('templates/footer', $data);
    }

   
    

}