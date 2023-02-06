<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kota_model extends CI_Model {

	// ambil semua data tabel wisata
	public function getAllKota(){
		$query = $this->db->get('wisata');
		return $query->result_array();
	}

	function selectKota($id){
		$query = "select * from wisata where id = '$id'";
		return $query->result_array();
	}

	public function insert_data($id){
		return $this->db->insert('wisata', $id);
	}

	public function delete_data($nm_tbl,$id)
	{
		$this->db->where('id',$id);
		$hapus = $this->db->delete($nm_tbl);
		return $hapus;		
	}

	public function editData($nm_tbl,$data,$id)
	{
		$this->db->where('id', $id);
		$ganti = $this->db->update($nm_tbl, $data);
		return $ganti;
	}

	public function dataEdit($nm_tbl,$id)
	{
		$this->db->where('id',$id);
		$edit = $this->db->get($nm_tbl);
		return $edit->row();
	}

}
