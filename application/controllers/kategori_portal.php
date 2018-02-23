<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_portal extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_kategori_portal');
    $this->load->model('model_user');
    authentication($this);
    secure_bypass_menu($this);
  }
  function index()
  {
    $data=dashboard_data($this);
    $data['kategori_portal'] = $this->model_kategori_portal->get_kategori_portal();
    $this->template->load('templates/dashboard_template','dashboard/kategori_portal/kategori_portal',$data);
  }


  function input()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->model_kategori_portal->input();
      redirect('kategori_portal');
    } else {
      $param=array("id_kat_portal"=>$this->uri->segment(3));
      $data['kategori_portal'] = $this->model_kategori_portal->get_kategori_portal($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/kategori_portal/input',$data);
    }
  }

    function edit()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->model_kategori_portal->edit();
      redirect('kategori_portal');
    } else {
      $param=array("id_kat_portal"=>$this->uri->segment(3));
      $data['kategori_portal'] = $this->model_kategori_portal->get_kategori_portal($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/kategori_portal/edit',$data);
    }
  }
  function delete()
  {
    $param=array("id_kat_portal"=>$this->uri->segment(3));
    $this->model_kategori_portal->delete($param);
    redirect ('Kategori_portal');
  }



}
