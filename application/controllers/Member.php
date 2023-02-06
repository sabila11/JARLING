<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	
	function __construct(){
		parent:: __construct();
	// $this->load->model('m_aksesoris');
	// ambil model wisata kota
		$this->load->model('m_wisatakota');
		$this->load->model('m_login');
		$this->load->model('rencana_model');

	}

	public function index()
	{
		if ($this->session->userdata('islogin')== TRUE) {
			$data['wisata'] = $this->m_wisatakota->GetData();
			// $data['user'] = $this->m_login->cek_user();
			$this->load->view('member/static',$data);
			$this->load->view('member/dashboard',$data);
		}else{
			redirect('login');
		}
	}

	public function rencana()
	{
		// ambil data wisata
		$data['wisata'] = $this->rencana_model->getRencana($this->session->id);
		$this->load->view('member/static', $data);
		$this->load->view('member/display_rencana', $data);
	}
}
