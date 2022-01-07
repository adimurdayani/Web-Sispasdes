<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
  }

  public function index()
  {
    $data['judul'] = 'Profile';
    $userdata = $this->session->userdata('username');
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['users_ses'] = $this->m_user->get_userdata($userdata);
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
    $this->form_validation->set_rules('konfir_pass', 'konfirmasi password', 'trim|required|min_length[5]|matches[password]');
    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/profile/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $user_id = $this->input->post('user_id');
      
      $data = [
        'user_active' => 1,
        'nama' => htmlspecialchars($this->input->post('nama')),
        'email' => htmlspecialchars($this->input->post('email')),
        'username' => htmlspecialchars($this->input->post('username')),
        'password' => sha1($this->input->post('password')),
        'created_at' => date("d M Y")        
      ];

      $this->db->where('user_id', $user_id);
      $this->db->update('tb_user', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
            );
      redirect('login/logout');
    }
  }

}

/* End of file Profile.php */