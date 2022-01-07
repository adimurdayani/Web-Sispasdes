<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends BD_Controller
{

  function __construct()
  {
    // Construct the parent class
    parent::__construct();
    // $this->auth();
    $this->load->model('m_Api');
  }

  public function index_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('kk_id');

    // kondisi jika id penduduk tidak di temukan 

    if ($id === NULL) {

      // mengambil data dari database
      $penduduk = $this->db->get('tb_penduduk')->result_array();
    } else {

      // mengambil data dengan id yang di kirim
      $penduduk = $this->m_Api->get_id_penduduk($id);
    }

    if ($penduduk) {
      # response penduduk jika data penduduk ada, dan menampilkan semua data penduduk
      $this->response([
        'status'  => true,
        'data'    => $penduduk,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function penduduk_id_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('id_pend');
    // kondisi jika id penduduk tidak di temukan 
    $penduduk = $this->db->get_where('tb_penduduk', ['id_pend' => $id])->row_array();

    if ($penduduk) {
      # response penduduk jika data penduduk ada, dan menampilkan semua data penduduk
      $this->response([
        'status'  => true,
        'data'    => $penduduk,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function dusun_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('id_dusun');

    // kondisi jika id penduduk tidak di temukan 

    if ($id === NULL) {

      // mengambil data dari database
      $penduduk = $this->db->get('tb_dusun')->result_array();
    } else {

      // mengambil data dengan id yang di kirim
      $penduduk = $this->db->get_where('tb_dusun', ['id_dusun' => $id])->row_array();
    }

    if ($penduduk) {
      # response penduduk jika data penduduk ada, dan menampilkan semua data penduduk
      $this->response([
        'status'  => true,
        'data'    => $penduduk,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function jumlahpenduduk_get()
  {
    $penduduk = $this->db->get('tb_penduduk')->num_rows();
    if ($penduduk) {
      # response penduduk jika data penduduk ada, dan menampilkan semua data penduduk
      $this->response([
        'status'  => true,
        'data'    => $penduduk,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function jumlahrt_get()
  {
    $jumlahrt = $this->db->get('tb_rt')->num_rows();
    if ($jumlahrt) {
      # response jumlahrt jika data jumlahrt ada, dan menampilkan semua data jumlahrt
      $this->response([
        'status'  => true,
        'data'    => $jumlahrt,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response jumlahrt jika jumlahrt tidak ada
      $this->response([
        'status'  => false,
        'message' => 'jumlahrt tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function jmlkk_get()
  {
    $id_kk = $this->get('dusun_id');

    if ($id_kk === NULL) {
      // mengambil data dari database
      $jmlkk = $this->m_Api->get_all_penduduk();
    } else {
      // mengambil data dengan id yang di kirim
      $jmlkk = $this->m_Api->get_jml_kk($id_kk);
    }

    if ($jmlkk) {
      # response jmlkk jika data jmlkk ada, dan menampilkan semua data jmlkk
      $this->response([
        'status'  => true,
        'data'    => $jmlkk,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function getrt_get()
  {
    $dusun_id = $this->get('dusun_id');

    if ($dusun_id === NULL) {
      // mengambil data dari database
      $jml_rt = $this->m_Api->get_all_penduduk();
    } else {
      // mengambil data dengan id yang di kirim
      $jml_rt = $this->m_Api->get_jml_rt($dusun_id);
    }

    if ($jml_rt) {
      # response jml_rt jika data jml_rt ada, dan menampilkan semua data jml_rt
      $this->response([
        'status'  => true,
        'data'    => $jml_rt,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function namakk_get()
  {
    $id_kk = $this->get('dusun_id');

    if ($id_kk === NULL) {
      // mengambil data dari database
      $getnamakk = $this->db->get('tb_namakk')->result_array();
    } else {
      // mengambil data dengan id yang di kirim
      $getnamakk = $this->db->get_where('tb_namakk', ['dusun_id' => $id_kk])->result_array();
    }

    if ($getnamakk) {
      # response getnamakk jika data getnamakk ada, dan menampilkan semua data getnamakk
      $this->response([
        'status'  => true,
        'data'    => $getnamakk,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      # response penduduk jika penduduk tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function jmlart_get()
  {
    $dusun_id = $this->get('kk_id');

    $jml_rt = $this->m_Api->get_jml_art($dusun_id);
    if ($jml_rt) {
      # response jml_rt jika data jml_rt ada, dan menampilkan semua data jml_rt
      $this->response([
        'status'  => true,
        'data'    => $jml_rt,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status'  => false,
        'data'    => $jml_rt,
        'message' => 'penduduk tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }
}

/* End of file Penduduk.php */