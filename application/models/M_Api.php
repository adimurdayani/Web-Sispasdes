<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Api extends CI_Model {

  public function kritiklimit()
  {
    $this->db->select('*');
    $this->db->from('tb_kritik');
    $this->db->join('tb_register', 'tb_kritik.user_id = tb_register.id_regis');
    $this->db->join('tb_grup', 'tb_kritik.admin_id = tb_grup.id_grup');
    $this->db->limit(4);
    $this->db->order_by('id_kritik','DESC');
    return $this->db->get();
  }
  
  public function get_all_penyewa()
  {
    $query = 
    " SELECT `tb_penyewa`.*, `tb_aset`.`nama_aset`, `tb_aset`.`harga`, `tb_register`.`nama`
      FROM `tb_penyewa` 
      JOIN `tb_aset` ON `tb_penyewa`.`aset_id` = `tb_aset`.`id_aset`
      JOIN `tb_register` ON `tb_penyewa`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id_penyewa` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_id_penyewa($id)
  {
    $query = 
    " SELECT `tb_penyewa`.*, `tb_aset`.`nama_aset`, `tb_aset`.`harga`, `tb_register`.`nama`
      FROM `tb_penyewa` 
      JOIN `tb_aset` ON `tb_penyewa`.`aset_id` = `tb_aset`.`id_aset`
      JOIN `tb_register` ON `tb_penyewa`.`user_id` = `tb_register`.`id_regis`
      WHERE `tb_penyewa`.`user_id` = $id
      ORDER BY `id_penyewa` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_penduduk()
  {
    $query = 
    " SELECT `tb_penduduk`.*, `tb_dusun`.`nama_dusun`, `tb_rt`.`rt`, `tb_namakk`.`nama_kk`
      FROM `tb_penduduk` 
      JOIN `tb_dusun` ON `tb_penduduk`.`dusun_id` = `tb_dusun`.`id_dusun`
      JOIN `tb_rt` ON `tb_penduduk`.`rt_id` = `tb_rt`.`id_rt`
      JOIN `tb_namakk` ON `tb_penduduk`.`kk_id` = `tb_namakk`.`id_kk`
      ORDER BY `id_pend` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_id_penduduk($id)
  {
    $query = 
    " SELECT `tb_penduduk`.*, `tb_dusun`.`nama_dusun`, `tb_rt`.`rt`, `tb_namakk`.`nama_kk`
      FROM `tb_penduduk` 
      JOIN `tb_dusun` ON `tb_penduduk`.`dusun_id` = `tb_dusun`.`id_dusun`
      JOIN `tb_rt` ON `tb_penduduk`.`rt_id` = `tb_rt`.`id_rt`
      JOIN `tb_namakk` ON `tb_penduduk`.`kk_id` = `tb_namakk`.`id_kk`
      WHERE `tb_penduduk`.`kk_id` = $id
      ORDER BY `id_pend` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_kritik()
  {
    $this->db->select('*');
    $this->db->from('tb_kritik');
    $this->db->join('tb_register', 'tb_kritik.user_id = tb_register.id_regis');
    $this->db->join('tb_grup', 'tb_kritik.admin_id = tb_grup.id_grup');
    $this->db->order_by('id_kritik','DESC');
    return $this->db->get()->result_array();
  }

  public function get_id_kritik($id)
  {
    $this->db->select('*');
    $this->db->from('tb_kritik');
    $this->db->join('tb_register', 'tb_kritik.user_id = tb_register.id_regis');
    $this->db->join('tb_grup', 'tb_kritik.admin_id = tb_grup.id_grup');
    $this->db->where('id_kritik', $id);
    $this->db->order_by('id_kritik','DESC');
    return $this->db->get()->row_array();
  }

  public function get_jml_rt($id)
  {
    $query = $this->db->query('SELECT * FROM tb_rt WHERE dusun_id= "'.$id.'"');
    $negatif = $query->num_rows();
    return $negatif;
  }

  public function get_jml_kk($id)
  {
    $query = $this->db->query('SELECT * FROM tb_penduduk WHERE dusun_id= "'.$id.'"');
    $negatif = $query->num_rows();
    return $negatif;
  }

  public function get_jml_art($id)
  {
    $query = $this->db->query('SELECT * FROM tb_penduduk WHERE kk_id= "'.$id.'"');
    $negatif = $query->num_rows();
    return $negatif;
  }

}


/* End of file M_Api.php */