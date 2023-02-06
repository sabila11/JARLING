<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Rencana_model
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

class Rencana_model extends CI_Model
{

	public function insertRencana($id)
	{
		return $this->db->insert('rencana', $id);
	}
	public function getRencana($user_id)
	{
		$this->db->select('*');
		$this->db->from('rencana');
		$this->db->where('id_user', $user_id);
		$this->db->join('wisata', 'wisata.id = rencana.id_tempat_wisata');
		$rencana = $this->db->get();
		return $rencana;
	}
}

/* End of file Rencana_model.php */
/* Location: ./application/models/Rencana_model.php */
