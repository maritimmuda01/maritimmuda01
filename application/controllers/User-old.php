<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {


        $data['title'] = 'Edit Profile';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
   
        $data['provinsi'] = $this->db->get('master_provinsi')->result_array();
        $data['keahlian'] = $this->db->get('master_bidang_keahlian')->result_array();
        $data['pendidikan'] = $this->db->get('master_pendidikan')->result_array();




        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('jns_keanggotaan', 'Jenis Keanggotaan', 'trim|required');
        $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('instansi_pekerjaan', 'Instansi Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('akun_instagram', 'Akun Instagram', 'trim|required');
        $this->form_validation->set_rules('akun_linkedin', 'Akun Linkedin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('bio_singkat', 'Bio Singkat', 'trim|required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required');
        $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'trim|required');
        $this->form_validation->set_rules('thn_tamat', 'Tahun Tamat', 'trim|required');
        $this->form_validation->set_rules('organisasi', 'Organisasi', 'trim|required');
        $this->form_validation->set_rules('prestasi', 'Prestasi', 'trim|required');
        $this->form_validation->set_rules('karya_ilmiah', 'Karya Ilmiah', 'trim|required');
        $this->form_validation->set_rules('pengabdian', 'Pengabdian', 'trim|required');
        $this->form_validation->set_rules('penelitian', 'Penelitian', 'trim|required');

        $this->form_validation->set_rules('alamat_domisili', 'Alamat Domisili', 'trim|required');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
        $this->form_validation->set_rules('sedang_studi', 'Sedang Studi', 'trim|required');
        $this->form_validation->set_rules('jabatan_organisasi', 'Jabatan Organisasi', 'trim|required');
        $this->form_validation->set_rules('penyelenggara_prestasi', 'Penyelenggara Prestasi', 'trim|required');
        $this->form_validation->set_rules('jenis_karya_ilmiah', 'Jenis Karya Ilmiah', 'trim|required');
        $this->form_validation->set_rules('posisi_pengabdian', 'Posisi Pengabdian', 'trim|required');
        $this->form_validation->set_rules('penyelenggara_pengabdian', 'Penyelenggara Pengabdian', 'trim|required');
        $this->form_validation->set_rules('tahun_pengabdian', 'Tahun Pengabdian', 'trim|required');
        $this->form_validation->set_rules('posisi_penelitian', 'Posisi Penelitian', 'trim|required');
        $this->form_validation->set_rules('sumber_dana', 'Sumber Dana', 'trim|required');
        $this->form_validation->set_rules('instansi_penelitian', 'Instansi Penelitian', 'trim|required');
        $this->form_validation->set_rules('tahun_penelitian', 'Tahun Penelitian', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
        $this->form_validation->set_rules('periode', 'Periode', 'trim|required');
        $this->form_validation->set_rules('tahun_prestasi', 'Tahun Prestasi', 'trim|required');
        $this->form_validation->set_rules('tahun_karya_ilmiah', 'Tahun Karya Ilmiah', 'trim|required');



        if ($this->form_validation->run() == false)
        {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        }else{

            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $tmpt_lahir = $this->input->post('tmpt_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $jns_kelamin = $this->input->post('jns_kelamin');
            $jns_keanggotaan = $this->input->post('jns_keanggotaan');
            $bidang_keahlian = $this->input->post('bidang_keahlian');
            $pekerjaan = $this->input->post('pekerjaan');
            $instansi_pekerjaan = $this->input->post('instansi_pekerjaan');
            $provinsi = $this->input->post('provinsi');
            $no_hp = $this->input->post('no_hp');
            $akun_instagram = $this->input->post('akun_instagram');
            $akun_linkedin = $this->input->post('akun_linkedin');
            $alamat = $this->input->post('alamat');
            $bio_singkat = $this->input->post('bio_singkat');
            $pendidikan = $this->input->post('pendidikan');
            $thn_masuk = $this->input->post('thn_masuk');
            $thn_tamat = $this->input->post('thn_tamat');
            $organisasi = $this->input->post('organisasi');
            $prestasi = $this->input->post('prestasi');
            $karya_ilmiah = $this->input->post('karya_ilmiah');
            $pengabdian = $this->input->post('pengabdian');
            $penelitian = $this->input->post('penelitian');

            $alamat_domisili = $this->input->post('alamat_domisili');
            $nama_sekolah = $this->input->post('nama_sekolah');
            $sedang_studi = $this->input->post('sedang_studi');
            $jabatan_organisasi = $this->input->post('jabatan_organisasi');
            $penyelenggara_prestasi = $this->input->post('penyelenggara_prestasi');
            $jenis_karya_ilmiah = $this->input->post('jenis_karya_ilmiah');
            $posisi_pengabdian = $this->input->post('posisi_pengabdian');
            $penyelenggara_pengabdian = $this->input->post('penyelenggara_pengabdian');
            $tahun_pengabdian = $this->input->post('tahun_pengabdian');
            $posisi_penelitian = $this->input->post('posisi_penelitian');
            $sumber_dana = $this->input->post('sumber_dana');
            $instansi_penelitian = $this->input->post('instansi_penelitian');
            $tahun_penelitian = $this->input->post('tahun_penelitian');
            $jurusan = $this->input->post('jurusan');
            $periode = $this->input->post('periode');
            $tahun_prestasi = $this->input->post('tahun_prestasi');
            $tahun_karya_ilmiah = $this->input->post('tahun_karya_ilmiah');




            // cek jika ada gambar yang akan di upload

            // validasi ukuran gambar upload

            $upload_image = $_FILES['image']['name'];

            if ($upload_image){

                $config['upload_path']          = './assets2/img/profile/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = '2048';
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')){
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg'){
                        unlink(FCPATH . 'assets2/img/profile/' . $old_image);
                    }


                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('tmpt_lahir', $tmpt_lahir);
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('jns_kelamin', $jns_kelamin);
            $this->db->set('jns_keanggotaan', $jns_keanggotaan);
            $this->db->set('bidang_keahlian', $bidang_keahlian);
            $this->db->set('pekerjaan', $pekerjaan);
            $this->db->set('instansi_pekerjaan', $instansi_pekerjaan);
            $this->db->set('provinsi', $provinsi);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('akun_instagram', $akun_instagram);
            $this->db->set('akun_linkedin', $akun_linkedin);
            $this->db->set('alamat', $alamat);
            $this->db->set('bio_singkat', $bio_singkat);
            $this->db->set('pendidikan', $pendidikan);
            $this->db->set('thn_masuk', $thn_masuk);
            $this->db->set('thn_tamat', $thn_tamat);
            $this->db->set('organisasi', $organisasi);
            $this->db->set('prestasi', $prestasi);
            $this->db->set('karya_ilmiah', $karya_ilmiah);
            $this->db->set('pengabdian', $pengabdian);
            $this->db->set('penelitian', $penelitian);

            $this->db->set('alamat_domisili', $alamat_domisili);
            $this->db->set('nama_sekolah', $nama_sekolah);
            $this->db->set('sedang_studi', $sedang_studi);
            $this->db->set('jabatan_organisasi', $jabatan_organisasi);
            $this->db->set('penyelenggara_prestasi', $penyelenggara_prestasi);
            $this->db->set('jenis_karya_ilmiah', $jenis_karya_ilmiah);
            $this->db->set('posisi_pengabdian', $posisi_pengabdian);
            $this->db->set('penyelenggara_pengabdian', $penyelenggara_pengabdian);
            $this->db->set('tahun_pengabdian', $tahun_pengabdian);
            $this->db->set('posisi_penelitian', $posisi_penelitian);
            $this->db->set('sumber_dana', $sumber_dana);
            $this->db->set('instansi_penelitian', $instansi_penelitian);
            $this->db->set('tahun_penelitian', $tahun_penelitian);
            $this->db->set('jurusan', $jurusan);
            $this->db->set('periode', $periode);
            $this->db->set('tahun_prestasi', $tahun_prestasi);
            $this->db->set('tahun_karya_ilmiah', $tahun_karya_ilmiah);

            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', 
                                          '<div class="alert alert-success" role="alert">
                                                Data Berhasil Di Update
                                           </div>'
                                        );
            redirect('user');
        }

    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';   
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Change Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Change Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Change Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false)
        {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');

        } else {

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if(!password_verify($current_password, $data['user']['password'])){

                $this->session->set_flashdata('message', 
                                '<div class="alert alert-danger" role="alert">
                                    Current Password Salah
                                </div>'
                            );
                redirect('user/changepassword');
            }else{
                if($current_password == $new_password){

                    $this->session->set_flashdata('message', 
                                    '<div class="alert alert-danger" role="alert">
                                        New Password Tidak Boleh sama dengan Current Password
                                    </div>'
                                );
                    redirect('user/changepassword');

                }else{

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', 
                                    '<div class="alert alert-success" role="alert">
                                        Password Berhasil Di ubah
                                    </div>'
                                );
                    redirect('user/changepassword');
                }
            }

        }

    }



    public function infokegiatan(){
        redirect('infokegiatan');
    }

    public function memberlain(){
        redirect('memberlain');
    }





}