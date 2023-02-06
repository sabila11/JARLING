<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_homepopuler extends CI_Model {

	public function GetData()
	{
		$blog = $this->db->query('SELECT * FROM populer;');
		return $blog;
	}
}
