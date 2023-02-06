<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model {

  // ------------------------------------------------------------------------
  public function getUser()
  {
    $this->db->select('*');
    $this->db->from('user');
    $query = $this->db->get();
    return $query->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */