<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'Beasiswa';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['beasiswa'] = $this->db->get('beasiswa')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('beasiswa/beasiswa', $data);
        $this->load->view('templates/footer', $data);
    }

    public function insertdata()
    {
        $this->load->model('Modelbeasiswa');
        $this->load->library('upload');

        $data['title'] = 'Beasiswa';   
        $data['beasiswa'] = $this->db->get('beasiswa')->result_array();

        $this->form_validation->set_rules('nama_beasiswa', 'Nama Beasiswa', 'trim');
        $this->form_validation->set_rules('link', 'Link', 'trim');
        $this->form_validation->set_rules('batas_daftar', 'Batas Daftar', 'trim');


        if($this->form_validation->run() == false){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('beasiswa/beasiswa', $data);
            $this->load->view('templates/footer', $data); 

        }

        
        $nama_beasiswa  = $this->input->post('nama_beasiswa');
        $link = $this->input->post('link');
        $batas_daftar = $this->input->post('batas_daftar');


        // get foto
        $config['upload_path'] = './assets2/img/beasiswa/';
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
                                'nama_beasiswa' => $nama_beasiswa,
                                'link'          => $link,
                                'batas_daftar'  => $batas_daftar,
                                'poster'        => $poster['file_name'],
                              );

        $this->Modelbeasiswa->insert($data);

        $this->session->set_flashdata('message', 
                                    '<div class="alert alert-success" role="alert">
                                        Data Berhasil Di Tambahkan
                                    </div>'
                                );
        redirect('beasiswa');
        
                            
        } else {

            $this->session->set_flashdata('message', 
                                        '<div class="alert alert-danger" role="alert">
                                            Upload gambar gagal!
                                        </div>'
                                        );
            redirect('beasiswa');            
          
        }

        }else {

            $this->session->set_flashdata('message', 
                                            '<div class="alert alert-danger" role="alert">
                                                Input data gagal.!
                                            </div>'
                                        );
            redirect('beasiswa');            
           
        }
  
    }

    public function deletedata($id, $poster)
    {
        $this->load->model('Modelbeasiswa');
        $path = './assets2/img/beasiswa/';
        @unlink($path.$poster);
  
        $where = array('id' => $id );
        $this->Modelbeasiswa->delete($where);
  
        $this->session->set_flashdata('message', 
                                      '<div class="alert alert-danger" role="alert">
                                          Data Berhasil Dihapus.!
                                      </div>'
                                  );
        redirect('beasiswa');
        
    }
    

}