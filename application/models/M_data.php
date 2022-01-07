<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{

  public function get_all_penduduk($id_penduduk)
  {
    $query =
      " SELECT `tb_penduduk`.*, `tb_dusun`.`nama_dusun`, `tb_rt`.`rt`, `tb_namakk`.`nama_kk`
      FROM `tb_penduduk` 
      JOIN `tb_dusun` ON `tb_penduduk`.`dusun_id` = `tb_dusun`.`id_dusun`
      JOIN `tb_rt` ON `tb_penduduk`.`rt_id` = `tb_rt`.`id_rt`
      JOIN `tb_namakk` ON `tb_penduduk`.`kk_id` = `tb_namakk`.`id_kk`
      WHERE `tb_penduduk`.`kk_id` =  $id_penduduk
      ORDER BY `id_pend` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_rt()
  {
    $query =
      " SELECT `tb_rt`.*, `tb_dusun`.`nama_dusun`
      FROM `tb_rt` 
      JOIN `tb_dusun` ON `tb_rt`.`dusun_id` = `tb_dusun`.`id_dusun`
      ORDER BY `id_rt` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_all_kritik()
  {
    $query =
      " SELECT `tb_kritik`.*, `tb_register`.`nama`
      FROM `tb_kritik` 
      JOIN `tb_register` ON `tb_kritik`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id_kritik` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_id_kritik($id)
  {
    $query =
      " SELECT `tb_kritik`.*, `tb_register`.`nama`, `tb_grup`.`nama_grup`
      FROM `tb_kritik` 
      JOIN `tb_grup` ON `tb_kritik`.`admin_id` = `tb_grup`.`id_grup`
      JOIN `tb_register` ON `tb_kritik`.`user_id` = `tb_register`.`id_regis`
      WHERE `tb_kritik`.`user_id` = $id
    ";
    return $this->db->query($query)->row_array();
  }

  public function get_id_kritiksaran()
  {
    $this->db->select('*');
    $this->db->from('tb_kritik');
    $this->db->join('tb_register', 'tb_kritik.user_id = tb_register.id_regis');
    $this->db->join('tb_grup', 'tb_kritik.admin_id = tb_grup.id_grup');
    $this->db->order_by('id_kritik', 'DESC');
    return $this->db->get()->row_array();
  }

  public function get_all_penyewa()
  {
    $query =
      " SELECT `tb_penyewa`.*, `tb_aset`.`nama_aset`,`tb_aset`.`jml_aset`, `tb_aset`.`harga`, `tb_register`.`nama`
      FROM `tb_penyewa` 
      JOIN `tb_aset` ON `tb_penyewa`.`aset_id` = `tb_aset`.`id_aset`
      JOIN `tb_register` ON `tb_penyewa`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id_penyewa` DESC
    ";
    return $this->db->query($query)->result_array();
  }

  public function get_id_rt($id_dusun)
  {
    return $this->db->get_where('tb_dusun', ['id_dusun' => $id_dusun]);
  }

  public function get_id_aset($id_aset)
  {
    return $this->db->get_where('tb_aset', ['id_aset' => $id_aset]);
  }

  public function get_all_notifikasi()
  {
    $query =
      " SELECT `tb_penyewa`.*,`tb_register`.`nama`
      FROM `tb_penyewa` 
      JOIN `tb_register` ON `tb_penyewa`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id_penyewa` DESC
    ";
    return $this->db->query($query);
  }

  public function get_id_kritik_json()
  {
    $query =
      " SELECT `tb_kritik`.*,`tb_register`.`nama`
      FROM `tb_kritik` 
      JOIN `tb_register` ON `tb_kritik`.`user_id` = `tb_register`.`id_regis`
      ORDER BY `id_kritik` DESC
    ";
    return $this->db->query($query);
  }

  public function get_all_namakk()
  {
    $query =
      " SELECT `tb_namakk`.*, `tb_dusun`.`nama_dusun`
      FROM `tb_namakk` 
      JOIN `tb_dusun` ON `tb_namakk`.`dusun_id` = `tb_dusun`.`id_dusun`
      ORDER BY `tb_namakk`.`id_kk` DESC
    ";
    return $this->db->query($query)->result_array();
  }
}

/* End of file M_data.php */