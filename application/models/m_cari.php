<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cari extends CI_Model {

	public function Search_kota($key)
	{
		$this->db->like('nama_tempat', $key);
		$query = $this->db->get('wisata');
		return $query->result();
	}

	public function Search_kab($key)
	{
		$this->db->like('nama_tempat', $key);
		$query = $this->db->get('kab_smg');
		return $query->result();
	}
}
