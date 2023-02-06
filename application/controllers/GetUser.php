<?php
defined('BASEPATH') or exit('No direct script access allowed');


class GetUser extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function index()
  {
    $data['user'] = $this->User_model->getUser();
    $this->load->view('admin/static', $data);
		$this->load->view('user/display_user',$data);
  }

}


/* End of file GetUser.php */
/* Location: ./application/controllers/GetUser.php */