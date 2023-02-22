<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infokarir extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'Info Lowongan Pekerjaan';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['karir'] = $this->db->get('karir')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/info_karir', $data);
        $this->load->view('templates/footer', $data);
    }



}