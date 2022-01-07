<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datart extends CI_Controller {

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
    $data['judul'] = 'Data RT';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_rt'] = $this->m_data->get_all_rt();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();
    $this->form_validation->set_rules('rt', 'RT', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/datart/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'rt' => $this->input->post('rt'),
        'dusun_id' => $this->input->post('dusun_id'),
        'created_at' =>  date('d M Y')
      ];
      $this->db->insert('tb_rt', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
            );
      redirect('backend/datart');
    }
    
  }

  public function edit()
  {
    $data['judul'] = 'Data RT';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_rt'] = $this->m_data->get_all_rt();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();
    $this->form_validation->set_rules('rt', 'RT', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/datart/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_rt = $this->input->post('id_rt');
      
      $data = [
        'rt' => $this->input->post('rt'),
        'dusun_id' => $this->input->post('dusun_id'),
        'created_at' =>  date('d M Y')
      ];
      $this->db->where('id_rt', $id_rt);
      
      $this->db->update('tb_rt', $data);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
            );
      redirect('backend/datart');
    }
    
  }

  public function hapus($id)
  {
    $this->db->delete('tb_rt', ['id_rt' => $id]);
      $this->session->set_flashdata(
              'message', 
              '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
            );
      redirect('backend/datart');
  }

}

/* End of file Datart.php */