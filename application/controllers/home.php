<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_homepopuler');
	}

	public function index()
	{
		$data['populer'] = $this->m_homepopuler->GetData();
		$this->template->load('static','home', $data);
	}
}
