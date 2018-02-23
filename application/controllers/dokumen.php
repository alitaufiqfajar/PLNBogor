<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    authentication($this);
    $this->load->model('model_dokumen');
    $this->load->model('model_kategori_dokumen');
  }

  function index()
  {
    $data=dashboard_data($this);
    $data['data_dokumen'] = $this->model_dokumen->get_data_dokumen();
    $this->template->load('templates/dashboard_template','dashboard/dokumen/dokumen',$data);
  }

  function input()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->model_dokumen->input();

    } else {
      $data['kat_dokumen']  =$this->model_kategori_dokumen->get_kategori_dokumen()->result();
      $this->template->load('templates/dashboard_template','dashboard/dokumen/input',$data);
    }
  }

  function delete()
  {
    $this->model_dokumen->delete();
    echo "
    <script>
    alert('Dokumen berhasil di hapus.');
    window.location.href='".base_url('dokumen')."';
    </script>";
  }

  function edit()
  {
    $data=dashboard_data($this);
    if(isset($_POST['submit']))
    {
      $this->model_dokumen->edit();
    }
    else
    {
      $id_dokumen=$this->uri->segment(3);
      $data['kat_dokumen']  =$this->model_kategori_dokumen->get_kategori_dokumen()->result();
      $data['data_dok']=$this->model_dokumen->get_data_dokumen($id_dokumen)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/dokumen/edit',$data);
    }
  }
}
