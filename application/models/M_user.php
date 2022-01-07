<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

  public function get_userdata($userdata)
  {
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->join('tb_grup', 'tb_user.user_id = tb_grup.id_grup');
    $this->db->where('username', $userdata);
    return $this->db->get()->row_array();
  }

  public function get_username($username)
  {
    return $this->db->get_where('tb_register', $username);
  }

}

/* End of file M_user.php */