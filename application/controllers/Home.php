<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	protected $data = [];
	public function __construct(){
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('url');
		$this->data['title']='Maritim Muda Nusantara | ';
		$this->data['head_script'] = $this->load->view('partial/home_head_script', $this->data, TRUE);
		$this->data['page_css'] = $this->load->view('partial/home_css', $this->data, TRUE);
		$this->data['page_js'] = $this->load->view('partial/home_js', $this->data, TRUE);
		$this->data['foot_script'] = $this->load->view('partial/home_foot_script', $this->data, TRUE);
		$this->data['footer'] = $this->load->view('partial/home_footer', $this->data, TRUE);
		$this->data['header'] = $this->load->view('partial/home_header', $this->data, TRUE);
		$this->data['konten'] = $this->load->view('page/home_konten', $this->data, TRUE);
    }
	public function index(){
		$this->load->model('media');
		$data=$this->data;

		$data['berita'] = $this->media->latest_post(6);
		// $data['berita'] = array();
		$data['title'] .= " Beranda";
		$data['konten'] = $this->load->view('page/home_konten', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template',$data);
	}
	public function mercusuar(){
		$data=$this->data;
		$data['title'] .= " Mercusuar";
		$data['konten'] = $this->load->view('page/home_mercusuar', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_mercusuar',$data);
	}
	public function tentang(){
		$data=$this->data;
		$data['title'] .= " Tentang";
		$data['konten'] = $this->load->view('page/home_tentang', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function sambutan(){
		$data=$this->data;
		$data['title'] .= " Sambutan";
		$data['konten'] = $this->load->view('page/home_sambutan', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function sejarah(){
		$data=$this->data;
		$data['title'] .= " Sejarah";
		$data['konten'] = $this->load->view('page/home_sejarah', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function visi_misi(){
		$data=$this->data;
		$data['title'] .= " Visi Misi";
		$data['konten'] = $this->load->view('page/home_visi_misi', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function penasihat_pusat_pengawas(){
		$data=$this->data;
		$data['title'] .= " Penasihat Pusat dan Dewan Pengawas";
		$data['konten'] = $this->load->view('page/home_penasihat_pengawas', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function pengurus(){
		$data=$this->data;
		$data['title'] .= " Pengurus Pusat";
		$data['konten'] = $this->load->view('page/home_pengurus', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function ketua_daerah(){
		$data=$this->data;
		$data['title'] .= " Ketua Daerah";
		$data['konten'] = $this->load->view('page/home_ketua_daerah', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function ketua_cabang(){
		$data=$this->data;
		$data['title'] .= " Ketua Cabang";
		$data['konten'] = $this->load->view('page/home_ketua_cabang', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function nawasatya(){
		$data=$this->data;
		$data['title'] .= " Nawa Satya";
		$data['konten'] = $this->load->view('page/home_nawasatya', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function program(){
		$data=$this->data;
		$data['title'] .= " Program";
		$data['konten'] = $this->load->view('page/home_program', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function saptabakti(){
		$data=$this->data;
		$data['title'] .= " Program Sapta Bakti";
		$data['konten'] = $this->load->view('page/home_saptabakti', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function prestasi(){
		$data=$this->data;
		$data['title'] .= " Prestasi";
		$data['konten'] = $this->load->view('page/home_prestasi', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function intern(){
		$data=$this->data;
		$data['title'] .= " Info Internship";
		$data['konten'] = $this->load->view('page/home_intern', $data, TRUE);
		$data['head_script'] = $this->load->view('partial/home_head_script', $data, TRUE);
		$this->load->view('template_white',$data);
	}
	public function test()
	{
		
	}
}
