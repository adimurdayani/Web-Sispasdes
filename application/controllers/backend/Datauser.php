<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datauser extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->load->model('m_user');
    
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
  }

  public function index()
  {
    $data['judul'] = 'Data User';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_register'] = $this->db->get('tb_register')->result_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/datauser/index', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function update_status()
  {
    $id_regis = $this->input->post('id_regis');    
    $data = [
      'status' => $this->input->post('status'),      
      'created_at' => date('d M Y')    
    ];
    
    $this->db->where('id_regis', $id_regis);    
    $this->db->update('tb_register', $data);    
    $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/datauser');
  }

  public function hapus($id)
  {
    $this->db->delete('tb_register', ['id_regis' =>$id]);    
    $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/datauser');
  }

}

/* End of file Datauser.php */