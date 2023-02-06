<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisatakota extends CI_Model {

	public function GetData()
	{
		$blog = $this->db->query('SELECT * FROM wisata;');
		return $blog;
	}
}
