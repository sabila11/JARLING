<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Populer extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('populer_model');
	}

	public function tampil_populer()
	{
		$data['populer'] = $this->populer_model->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('populer/display_populer',$data);
	}

	public function tambah_data()
	{
		$this->load->view('admin/static');
		$this->load->view('populer/add_populer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_tempat', 'Nama Tempat', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('gambar_kecil', 'Gambar 1', 'required');
		$this->form_validation->set_rules('gambar_besar', 'Gambar 2', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/static');
			$this->load->view('populer/add_populer');
		}
		else
		{
			$nama_tempat = $this->input->post('nama_tempat');
			$alamat = $this->input->post('alamat');
			$tanggal = $this->input->post('tanggal');
			$deskripsi = $this->input->post('deskripsi');
			$gambar_kecil = $this->input->post('gambar_kecil');
			$gambar_besar = $this->input->post('gambar_besar');

			$object = array(
					'nama_tempat' => $nama_tempat,
					'alamat' => $alamat,
					'tanggal' => $tanggal,
					'deskripsi' => $deskripsi,
					'gambar_kecil' => $gambar_kecil,
					'gambar_besar' => $gambar_besar
				);

			$query = $this->populer_model->insert_data($object);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('populer/tampil_populer');
			}
		}
	}

	public function hapus_populer($id)
	{
		$hapus = $this->populer_model->delete_data('populer',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('populer/tampil_populer');
			}

	}

	public function edit_populer($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->populer_model->dataEdit('populer',$id);
		$this->load->view('populer/edit_populer', $this->data);

	}

	public function update($id){
		$nama_tempat = $_POST['nama_tempat'];
		$alamat =  $_POST['alamat'];
		$tanggal =  $_POST['tanggal'];
		$deskripsi =  $_POST['deskripsi'];
		$gambar_kecil =  $_POST['gambar_kecil'];
		$gambar_besar =  $_POST['gambar_besar'];
		

		$data = array('nama_tempat' => $nama_tempat, 'alamat' => $alamat, 'tanggal' => $tanggal, 'gambar_kecil' => $gambar_kecil, 'gambar_besar' => $gambar_besar);
		$ubah = $this->populer_model->editData('populer', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('populer/tampil_populer');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('populer/tampil_populer');
		}
	}

}