<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewa extends CI_Controller
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
    $data['judul'] = 'Data Penyewa';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_penyewa'] = $this->m_data->get_all_penyewa();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['get_register'] = $this->db->get('tb_register')->result_array();
    $data['get_aset'] = $this->db->get('tb_aset')->result_array();

    $this->form_validation->set_rules('user_id', 'nama user', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/penyewa/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'user_id' => $this->input->post('user_id'),
        'aset_id' => $this->input->post('aset_id'),
        'harga_id' => $this->input->post('harga_id'),
        'created_at' => date('d M Y'),
        'total' => $this->input->post('total')
      ];
      $this->db->insert('tb_penyewa', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil tersimpan!
              </div>'
      );
      redirect('backend/penyewa');
    }
  }

  public function hapus($id_penyewa)
  {
    $this->db->delete('tb_penyewa', ['id_penyewa' => $id_penyewa]);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terhapus!
              </div>'
    );
    redirect('backend/penyewa');
  }

  public function updatestatus()
  {
    $data['judul'] = 'Data Penyewa';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_penyewa'] = $this->m_data->get_all_penyewa();
    $data['get_register'] = $this->db->get('tb_register')->result_array();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_aset'] = $this->db->get('tb_aset')->result_array();
    $user_id = $this->input->post('user_id');

    $this->form_validation->set_rules('status', 'status', 'trim|required');
    $this->form_validation->set_rules('tgl_kembali', 'tanggal kembali', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/penyewa/index', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id_penyewa = $this->input->post('id_penyewa');

      $data = [
        'status' => $this->input->post('status'),
        'created_at' => date('d M Y'),
        'tgl_kembali' => $this->input->post('tgl_kembali')
      ];
      $this->db->where('id_penyewa', $id_penyewa);

      $this->db->update('tb_penyewa', $data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                Data berhasil terupdate!
              </div>'
      );
      $this->sendMassage($user_id);
      redirect('backend/penyewa');
    }
  }


  public function sendMassage($user_id)
  {

    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $user_id])->row();

    $getAll = '["' . $gettoken->token_id . '"]';
    $curl = curl_init();
    $authKey = "key=AAAAeuB1Svs:APA91bHeV4rPcqrDHBmWrA8F5s9lSWF6o-_6z5yftFV27ZioRIPJgkYhiiSrebxOccNp5x7ySJmOM9o7fxkM3RLWoasW1tBD5tr--J3UfL7mN4nF6Cb_DOH1NpKmfRe_owyzlBLOMQQk";
    $registration_ids =  $getAll;
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => '{
                    "registration_ids": ' . $registration_ids . ',
                    "notification": {
                        "title": "Konfirmasi Penyewaan Aset",
                        "body": "Penyewaan aset telah di konfirmasi oleh pihak desa!"
                    }
                  }',
      CURLOPT_HTTPHEADER => array(
        "Authorization: " . $authKey,
        "Content-Type: application/json",
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    redirect('backend/penyewa');

    if ($err) {
      // echo "cURL Error #:" . $err;
      json_encode($err);
    } else {
      // response ketika data berhasil disimpan
      echo $response;
    }
  }

  public function get_id_asset()
  {
    $id_aset = $this->input->post('id', true);
    $get_id_aset = $this->m_data->get_id_aset($id_aset)->result();
    echo json_encode($get_id_aset);
  }
}

/* End of file Profile.php */