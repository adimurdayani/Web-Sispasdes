<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function index()
  {
    $data['judul'] = 'Login | Administrator';
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('auth/layout/header', $data, FALSE);
      $this->load->view('auth/index', $data, FALSE);
      $this->load->view('auth/layout/footer', $data, FALSE);
    } else {
      # code...
      $this->_login();
    }
  }

  private function _login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

    if ($user) {
      // jika username ada
      if ($user['user_active'] == 1) {
        // jika username ada dengan user aktifasi, maka cek password user
        if (sha1($password, $user['password'])) {
          $data = [
            'username' => $user['username'],
            'user_id' => $user['user_id']
          ];

          $this->session->set_userdata($data);

          if($user['user_id'] == 1){
            redirect('dashboard');
            
          }else {
            $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                User dan password tidak di kenali!
              </div>'
            );
            redirect('login');
          }
        }else {
          $this->session->set_flashdata(
            'message', 
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              Password tidak di kenali!
            </div>'
          );
          redirect('login');
        }
      }else {
        $this->session->set_flashdata(
          'message', 
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            Username belum di aktifasi!
          </div>'
        );
        redirect('login');
      }
    }else {
      $this->session->set_flashdata(
        'message', 
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          Username tidak di kenali!
        </div>'
      );
      redirect('login');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }

  public function block()
  {
    $data['judul'] ='Page Block';
    $this->load->view('auth/layout/header', $data, FALSE);
    $this->load->view('auth/block', $data, FALSE);
    $this->load->view('auth/layout/footer', $data, FALSE);
    
  }

}

/* End of file Login.php */