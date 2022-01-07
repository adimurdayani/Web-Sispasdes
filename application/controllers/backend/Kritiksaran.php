<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritiksaran extends CI_Controller {

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
    $data['judul'] = 'Kritik dan Saran';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    $data['get_kritik'] = $this->m_data->get_all_kritik();
    $data['get_id_kritik'] = $this->m_data->get_id_kritiksaran();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $this->load->view('backend/layout/header', $data, FALSE);
    $this->load->view('backend/layout/topbar', $data, FALSE);
    $this->load->view('backend/layout/sidebar', $data, FALSE);
    $this->load->view('backend/kritiksaran/index', $data, FALSE);
    $this->load->view('backend/layout/footer', $data, FALSE);
  }

  public function detail($id)
  {
    $data['judul'] = 'Kritik dan Saran';
    $data['users_ses'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();    
    $data['get_kritik'] = $this->m_data->get_all_kritik();
    $data['total_penyewa'] = $this->db->get('tb_penyewa')->num_rows();
    $data['total_kritik'] = $this->db->get('tb_kritik')->num_rows();
    $data['get_id_kritik'] = $this->m_data->get_id_kritik($id);
    $data['get_iduser'] = $this->db->get_where('tb_kritik', ['user_id' => $id])->row_array(); 
    $user_id = $this->input->post('user_id');
    $this->form_validation->set_rules('jawaban', 'jawaban', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/layout/header', $data, FALSE);
      $this->load->view('backend/layout/topbar', $data, FALSE);
      $this->load->view('backend/layout/sidebar', $data, FALSE);
      $this->load->view('backend/kritiksaran/detail', $data, FALSE);
      $this->load->view('backend/layout/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id_kritik');
      
      $data = [     
        'jawaban' =>  $this->input->post('jawaban'),
        'tgl_kirim' => date('d M Y H:i')        
      ];
      $this->db->where('id_kritik', $id);
      $this->db->update('tb_kritik', $data);
      $this->sendMassage($user_id);
      redirect('backend/kritiksaran');
      
    }
    
  }

  public function sendMassage($user_id){
    
    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $user_id])->row();

    $getAll = '["'.$gettoken->token_id.'"]';
    
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
                        "title": "Balasan Kritik dan Saran",
                        "body": "Saran yang dikirimkan telah dibalas oleh pihak desa!"
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
      redirect('backend/kritiksaran');

    if ($err) {
      // echo "cURL Error #:" . $err;
      json_encode($err);
    } else {
      // response ketika data berhasil disimpan
      echo $response;
    }
  }

  public function hapus($id)
  {
    $this->db->delete('tb_kritik', ['id_kritik' =>  $id]);
    redirect('backend/kritiksaran');
  }

}

/* End of file Profile.php */