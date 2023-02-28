<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
        if($this->session->userdata('email')){

            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){

            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else{
            $this->_login();
        }
        
    }
    
    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // var_dump($user);
        // die;

        //jika usernya ada
        if($user){
            //jika usernya aktif
            if($user['is_active'] == 1){
                //cek password user
                if(password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1) {
                        redirect('admin');
                    }else{
                        redirect('user');
                    }

                   


                }else{
                    $this->session->set_flashdata('message', 
                                                    '<div class="alert alert-danger" role="alert">
                                                       Password Salah
                                                    </div>'
                                                    );
                    redirect('auth'); 
                }


            }  else{
                $this->session->set_flashdata('message', 
                                                '<div class="alert alert-danger" role="alert">
                                                    Email Belum Diaktivasi
                                                </div>'
                                                );
                redirect('auth'); 
            } 
        }else{
            $this->session->set_flashdata('message', 
                                            '<div class="alert alert-danger" role="alert">
                                                Email Belum Terdaftar
                                            </div>'
                                            );
            redirect('auth'); 
        }
    }

    public function registration()
    {

        if($this->session->userdata('email')){

            redirect('user');
        }
                
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email','required|trim|valid_email|is_unique[user.email]', 
        [
            'is_unique' => 'This Email has already registered !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',
        [
            'matches' => 'Password Dont Match !',
            'min_length' => 'Password Too Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false){

            $data['title'] = 'Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else{

            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];


            //siapkan token

            $token = base64_encode(random_bytes(32));

            $user_token = [

                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            // var_dump($token);
            // die;

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);


            $this->_sendEmail($token, 'verify');


            $this->session->set_flashdata('message', 
                                          '<div class="alert alert-success" role="alert">
                                                Akun Anda Berhasil Di Buat! Silahkan Cek Email Anda Aktivasi Akun
                                           </div>'
                                        );
            redirect('auth');

        }
    }

    private function _sendEmail($token, $type){

        $config = [

            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'maritimmuda1@gmail.com',
            'smtp_pass' => 'Maritim@muda99',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email', $config);  
        $this->email->initialize($config); 


        $this->email->from('maritimmuda1@gmail.com', 'Maritim Muda Official');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {

            $this->email->subject('Verifikasi Akun');
            $this->email->message('Klik Link untuk Aktivasi Akun Anda:
                                    <a class="btn btn-primary" href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktif Akun</a>
                                  ');
        }else if($type == 'forgot') {

            $this->email->subject('Reset Password');
            $this->email->message('Klik Link untuk Reset Password Anda:
                                    <a href="'. base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>
                                  ');

        }

        if ($this->email->send()) {
           return true; 
        }else{

            echo $this->email->print_debugger();
            die;

        }
        
    }

    public function verify(){

        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {

            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if($user_token) {
                if(time() - $user_token['date_created'] < (60*60*24)) {

                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');


                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', 
                                        '<div class="alert alert-success" role="alert">
                                            '. $email .' Berhasil Diaktivasi! Silahkan Login
                                        </div>'
                                    );
                    redirect('auth');


                }else{
                    
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);


                    $this->session->set_flashdata('message', 
                                    '<div class="alert alert-danger" role="alert">
                                    Aktivasi akun gagal! Token Expired!
                                    </div>'
                                );
                    redirect('auth');
                }
            }else{

                $this->session->set_flashdata('message', 
                                '<div class="alert alert-danger" role="alert">
                                Aktivasi akun gagal! Token Invalid
                                </div>'
                            );
                redirect('auth');

            }

        }else{

            $this->session->set_flashdata('message', 
                                            '<div class="alert alert-danger" role="alert">
                                            Aktivasi akun gagal! Email salah
                                            </div>'
                                        );
             redirect('auth');

        }
    }




    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');


        $this->session->set_flashdata('message', 
                                        '<div class="alert alert-success" role="alert">
                                           Anda Berhasil Logout
                                        </div>'
                                    );
        redirect('auth');
    }



    public function blocked() {
        $this->load->view('auth/blocked');
    }


    public function forgotPassword()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if($this->form_validation->run() == false) {

            $data['title'] = 'Forgot Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgot-password');
            $this->load->view('templates/auth_footer');

        }else{

            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if($user){

                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', 
                                            '<div class="alert alert-danger" role="alert">
                                            Silahkan Cek Email untuk Reset Password
                                            </div>'
                                        );
                            redirect('auth/forgotpassword');


            }else{


                $this->session->set_flashdata('message', 
                                '<div class="alert alert-danger" role="alert">
                                Email Belum Terdaftar atau belum Aktif
                                </div>'
                            );
                redirect('auth/forgotpassword');

            }
        }

    }


    public function resetpassword() {

        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {

            $user_token = $this->db->get_where('user_token', ['token' =>$token])->row_array();

            if($user_token){

                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();

            }else{
                $this->session->set_flashdata('message', 
                            '<div class="alert alert-danger" role="alert">
                            Reset Password Gagal! Token Salah
                            </div>'
                        );
                redirect('auth');
            }
        

        }else{
            $this->session->set_flashdata('message', 
                        '<div class="alert alert-danger" role="alert">
                        Reset Password Gagal ! Email Salah
                        </div>'
                    );
            redirect('auth');
        }
    }

    public function changePassword(){


        if(!$this->session->userdata('reset_email')){
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

        if($this->form_validation->run() == false){

            $data['title'] = 'Change Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/change-password');
            $this->load->view('templates/auth_footer');

        }else{
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', 
                        '<div class="alert alert-success" role="alert">
                        Ganti Password Berhasil!
                        </div>'
                    );
            redirect('auth');
            
        }


    }

}