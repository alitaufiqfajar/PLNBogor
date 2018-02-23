<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_dokumen extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    authentication($this);
    secure_bypass_menu($this);
    $this->load->model("model_kategori_dokumen");
  }

  function index()
  {
    $data=dashboard_data($this);
    $data['kat_dokumen']=$this->model_kategori_dokumen->get_kategori_dokumen();
    $this->template->load('templates/dashboard_template','dashboard/kategori_dokumen/kategori_dokumen',$data);
  }

  function input()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->model_kategori_dokumen->input();
      redirect('kategori_dokumen');
    } else {
      $this->template->load('templates/dashboard_template','dashboard/kategori_dokumen/input', $data);
    }
  }

  function edit()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit']))
    {
      $this->model_kategori_dokumen->edit();
      redirect('kategori_dokumen');
    } else
    {
      $param=array("id_kat_dokumen"=>$this->uri->segment(3));
      $data['kat_dokumen'] = $this->model_kategori_dokumen->get_kategori_dokumen($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/kategori_dokumen/edit',$data);
    }
  }

  function delete()
  {
    $param=array("id_kat_dokumen"=>$this->uri->segment(3));
    $this->model_kategori_dokumen->delete($param);
    redirect ('kategori_dokumen');
  }
}
