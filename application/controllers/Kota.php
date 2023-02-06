<?php
use CodeIgniter\Database\RawSql;
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		// linrary upload
		$this->load->library('upload');

		// rencana
		$this->load->model('Rencana_model');
		$this->load->model('kota_model');
		$this->load->model('Ulasan_model');
		$this->load->model('m_wisatakota');
	}

	public function tampil_kota()
	{
		$data['wisata'] = $this->kota_model->getAllKota();
		$this->load->view('admin/static',$data);
		$this->load->view('wisata/display_kota',$data);
	}

	public function tambah_data()
	{
		$this->load->view('admin/static');
		$this->load->view('wisata/add_kota');
	}

	// insert data ulasan
	public function addUlasan()
	{
		// ambil data nama wisata dari tabel wisata sesuai dengan id
		// $nama_wisata = $this->kota_model->selectKota($id);
		$ulasan = $this->input->post('ulasan');
		$rating = $this->input->post('rating');
		// nama user
		$nama_user = $this->session->userdata('username');

		$data = array(

			'id_wisata' => $id_wisata,
			'ulasan' => $ulasan,
			'rating' => $rating,
			'nama_user' => $nama_user
		);

		// insert data ke tabel ulasan
		$query = $this->Ulasan_model->insertUlasan($data);

		if ($query) {
			$this->session->set_flashdata('info', 'berhasil ditambahkan');
			redirect('info_kota/info/'.$id);
		}else{
			$this->session->set_flashdata('info', 'gagal ditambahkan');
			redirect('info_kota/info/'.$id);
		}
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('maps', 'Maps', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/static');
			$this->load->view('wisata/add_kota');
		}
		else
		{
			// ambil data dari form
			$nama_tempat = $this->input->post('nama_tempat');
			$alamat = $this->input->post('alamat');
			$maps = $this->input->post('maps');
			$deskripsi = $this->input->post('deskripsi');

			// cek foto utama dari form input file foto_utama
			$foto_utama = $_FILES['foto_utama']['name'];
			if ($foto_utama) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './images/wisata/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto_utama')) {
					$foto_utama = $this->upload->data('file_name');
				}else{
					echo $this->upload->display_errors();
				}
			}

			// tambahkan data ke database
			$data = array(
				'nama_tempat' => $nama_tempat,
				'alamat' => $alamat,
				'maps' => $maps,
				'deskripsi' => $deskripsi,
				'foto_utama' => $foto_utama
			);

			$query = $this->kota_model->insert_data($data);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('kota/tampil_kota');
			}
		}
	}

	public function hapus_kota($id)
	{
		// delete data dari database
		$hapus = $this->kota_model->delete_data('wisata',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('kota/tampil_kota');
			}
	}

	public function edit_kota($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->kota_model->dataEdit('wisata',$id);
		$this->load->view('wisata/edit_kota', $this->data);

	}

	public function update($id){
		$nama_tempat = $_POST['nama_tempat'];
		$alamat = $_POST['alamat'];
		$maps = $_POST['maps'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_POST['foto_utama'];

		$data = array('nama_tempat' => $nama_tempat, 'alamat' => $alamat, 'maps' => $maps, 'deskripsi' => $deskripsi,'foto_utama' => $gambar);
		$ubah = $this->kota_model->editData('wisata', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('kota/tampil_kota');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('kota/tampil_kota');
		}
	}

	public function rencana()
	{
		$data['wisata'] = $this->m_wisatakota->GetData();

		$this->load->view('member/static',$data);
		$this->load->view('member/add_rencana',$data);
	}


	// insert data rencana wisata
	public function insertRencana()
	{
		// ambil dari form input add_rencana
		$judul_perjalanan = $this->input->post('judul_perjalanan');
		$tanggal = $this->input->post('tanggal');
		$id_tempat_wisata = $this->input->post('id_tempat_wisata');
		$catatan = $this->input->post('catatan');

		// insert data ke tabel rencana
		$data = array(
			'judul_perjalanan' => $judul_perjalanan,
			'tanggal' => $tanggal,
			'id_tempat_wisata' => $id_tempat_wisata,
			'catatan' => $catatan,
			'id_user' => $this->session->id
		);

		$query = $this->Rencana_model->insertRencana($data);

		if ($query) {
			$this->session->set_flashdata('info', 'berhasil ditambahkan');
			redirect('member/rencana');
		}else{
			$this->session->set_flashdata('info', 'gagal ditambahkan');
			redirect('member/rencana');
		}
	}

}
