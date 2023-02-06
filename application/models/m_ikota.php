<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ikota extends CI_Model {
	
	public function GetDkab($id)
	{
		$single = $this->db->select('*')
							->from('wisata')
							->where('id', $id)
							->get();
		return $single;
	}

}
