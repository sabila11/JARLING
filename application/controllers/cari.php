<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('m_cari');
	}

	public function hasil_kota(){
		$key = $this->input->post('nama_tempat');
		$data['result'] = $this->m_cari->Search_kota($key);
		$this->template->load('static','cari_kota', $data);
	}

	public function hasil_kab(){
		$key = $this->input->post('nama_tempat');
		$data['result'] = $this->m_cari->Search_kab($key);
		$this->template->load('static','cari_kab', $data);
	}

}