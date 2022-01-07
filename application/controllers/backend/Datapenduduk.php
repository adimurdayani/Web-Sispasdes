<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapenduduk extends CI_Controller
{

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
    $data['judul'] = 'Data Penduduk';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_namakk'] = $this->db->get('tb_namakk')->result_array();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/datapenduduk/index', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function detail($id_kk)
  {
    $data['judul'] = 'Data Penduduk';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_datapenduduk'] = $this->m_data->get_all_penduduk($id_kk);
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_rt'] = $this->db->get('tb_rt')->result_array();
    $data['get_namakk'] = $this->db->get('tb_namakk')->result_array();
    $data['get_id_kk'] = $this->db->get_where('tb_namakk', ['id_kk' =>  $id_kk])->row_array();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/datapenduduk/detail_penduduk', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function tambah()
  {
    $data['judul'] = 'Data Penduduk';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_rt'] = $this->db->get('tb_rt')->result_array();
    $data['get_namakk'] = $this->db->get('tb_namakk')->result_array();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();

    $this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'trim|required');
    $this->form_validation->set_rules('ket', 'keterangan', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/datapenduduk/detail_penduduk', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'kk_id' => $this->input->post('kk_id'),
        'nama_art' => $this->input->post('nama_art'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'dusun_id' => $this->input->post('dusun_id'),
        'rt_id' => $this->input->post('rt_id'),
        'kelamin' => $this->input->post('kelamin'),
        'ket' => $this->input->post('ket'),
        'created_at' => date('d M Y'),
        'nik' => $this->input->post('nik'),
        'no_kk' => $this->input->post('no_kk')
      ];
      $this->db->insert('tb_penduduk', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
      );

      redirect('backend/datapenduduk', 'refresh');
    }
  }

  public function edit($id_penduduk)
  {
    $data['judul'] = 'Data Penduduk';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_datapenduduk'] = $this->db->get_where('tb_penduduk', ['id_pend' => $id_penduduk])->row_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_rt'] = $this->db->get('tb_rt')->result_array();
    $data['get_dusun'] = $this->db->get('tb_dusun')->result_array();

    $this->form_validation->set_rules('ket', 'keterangan', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/datapenduduk/edit', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_pend = $this->input->post('id_pend');

      $data = [
        'kk_id' => $this->input->post('kk_id'),
        'nama_art' => $this->input->post('nama_art'),
        'tgl_lahir' => $this->input->post('tgl_lahir'),
        'dusun_id' => $this->input->post('dusun_id'),
        'rt_id' => $this->input->post('rt_id'),
        'kelamin' => $this->input->post('kelamin'),
        'ket' => $this->input->post('ket'),
        'created_at' => date('d M Y'),
        'nik' => $this->input->post('nik'),
        'no_kk' => $this->input->post('no_kk')
      ];

      $this->db->where('id_pend', $id_pend);

      $this->db->update('tb_penduduk', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
      );
      redirect('backend/datapenduduk', 'refresh');
    }
  }

  public function hapus($id_pend)
  {
    $this->db->delete('tb_penduduk', ['id_pend' => $id_pend]);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
    );
    redirect('backend/datapenduduk', 'refresh');
  }

  public function get_id_rt()
  {
    $id_dusun = $this->input->post('id', true);

    $get_rt = $this->m_data->get_id_rt($id_dusun)->result();
    echo json_encode($get_rt);
  }
}

/* End of file Profile.php */