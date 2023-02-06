<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisatawisata extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_wisatakota');
	}

	public function index()
	{
		$data['wisata'] = $this->m_wisatakota->GetData();
		$this->template->load('static','wisata', $data);
	}
}
