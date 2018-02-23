<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    authentication($this);
    $this->load->model('model_galery');
  }

  function index()
  {
    $data=dashboard_data($this);
    $data['galery'] = $this->model_galery->get_galery();
    $this->template->load('templates/dashboard_template','dashboard/galery/galery',$data);
  }

  function input()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->db->trans_begin();
      $this->model_galery->input();
    } else {
      $this->template->load('templates/dashboard_template','dashboard/galery/input',$data);
    }
  }

  function edit()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit'])) {
      $this->db->trans_begin();
      $this->model_galery->edit();
      if($this->db->trans_status()===true)
      {
        echo "
        <script>
        alert('Galery berhasil di edit.');
        window.location.href='".base_url('galery')."';
        </script>";
        $this->db->trans_commit();
      }else
      {
        $url=base_url("galery/edit/".$this->uri->segment(3));
        echo "
        <script>
        alert('Galery gagal di edit.');
        window.location.href=".$url.";</script>";
        $this->db->trans_rollback();
      }
    } else {
      $param=array("id_galery"=>$this->uri->segment(3));
      $data['galery'] = $this->model_galery->get_galery($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/galery/edit',$data);
    }
  }

  function delete()
  {
    $param=array("id_galery"=>$this->uri->segment(3));
    $this->model_galery->delete($param);
    echo "
    <script>
    alert('Galery berhasil di hapus.');
    window.location.href='".base_url('galery')."';
    </script>";
  }
}
