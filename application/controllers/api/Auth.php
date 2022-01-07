<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Auth extends BD_Controller{

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model('m_user');
    }

    public function login_post()
    {
      $username = $this->post('username'); //data input username
      $password = sha1($this->post('password')); //data input password
      $user_arr = array('username' => $username);

      $kunci = $this->config->item('thekey'); //respon jika login gagal

      $val = $this->m_user->get_username($user_arr)->row();

      if ($this->m_user->get_username($user_arr)->num_rows() == 0) {
        
        $this->response([
          'status' => false,
          'message' => 'Username tidak di temukan'
        ], REST_Controller::HTTP_NOT_FOUND);

      }

      $match = $val->password; //mengambil data password dari database

      $cekstatus = $val->status;

      if ($cekstatus == 1) {
        if ($password == $match) { //kondisi jika password yang di input sama dengan password yang ada di database
        
          $token['id_regis'] = $val->id_regis; //di lihat dari id users
          $token['username'] = $username;

          $date = new DateTime();
          $token['iat'] = $date->getTimestamp();
          $token['exp'] = $date->getTimestamp() + 60*60*5; //fungsi untuk generate token

          $output = JWT::encode($token, $kunci); //hasil dari generate token akan di tampilan di respon 200
          
          $this->response([
            'status' => true,
            'token' => $output,
            'message' => 'Login sukses!',
            'data' => $val
          ], REST_Controller::HTTP_OK); //response jika data berhasil digunakan untuk login

        }else {
          
          $this->response([
            'status' => false,
            'message' => 'Password salah!'
          ]); //response jika data tidak ditemukan

        }
      }else{
        $this->response([
          'status' => false,
          'message' => 'User belum belum dikonfirmasi oleh admin!'
        ]); //response jika data tidak ditemukan
      }
      
    }

    public function register_post()
    {

      $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required');

      if ($this->form_validation->run() == FALSE) {

        if (validation_errors() == true) {

          # response ketika username sudah digunakan 
          $this->response([
            'status' => false,
            'message' => 'Ada data yang sudah digunakan'
          ], REST_Controller::HTTP_BAD_REQUEST);

        }    

      } else {
        # inisial data yang akan di input kedalam database
        $data = [
          'user_id' => 2,
          'nama' => htmlspecialchars($this->input->post('nama', true)),
          'email' => htmlspecialchars($this->input->post('email', true)),
          'username' => htmlspecialchars($this->input->post('username', true)),
          'password' => sha1($this->input->post('password')),
          'created_at' => date("d M Y H:i"),
          'status' => 1,
          'token_id' => htmlspecialchars($this->input->post('token_id', true))
        ];

        $output = $this->db->insert('tb_register', $data);

        if ($output == 0) {
        // response ketika data gagal di simpan
          $this->response([
            'status' => false,
            'message' => 'Data gagal di simpan'
          ], REST_Controller::HTTP_NOT_FOUND);

        }else {
          // response ketika data berhasil disimpan
          $this->response([
            'status' => true,
            'message' => 'Data berhasil di simpan',
            'data' => $data
          ], REST_Controller::HTTP_OK);

        }
      }
    }

    public function logout_get(){

      $this->session->sess_destroy();
        
      $this->response([
        "status" => true,
        "message"=> "logout sukses"
      ], REST_Controller::HTTP_OK);


    }
    
}