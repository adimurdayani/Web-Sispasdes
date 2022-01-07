<?php
defined('BASEPATH') or exit('No direct script access allowed');

use \Firebase\JWT\JWT;

class Asset extends BD_Controller
{

  function __construct()
  {
    // Construct the parent class
    parent::__construct();
    // $this->auth();
    $this->methods['index_get']['limit'] = 50; // 500 requests per hour per user/key
    $this->load->model('m_Api');
  }

  public function index_get()
  {
    $id_aset = $this->get('id_aset');

    if ($id_aset === null) {

      $getaset = $this->db->get('tb_aset')->result_array();
    } else {
      $getaset = $this->db->get_where('tb_aset', ['id_aset' => $id_aset])->row_array();
    }

    if ($getaset) {
      # response aset jika data info ada, dan menampilkan semua data info
      $this->response([
        'status'  => true,
        'data'    => $getaset,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response aset jika info tidak ada
      $this->response([
        'status'  => false,
        'message' => 'aset tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function aset_t_sewa_get()
  {
    $getaset = $this->db->get('tb_aset_t_sewa')->result_array();

    if ($getaset) {
      # response aset jika data info ada, dan menampilkan semua data info
      $this->response([
        'status'  => true,
        'data'    => $getaset,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response aset jika info tidak ada
      $this->response([
        'status'  => false,
        'message' => 'aset tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function update_post()
  {

    $this->form_validation->set_rules('jml_aset', 'jumlah aset', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {

        # response ketika username sudah digunakan 
        $this->response([
          'status' => false,
          'message' => validation_errors()
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    } else {

      $id_aset = $this->post('id_aset');
      $getaset = $this->db->get_where('tb_aset', ['id_aset' => $id_aset])->row_array();
      # inisial data yang akan di input kedalam database

      $data = [
        'jml_aset' => $getaset['jml_aset'] - $this->input->post('jml_aset'),
        'created_at' => date("d M Y H:i")
      ];
      $this->db->where('id_aset', $id_aset);

      $output = $this->db->update('tb_aset', $data);

      if ($output == 0) {

        // response ketika data gagal di simpan
        $this->response([
          'status' => false,
          'message' => 'Data gagal di simpan!'
        ], REST_Controller::HTTP_NOT_FOUND);
      } else {
        // response ketika data berhasil disimpan
        $this->response([
          'status' => true,
          'message' => 'Data berhasil di simpan!',
          'data' => $data
        ], REST_Controller::HTTP_OK);
      }
    }
  }
}

/* End of file Asset.php */