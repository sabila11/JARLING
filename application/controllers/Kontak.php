<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('kontak_model');
	}

	public function tampil_kontak()
	{
		$data['kontak'] = $this->kontak_model->selectAll();
		$this->load->view('admin/static',$data);
		$this->load->view('kontak_admin',$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('static');
			$this->load->view('contact');
		}
		else
		{
			$pesan = $this->input->post('pesan');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');

			$object = array(
					'pesan' => $pesan,
					'nama' => $nama,
					'email' => $email
				);

			$query = $this->kontak_model->insert_data($object);

			if ($query) {
				$this->session->set_flashdata('info', 'berhasil ditambahkan');
				redirect('contact');
			}
		}
	}

	public function hapus_kontak($id)
	{
		$hapus = $this->kontak_model->delete_data('kontak',$id);
		if ($hapus) {
				$this->session->set_flashdata('info', 'berhasil dihapus');
				redirect('kontak/tampil_kontak');
			}

	}

	public function edit_kontak($id)
	{
		$this->load->view('admin/static');
		$this->data['dataEdit'] = $this->kontak_model->dataEdit('kontak',$id);
		$this->load->view('edit_kontak', $this->data);

	}

	public function update($id){
		$pesan = $_POST['pesan'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$status = $_POST['status'];

		$data = array('pesan' => $pesan, 'nama' => $nama, 'email' => $email, 'status' => $status);
		$ubah = $this->kontak_model->editData('kontak', $data, $id);

		if ($ubah) {
			$this->session->set_flashdata('info', 'berhasil diubah');
			redirect('kontak/tampil_kontak');
		}else{
			$this->session->set_flashdata('info', 'gagal diubah');
			redirect('kontak/tampil_kontak');
		}
	}

}