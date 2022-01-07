<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Namakk extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_data');
    
    if (!$this->session->userdata('username')) {
      redirect('login');
    }
  }

  public function index()
  {
    $data['judul'] = 'Data Nama KK';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['get_namakk'] = $this->m_data->get_all_namakk();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();
    $this->form_validation->set_rules('nama_kk', 'nama KK', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/namakk/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'dusun_id' => $this->input->post('dusun_id'),
        'nama_kk' => $this->input->post('nama_kk'),
        'created_at' => date('d M Y')
      ];
      $this->db->insert('tb_namakk', $data);    
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil tersimpan!
              </div>'
            );
      redirect('backend/namakk');
    }
    
  }

  
  public function edit()
  {
    $data['judul'] = 'Data Nama KK';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['get_namakk'] = $this->m_data->get_all_namakk();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();
    $this->form_validation->set_rules('nama_kk', 'nama KK', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/namakk/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_kk = $this->input->post('id_kk');
      
      $data = [
        'dusun_id' => $this->input->post('dusun_id'),
        'nama_kk' => $this->input->post('nama_kk'),
        'created_at' => date('d M Y')
      ];
      $this->db->where('id_kk', $id_kk);
      
      $this->db->update('tb_namakk', $data);    
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/namakk');
    }
    
  }

  public function hapus($id)
  {
    $this->db->delete('tb_namakk', ['id_kk' => $id]);    
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/namakk');
  }

}

/* End of file Namakk.php */