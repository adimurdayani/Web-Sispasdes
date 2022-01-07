<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asetdesa extends CI_Controller
{

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
    $data['judul'] = 'Aset Desa';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_aset']  = $this->db->get('tb_aset')->result_array();
    $data['get_aset_tdk_disewakan']  = $this->db->get('tb_aset_t_sewa')->result_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();

    $this->form_validation->set_rules('nama_aset', 'nama aset', 'trim|required');
    $this->form_validation->set_rules('jml_aset', 'jumlah aset', 'trim|required');
    $this->form_validation->set_rules('harga', 'harga aset', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/asetdesa/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'nama_aset' => $this->input->post('nama_aset'),
        'harga' => $this->input->post('harga'),
        'jml_aset' => $this->input->post('jml_aset'),
        'created_at' => date('d M Y')
      ];

      $this->db->insert('tb_aset', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
      );
      redirect('backend/asetdesa');
    }
  }

  public function edit()
  {
    $data['judul'] = 'Aset Desa';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_aset']  = $this->db->get('tb_aset')->result_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();

    $this->form_validation->set_rules('nama_aset', 'nama aset', 'trim|required');
    $this->form_validation->set_rules('jml_aset', 'jumlah aset', 'trim|required');
    $this->form_validation->set_rules('harga', 'harga aset', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/asetdesa/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_aset = $this->input->post('id_aset');

      $data = [
        'nama_aset' => $this->input->post('nama_aset'),
        'harga' => $this->input->post('harga'),
        'jml_aset' => $this->input->post('jml_aset'),
        'created_at' => date('d M Y')
      ];

      $this->db->where('id_aset', $id_aset);

      $this->db->update('tb_aset', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
      );
      redirect('backend/asetdesa');
    }
  }

  public function hapus($id_aset)
  {
    $this->db->delete('tb_aset', ['id_aset' => $id_aset]);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
    );
    redirect('backend/asetdesa');
  }

  public function aset_tdk_disewakan_tambah()
  {
    $data['judul'] = 'Aset Desa';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_aset']  = $this->db->get('tb_aset')->result_array();
    $data['get_aset_tdk_disewakan']  = $this->db->get('tb_aset_t_sewa')->result_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();

    $this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
    $this->form_validation->set_rules('jml_barang', 'jumlah aset', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/asetdesa/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'nama_barang' => $this->input->post('nama_barang'),
        'jml_barang' => $this->input->post('jml_barang'),
        'created_at' => date('d M Y')
      ];

      $this->db->insert('tb_aset_t_sewa', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil disimpan!
              </div>'
      );
      redirect('backend/asetdesa');
    }
  }
  public function aset_tdk_disewakan_edit()
  {
    $data['judul'] = 'Aset Desa';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_aset']  = $this->db->get('tb_aset')->result_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['get_aset_tdk_disewakan']  = $this->db->get('tb_aset_t_sewa')->result_array();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();

    $this->form_validation->set_rules('nama_aset', 'nama aset', 'trim|required');
    $this->form_validation->set_rules('jml_aset', 'jumlah aset', 'trim|required');
    $this->form_validation->set_rules('harga', 'harga aset', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/asetdesa/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_aset = $this->input->post('id');

      $data = [
        'nama_barang' => $this->input->post('nama_barang'),
        'jml_barang' => $this->input->post('jml_barang'),
        'created_at' => date('d M Y')
      ];

      $this->db->where('id_aset', $id_aset);

      $this->db->update('tb_aset_t_sewa', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
      );
      redirect('backend/asetdesa');
    }
  }

  public function aset_tdk_disewakan_hapus($id_aset)
  {
    $this->db->delete('tb_aset_t_sewa', ['id' => $id_aset]);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
    );
    redirect('backend/asetdesa');
  }
}

/* End of file Profile.php */