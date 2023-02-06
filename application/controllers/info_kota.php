<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_kota extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
		$this->load->model('m_ikota');

	}

	public function info()
	{
		$id = $this->uri->segment(3);
		$data['wisata'] = $this->m_ikota->GetDkab($id);
		$this->template->load('static','info_kota', $data);
	}

}
