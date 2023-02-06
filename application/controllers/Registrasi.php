<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Registrasi
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Registrasi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Registrasi_model');
  }

  public function index()
  {
    // jika registrasi maka masuk ke menu registrasi
    $this->load->view('form_regis');
  }

  // insert data ke tabel user
  public function insert()
  {
    $data = array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'no_tlp' => $this->input->post('no_tlp'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
    );

    $this->Registrasi_model->insert($data);
    redirect('login');
  }
}


/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */
