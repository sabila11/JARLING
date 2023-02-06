<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Ulasan_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Ulasan_model extends CI_Model {

  // ------------------------------------------------------------------------
  public function index()
  {
    // mbil semua data ulasan
    $this->db->select('*');
    $this->db->from('ulasan');
    $query = $this->db->get();
    return $query->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Ulasan_model.php */
/* Location: ./application/models/Ulasan_model.php */