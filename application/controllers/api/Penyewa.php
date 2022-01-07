<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \Firebase\JWT\JWT;

class Penyewa extends BD_Controller {

  function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('m_Api');
        $this->methods['index_get']['limit'] = 500; // 500 requests per hour per user/key
    }


  public function index_get()
  {
    // mengambil data yang di kirim
    $id = $this->get('user_id');

    // kondisi jika id penyewa tidak di temukan 
    
    if ($id === NULL) {
      
      // mengambil data dari database
      $penyewa = $this->m_Api->get_all_penyewa();
      
    }else{

      // mengambil data dengan id yang di kirim
      $penyewa = $this->m_Api->get_id_penyewa($id);

    }

    if ($penyewa) {
      # response penyewa jika data penyewa ada, dan menampilkan semua data penyewa
      $this->response([
        'status'  => true,
        'data'    => $penyewa,
        'message' => 'sukses'
      ], REST_Controller::HTTP_OK);

    }else {
      # response penyewa jika penyewa tidak ada
      $this->response([
        'status'  => false,
        'message' => 'penyewa tidak di temukan'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function penyewa_post()
  {
    $id_regis = $this->post('user_id');
    $gettoken = $this->db->get_where('tb_register', ['id_regis' => $id_regis])->row();

    $this->form_validation->set_rules('harga_id', 'id harga', 'trim|required');

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
        'aset_id' => htmlspecialchars($this->input->post('aset_id', true)),
        'harga_id' => htmlspecialchars($this->input->post('harga_id', true)),
        'status' => 0,
        'created_at' => date("d M Y H:i")       
      ];
      $output = $this->db->insert('tb_penyewa', $data);

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
                            "title": "Penyewaan Asset",
                            "body": "Aset telah berhasil di sewa!"
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

/* End of file Penyewa.php */