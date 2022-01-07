<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
    $data['judul'] = 'Dashboard';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['get_penduduk'] = $this->db->get('tb_penduduk')->num_rows();
    $data['get_dusun'] = $this->db->get('tb_dusun')->num_rows();
    $data['get_register'] = $this->db->get('tb_register')->num_rows();
    $data['get_rt'] = $this->db->get('tb_rt')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_kritik'] = $this->m_data->get_all_kritik();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/index', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function get_notifikasi()
  {    
    $total_penyewa = $this->db->get('tb_penyewa')->num_rows();
    $get_penyewa = $this->m_data->get_all_notifikasi()->row();

    $result['total_penyewa'] = $total_penyewa;
    $result['tanggal'] = $get_penyewa->created_at;
    $result['nama'] = $get_penyewa->nama;
    $result['msg'] = "User telah melakukan sewa aset, segera cek user!";
    
    echo json_encode($result);
  }

  public function get_notifikasi_kritik()
  {    
    $total_kritik = $this->db->get('tb_kritik')->num_rows();
    $get_kritik = $this->m_data->get_id_kritik_json()->row();

    $result['total_kritik'] = $total_kritik;
    $result['tanggal'] = $get_kritik->created_at;
    $result['nama'] = $get_kritik->nama;
    $result['msg'] = "User telah mengirimkan kritik dan saran, segera cek dan berikan masukan ke user!";
    
    echo json_encode($result);
  }

}

/* End of file Dashboard.php */