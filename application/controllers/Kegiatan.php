<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'Kegiatan';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kegiatan'] = $this->db->get('kegiatan')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kegiatan/kegiatan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function insertdata()
    {
        $this->load->model('Modelkegiatan');
        $this->load->library('upload');

        $data['title'] = 'Kegiatan';   
        $data['kegiatan'] = $this->db->get('kegiatan')->result_array();

        $this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan', 'trim');
        $this->form_validation->set_rules('hari', 'Hari', 'trim');
        $this->form_validation->set_rules('tgl_kegiatan', 'Tanggal Kegiatan', 'trim');
        $this->form_validation->set_rules('pukul', 'Pukul', 'trim');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'trim');
        $this->form_validation->set_rules('link_daftar', 'Batas Daftar', 'trim');
        $this->form_validation->set_rules('tempat', 'Tempat', 'trim');
        $this->form_validation->set_rules('jns_kegiatan', 'Jenis Kegiatan', 'trim');

        // $this->form_validation->set_rules('poster', 'Poster', 'trim');


        if($this->form_validation->run() == false){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kegiatan/kegiatan', $data);
            $this->load->view('templates/footer', $data); 

        }

        
        $nama_kegiatan  = $this->input->post('nama_kegiatan');
        $hari = $this->input->post('hari');
        $tgl_kegiatan = $this->input->post('tgl_kegiatan');
        $pukul = $this->input->post('pukul');
        $penyelenggara = $this->input->post('penyelenggara');
        $link_daftar = $this->input->post('link_daftar');
        $tempat = $this->input->post('tempat');
        $jns_kegiatan = $this->input->post('jns_kegiatan');

        // $poster = $this->input->post('poster');


        // get foto
        $config['upload_path'] = './assets2/img/kegiatan/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['max_size'] = '2048';  //2MB max
        $config['max_width'] = '4480'; // pixel
        $config['max_height'] = '4480'; // pixel

        $config['file_name'] = $_FILES['poster']['name'];
  
        $this->upload->initialize($config);
  
          if (!empty($_FILES['poster']['name'])) {
              if ( $this->upload->do_upload('poster') ) {
                  $poster = $this->upload->data();
                  $data = array(
                                'nama_kegiatan' => $nama_kegiatan,
                                'hari'          => $hari,
                                'tgl_kegiatan'  => $tgl_kegiatan,
                                'pukul'         => $pukul,
                                'penyelenggara' => $penyelenggara,
                                'link_daftar'   => $link_daftar,
                                'tempat'        => $tempat,
                                'jns_kegiatan'  => $jns_kegiatan,
                                'poster'        => $poster['file_name'],
                              );

        $this->Modelkegiatan->insert($data);

        $this->session->set_flashdata('message', 
                                    '<div class="alert alert-success" role="alert">
                                        Data Berhasil Di Tambahkan
                                    </div>'
                                );
        redirect('kegiatan');
        
                            
        } else {

            $this->session->set_flashdata('message', 
                                        '<div class="alert alert-danger" role="alert">
                                            Upload gambar gagal!
                                        </div>'
                                        );
            redirect('kegiatan');            
          
        }

        }else {

            $this->session->set_flashdata('message', 
                                            '<div class="alert alert-danger" role="alert">
                                                Input data gagal.!
                                            </div>'
                                        );
            redirect('kegiatan');            
           
        }
  
    }

    public function deletedata($id, $poster)
    {
        $this->load->model('Modelkegiatan');
        $path = './assets2/img/kegiatan/';
        @unlink($path.$poster);
  
        $where = array('id' => $id );
        $this->Modelkegiatan->delete($where);
  
        $this->session->set_flashdata('message', 
                                      '<div class="alert alert-success" role="alert">
                                          Data Berhasil Dihapus.!
                                      </div>'
                                  );
        redirect('kegiatan');
        
    }
    

}