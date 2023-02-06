<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi_model extends CI_Model {

  // insert data ke tabel user
  public function insert($data)
  {
   return $this->db->insert('user', $data);
  }
 
}