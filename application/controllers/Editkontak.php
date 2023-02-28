<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editkontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get('user')->result_array();   
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
        $data['user'] = $this->db->get('user')->result_array(); 
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        
   
        $data['provinsi'] = $this->db->get('master_provinsi')->result_array();
        $data['keahlian'] = $this->db->get('master_bidang_keahlian')->result_array();
        $data['pendidikan'] = $this->db->get('master_pendidikan')->result_array();
        $data['pekerjaan'] = $this->db->get('master_pekerjaan')->result_array();


        $this->form_validation->set_rules('name', 'Full Name', 'trim');
        $this->form_validation->set_rules('email', 'Email', 'trim');

        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim');
        $this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'trim');
        $this->form_validation->set_rules('jns_keanggotaan', 'Jenis Keanggotaan', 'trim');
        $this->form_validation->set_rules('bidang_keahlian', 'Bidang Keahlian', 'trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim');
        $this->form_validation->set_rules('instansi_pekerjaan', 'Instansi Pekerjaan', 'trim');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim');
        $this->form_validation->set_rules('akun_instagram', 'Akun Instagram', 'trim');
        $this->form_validation->set_rules('akun_linkedin', 'Akun Linkedin', 'trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim');
        $this->form_validation->set_rules('bio_singkat', 'Bio Singkat', 'trim|max_length[1200]');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim');
        $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'trim');
        $this->form_validation->set_rules('thn_tamat', 'Tahun Tamat', 'trim');
        $this->form_validation->set_rules('organisasi', 'Organisasi', 'trim');
        $this->form_validation->set_rules('prestasi', 'Prestasi', 'trim');
        $this->form_validation->set_rules('karya_ilmiah', 'Karya Ilmiah', 'trim');
        $this->form_validation->set_rules('pengabdian', 'Pengabdian', 'trim');
        $this->form_validation->set_rules('penelitian', 'Penelitian', 'trim');

        $this->form_validation->set_rules('alamat_domisili', 'Alamat Domisili', 'trim');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim');
        $this->form_validation->set_rules('sedang_studi', 'Studi', 'trim');
        $this->form_validation->set_rules('jabatan_organisasi', 'Jabatan Organisasi', 'trim');
        $this->form_validation->set_rules('penyelenggara_prestasi', 'Penyelenggara Prestasi', 'trim');
        $this->form_validation->set_rules('jenis_karya_ilmiah', 'Jenis Karya Ilmiah', 'trim');
        $this->form_validation->set_rules('posisi_pengabdian', 'Posisi Pengabdian', 'trim');
        $this->form_validation->set_rules('penyelenggara_pengabdian', 'Penyelenggara Pengabdian', 'trim');
        $this->form_validation->set_rules('tahun_pengabdian', 'Tahun Pengabdian', 'trim');
        $this->form_validation->set_rules('posisi_penelitian', 'Posisi Penelitian', 'trim');
        $this->form_validation->set_rules('sumber_dana', 'Sumber Dana', 'trim');
        $this->form_validation->set_rules('instansi_penelitian', 'Instansi Penelitian', 'trim');
        $this->form_validation->set_rules('tahun_penelitian', 'Tahun Penelitian', 'trim');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'trim');
        $this->form_validation->set_rules('periode', 'Periode', 'trim');
        $this->form_validation->set_rules('tahun_prestasi', 'Tahun Prestasi', 'trim');
        $this->form_validation->set_rules('tahun_karya_ilmiah', 'Tahun Karya Ilmiah', 'trim');

        $this->form_validation->set_rules('bidang_keahlian2', 'Bidang Keahlian 2', 'trim');
        $this->form_validation->set_rules('kegiatan_prestasi', 'Kegiatan Prestasi', 'trim');
        $this->form_validation->set_rules('tingkat_prestasi', 'Tingkat Prestasi', 'trim');
        $this->form_validation->set_rules('penulis_karya_ilmiah', 'Penulis Karya Ilmiah', 'trim');
        $this->form_validation->set_rules('penerbit_karya_ilmiah', 'Penerbit Karya Ilmiah', 'trim');
        $this->form_validation->set_rules('kota', 'Kota', 'trim');
        $this->form_validation->set_rules('no_anggota', 'Nomor Anggota', 'trim');
        $this->form_validation->set_rules('file_kta', 'File KTA', 'trim');

        
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

            $bidang_keahlian2 = $this->input->post('bidang_keahlian2');
            $kegiatan_prestasi = $this->input->post('kegiatan_prestasi');
            $tingkat_prestasi = $this->input->post('tingkat_prestasi');
            $penulis_karya_ilmiah = $this->input->post('penulis_karya_ilmiah');
            $penerbit_karya_ilmiah = $this->input->post('penerbit_karya_ilmiah');
            $kota = $this->input->post('kota');
            $no_anggota = $this->input->post('no_anggota');
            $file_kta = $this->input->post('file_kta');

            
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets2/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets2/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }


            $this->db->set('name', $name);
            $this->db->set('email', $email);

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
            
            $this->db->set('bidang_keahlian2', $bidang_keahlian2);
            $this->db->set('kegiatan_prestasi', $kegiatan_prestasi);
            $this->db->set('tingkat_prestasi', $tingkat_prestasi);
            $this->db->set('penulis_karya_ilmiah', $penulis_karya_ilmiah);
            $this->db->set('penerbit_karya_ilmiah', $penerbit_karya_ilmiah);
            $this->db->set('kota', $kota);
            $this->db->set('no_anggota', $no_anggota);
            $this->db->set('file_kta', $file_kta);

            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', 
                                          '<div class="alert alert-success" role="alert">
                                                Data Berhasil Di Update.!
                                           </div>'
                                        );
            redirect('user');
        }

    }






}