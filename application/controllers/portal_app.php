<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal_app extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    authentication($this);
    $this->load->model('model_portal_app');
    $this->load->model('model_kategori_portal');
  }

  function index()
  {
    $data=dashboard_data($this);
    $data['portal_app'] = $this->model_portal_app->get_portal_app();
    $this->template->load('templates/dashboard_template','dashboard/portal_app/portal_app',$data);
  }

  function input()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->db->trans_begin();
      $this->model_portal_app->input();
    } else {
      $this->load->model('model_kategori_portal');
      $data['kat_portal'] = $this->model_kategori_portal->get_kategori_portal()->result();
      $this->template->load('templates/dashboard_template','dashboard/portal_app/input',$data);
    }
  }

  function edit()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->db->trans_begin();
      $this->model_portal_app->edit();
      if($this->db->trans_status()===true)
      {
        echo "
        <script>
        alert('Portal App berhasil di edit.');
        window.location.href='".base_url('portal_app')."';
        </script>";
        $this->db->trans_commit();
      }else
      {
        $url=base_url("portal_app/edit/".$this->uri->segment(3));
        echo "
        <script>
        alert('Portal App gagal di edit.');
        window.location.href=".$url.";</script>";
        $this->db->trans_rollback();
      }
    } else {
      $param=array("id_portal"=>$this->uri->segment(3));
      $this->load->model('model_kategori_portal');
      $data['kat_portal'] = $this->model_kategori_portal->get_kategori_portal()->result();
      $data['portal_app'] = $this->model_portal_app->get_portal_app($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/portal_app/edit',$data);
    }
  }

  function delete()
  {
    $param=array("id_portal"=>$this->uri->segment(3));
    $this->model_portal_app->delete($param);
    echo "
    <script>
    alert('Portal App berhasil di hapus.');
    window.location.href='".base_url('portal_app')."';
    </script>";
  }
}
