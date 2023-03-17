<?php

class tes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->model('berita_model');
        $this->load->database();
    }
    function index()
    {
        $data['berita'] = $this->berita_model->tampil_berita();
        $this->load->view('isi_depan', $data);
        //$data['lang'] = $this->session->userdata('language');    
        //$this->load->view('translate',$data);
    }
    function detail()
    {
        $id = $this->uri->segment(3);
        $data['berita'] = $this->berita_model->detail_berita($id);
        $data['lang'] = $this->session->userdata('language');
        $this->load->view('detail', $data);
        //$data['lang'] = $this->session->userdata('language');
        //$this->load->view('translate',$data);    
    }
    function languages()
    {
        extract($_POST);
        $id = $this->input->post('det');
        $this->session->set_userdata('language', $dlang);
        echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "index.php/tes/detail/" . $id . "'>";
    }
}
