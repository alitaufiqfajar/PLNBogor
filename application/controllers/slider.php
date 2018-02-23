<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    authentication($this);
    secure_bypass_menu($this);
    $this->load->model("model_slider");
  }

  function index()
  {
    $data=dashboard_data($this);
    $data['data_slider']=$this->model_slider->get_slider_data();
    $this->template->load('templates/dashboard_template','dashboard/slider/slider',$data);
  }

  function input()
  {
    $data=dashboard_data($this);
    if(isset($_POST['submit']))
    {
      $this->db->trans_begin();
      $this->model_slider->input();
    }
    else
    {
      $this->template->load('templates/dashboard_template','dashboard/slider/input',$data);
    }
  }

  function edit()
  {
    $data=dashboard_data($this);
    if(isset($_POST['submit']))
    {
      $this->db->trans_begin();
      $this->model_slider->edit();
      if($this->db->trans_status()===true)
      {
        echo "
        <script>
        alert('Slider berhasil di edit.');
        window.location.href='".base_url('slider')."';
        </script>";
        $this->db->trans_commit();
      }else
      {
        $url=base_url("slider/edit/".$this->uri->segment(3));
        echo "
        <script>
        alert('Slider gagal di edit.');
        window.location.href=".$url.";</script>";
        $this->db->trans_rollback();
      }
    }
    else
    {
      $id_slider=$this->uri->segment(3);
      $param=array("id_slider"=>$id_slider);
      $data['data_slider']=$this->model_slider->get_slider_data($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/slider/edit',$data);
    }
  }

  function delete()
  {
    $this->model_slider->delete();
    echo "
    <script>
    alert('User berhasil di hapus.');
    window.location.href='".base_url('slider')."';
    </script>";
  }
}
