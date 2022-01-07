<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Kritik extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        // $this->auth();
        $this->load->model('m_Api');
        $this->methods['kritiklimit_get']['limit'] = 500; // 500 requests per hour per user/key
    }


    public function index_get()
  {
    $id_kritik = $this->get('id_kritik');

    if ($id_kritik === null) {
      $kritiklimit = $this->m_Api->get_all_kritik();
    }else{
      $kritiklimit = $this->m_Api->get_id_kritik($id_kritik);
    }

    if ($kritiklimit) {
      # response limit kritik jika data info ada, dan menampilkan semua data info
      $this->response([
        'status'  => true,
        'data'    => $kritiklimit,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);

    }else {
      # response kritik jika info tidak ada
      $this->response([
        'status'  => false,
        'message' => 'kritik tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function kritiklimit_get()
  {
    $kritiklimit = $this->m_Api->kritiklimit()->result_array();

    if ($kritiklimit) {
      # response limit kritik jika data info ada, dan menampilkan semua data info
      $this->response([
        'status'  => true,
        'data'    => $kritiklimit,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);

    }else {
      # response kritik jika info tidak ada
      $this->response([
        'status'  => false,
        'message' => 'kritik tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function kritik_post()
  {
    $id_regis = $this->post('user_id');
    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $id_regis])->row();

    $this->form_validation->set_rules('kritik', 'kritik dan saran', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

      if (validation_errors() == true) {

        # response ketika username sudah digunakan 
        $this->response([
          'status' => false,
          'message' => validation_errors()
        ], REST_Controller::HTTP_BAD_REQUEST);

      }    

    } else {
      # inisial data yang akan di input kedalam database
      
      $data = [
        'user_id' => htmlspecialchars($this->input->post('user_id', true)),
        'kritik' => htmlspecialchars($this->input->post('kritik', true)),
        'admin_id' => 1,
        'created_at' => date("d M Y H:i")       
      ];
      $output = $this->db->insert('tb_kritik', $data);

      if ($output == 0) {

      // response ketika data gagal di simpan
        $this->response([
          'status' => false,
          'message' => 'Data gagal di simpan!'
        ], REST_Controller::HTTP_NOT_FOUND);

      }else {
        
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
                            "title": "Kritik & Saran Baru",
                            "body": "Anda telah berhasil mengirim kritik dan saran ke admin!"
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

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          // response ketika data berhasil disimpan
          $this->response([
            'status' => true,
            'message' => 'Data berhasil di simpan!',
            'data' => $data,
            'token' => $getAll
          ], REST_Controller::HTTP_OK);
        }
      }
    }
  }

}

/* End of file Kritik.php */