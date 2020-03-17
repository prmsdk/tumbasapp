<?php

class Jenis_Karya extends CI_Controller 
{
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['jenis_karya'] = $this->model_karya->getAll()->result();

    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/jenis_karya/index', $data);
    $this->load->view('admin/templates/footer');
  }
}
