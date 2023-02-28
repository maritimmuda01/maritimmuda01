<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     //is_logged_in();
    // }

    public function index()
    {
        $data['title'] = 'Lowongan Pekerjaan';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['karir'] = $this->db->get('karir')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('karir/karir', $data);
        $this->load->view('templates/footer', $data);
    }

    public function insertdata()
    {
        $this->load->model('Modelkarir');
        $this->load->library('upload');

        $data['title'] = 'Lowongan Pekerjaan';   
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['karir'] = $this->db->get('karir')->result_array();

        $this->form_validation->set_rules('posisi', 'Poster', 'trim');
        $this->form_validation->set_rules('lembaga', 'Lembaga', 'trim');
        $this->form_validation->set_rules('link', 'Link', 'trim');
        $this->form_validation->set_rules('batas_daftar', 'Batas Daftar', 'trim');

        if($this->form_validation->run() == false){

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kegiatan/kegiatan', $data);
            $this->load->view('templates/footer', $data); 

        }

        
        $posisi  = $this->input->post('posisi');
        $lembaga = $this->input->post('lembaga');
        $link = $this->input->post('link');
        $batas_daftar = $this->input->post('batas_daftar');

  
        // get foto
        $config['upload_path'] = './assets2/img/karir/';
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
                                'posisi'        => $posisi,
                                'lembaga'       => $lembaga,
                                'link'          => $link,
                                'batas_daftar'  => $batas_daftar,
                                'poster'        => $poster['file_name'],
                              );

        $this->Modelkarir->insert($data);

        $this->session->set_flashdata('message', 
                                    '<div class="alert alert-success" role="alert">
                                        Data Berhasil Di Tambahkan
                                    </div>'
                                );
        redirect('karir');
        
                            //redirect('kegiatan')
        } else {

            $this->session->set_flashdata('message', 
                                        '<div class="alert alert-danger" role="alert">
                                            Upload gambar gagal!
                                        </div>'
                                        );
            redirect('karir');            
            //die("gagal upload");
        }

        }else {

            $this->session->set_flashdata('message', 
                                            '<div class="alert alert-danger" role="alert">
                                                Input data gagal.!
                                            </div>'
                                        );
            redirect('karir');            
            //echo "tidak masuk";
        }
  
    }
    
    public function delete($id,$poster)
	{
        $path = './assets2/img/karir/';
        @unlink($path.$poster);

		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('karir');
		}else{
			$this->db->where('id', $id);
			$this->db->delete('karir');
            $this->session->set_flashdata('message', 
                                            '<div class="alert alert-success" role="alert">
                                                Data Berhasil di hapus.!
                                            </div>'
                                        );
            redirect('karir');  
		}
    }
    
    public function deletedata($id,$poster)
    {
        $this->load->model('Modelkarir');
        //$this->load->library('upload');

        $path = './assets2/img/karir/';
        @unlink($path.$poster);
  
        $where = array('id' => $id );
        $this->Modelkarir->delete($where);
        $this->session->set_flashdata('message', 
                                        '<div class="alert alert-success" role="alert">
                                                Data Berhasil Dihapus.!
                                            </div>'
                                        );
        redirect('karir'); 
        //return redirect('karir');
    }

}