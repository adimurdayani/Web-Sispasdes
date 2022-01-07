<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadusun extends CI_Controller {

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
    $data['judul'] = 'Data Dusun';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $this->form_validation->set_rules('nama_dusun', 'nama dusun', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/datadusun/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'nama_dusun' => $this->input->post('nama_dusun'),
        'created_at' => date('d M Y')        
      ];

      $this->db->insert('tb_dusun', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
            );
      redirect('backend/datadusun');
    }
    
  }

  public function edit()
  {
    $data['judul'] = 'Data Dusun';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_dusun'] = $this->m_data->get_all_dusun();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_rt'] = $this->db->get('tb_rt')->result_array();
    $this->form_validation->set_rules('nama_dusun', 'nama dusun', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/datadusun/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_dusun = $this->input->post('id_dusun');
      
      $data = [
        'nama_dusun' => $this->input->post('nama_dusun'),
        'created_at' => date('d M Y')        
      ];

      $this->db->where('id_dusun', $id_dusun);
      
      $this->db->update('tb_dusun', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/datadusun');
    }
    
  }

  public function hapus($id)
  {
    $this->db->delete('tb_dusun', ['id_dusun' => $id]);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/datadusun');
  }

}

/* End of file Datadusun.php */