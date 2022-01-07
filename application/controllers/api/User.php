<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class User extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->methods['edit_post']['limit'] = 50; // 500 requests per hour per user/key
        $this->load->model('m_user');
        
    }

  public function edit_post()
  {
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {

        # response ketika username sudah digunakan 
        $this->response([
          'status' => false,
          'message' => 'data yang diinput salah'
        ], REST_Controller::HTTP_BAD_REQUEST);

      }    

    } else {
      # inisial data yang akan di input kedalam database
      $id = $this->input->post('id_regis');
      
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'username' => htmlspecialchars($this->input->post('username', true)),
        'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
        'created_at' => date("d M Y H:i")       
      ];
      $this->db->where('id_regis', $id);
      $output = $this->db->update('tb_register', $data);

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

  public function password_post()
  {
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {

        # response ketika username sudah digunakan 
        $this->response([
          'status' => false,
          'message' => 'data yang diinput salah'
        ], REST_Controller::HTTP_BAD_REQUEST);

      }    

    } else {
      # inisial data yang akan di input kedalam database
      $id = $this->input->post('id_regis');
      
      $data = [
        'password' => sha1($this->input->post('password')),
        'created_at' => date("d M Y H:i")        
      ];
      $this->db->where('id_regis', $id);
      $output = $this->db->update('tb_register', $data);

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
  
}

/* End of file User.php */