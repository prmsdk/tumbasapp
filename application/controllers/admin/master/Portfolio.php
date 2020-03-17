<?php

class Portfolio extends CI_Controller 
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('model_portfolio');
  }

  public function index()
  {
    $data['portfolio'] = $this->model_portfolio->getAll('portfolio')->result();
    $data['port_kat'] = $this->model_portfolio->getAll('port_kat')->result();
    $data['port_fitur'] = $this->model_portfolio->getAll('port_fitur')->result();

    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/portfolio/index', $data);
    $this->load->view('admin/templates/footer');
  }

  public function edit($id)
  {
    $where = array('id' => $id);
    $data['portfolio'] = $this->model_portfolio->getEdit($where, 'portfolio')->result();

    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/portfolio/edit', $data);
    $this->load->view('admin/templates/footer');
  }

  public function save()
  {
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi', true);
    $harga = $this->input->post('harga');
    $platform = $this->input->post('platform');
    $author = $this->input->post('author');
    $status = $this->input->post('status');

    $old_id = $this->model_portfolio->getId()->row();

    $row_id = $this->model_portfolio->getId()->num_rows();
    if($row_id>0){
    $id = $this->primslib->autonumber($old_id->id, 3, 12);
    }else{
    $id = 'PFL000000000001';
    }

    $created_by = "prmsdk";
    $created_at = date('Y-m-d H:i:s');

    $data = array(
      'id' => $id,
      'kat_id' => 'KPF000000000001',
      'fitur_id' => 'FPF000000000001',
      'nama' => $nama,
      'deskripsi' => $deskripsi,
      'harga' => $harga,
      'platform' => $platform,
      'author' => $author,
      'status' => $status,
      'deleted' => '0',
      'created_by' => $created_by,
      'created_at' => $created_at
    );

    $this->model_portfolio->save($data, 'portfolio');
    redirect('admin/master/portfolio');

  }
}
