<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    authentication($this);
    secure_bypass_menu($this);
    $this->load->model('model_user');
    $this->load->model('model_user_roles');
  }

  function index()
  {
    $data=dashboard_data($this);
    $data['user'] = $this->model_user->get_user();
    $this->template->load('templates/dashboard_template','dashboard/user/user',$data);
  }

  function input()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit']))
    {
      $this->db->trans_begin();
      $this->model_user->input();

    } else
    {
      $this->load->model('model_user_roles');
      $data['user_roles'] = $this->model_user_roles->get_user_roles()->result();
      $this->template->load('templates/dashboard_template','dashboard/user/input',$data);
    }
  }

  function edit()
  {
    $data=dashboard_data($this);
    if (isset($_POST['submit']))
    {
      $this->db->trans_begin();
      $this->model_user->edit();
      if($this->db->trans_status()===true)
      {$this->db->trans_commit();
        if($this->input->post('id')==$this->session->userdata('id_user'))
        {
            echo "
            <script>
            alert('User berhasil di edit, Anda login dengan user yang telah diedit ini, Silahkan login kembali.');
            window.location.href='".base_url('login/signout')."';
            </script>";
        }
        else {

            echo "
            <script>
            alert('User berhasil di edit.');
            window.location.href='".base_url('user')."';
            </script>";

        }
      }else
      {
        $url=base_url("user/edit/".$this->uri->segment(3));
        echo "
        <script>
        alert('User gagal di edit.');
        window.location.href=".$url.";</script>";
        $this->db->trans_rollback();
      }
    } else {
      $param=array("id_user"=>$this->uri->segment(3));
      $this->load->model('model_user_roles');
      $data['user_roles'] = $this->model_user_roles->get_user_roles()->result();
      $data['user'] = $this->model_user->get_user($param)->row_array();
      $this->template->load('templates/dashboard_template','dashboard/user/edit',$data);
    }
  }

  function delete()
  {
    $param=array("id_user"=>$this->uri->segment(3));
    $this->model_user->delete($param);
    echo "
    <script>
    alert('User berhasil di hapus.');
    window.location.href='".base_url('user')."';
    </script>";
  }
}
