<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class kategori_metode_uji extends CI_Controller

{

  function __construct()

  {

    parent::__construct();

    authentication($this);

    secure_bypass_menu($this);

    $this->load->model("model_kategori_metode_uji");

  }



  function index()

  {

    $data=dashboard_data($this);

    $data['kat_metode_uji']=$this->model_kategori_metode_uji->get_metode_uji();

    $this->template->load('templates/dashboard_template','dashboard/kategori_metode_uji/kategori_metode_uji',$data);

  }



  function input()

  {

    $data=dashboard_data($this);

    if (isset($_POST['submit'])) {

      $this->model_kategori_metode_uji->input();

      redirect('kategori_metode_uji');

    } else {

      $this->template->load('templates/dashboard_template','dashboard/kategori_metode_uji/input', $data);

    }

  }



  function edit()

  {

    $data=dashboard_data($this);

    if (isset($_POST['submit']))

    {

      $this->model_kategori_metode_uji->edit();

      redirect('kategori_metode_uji');

    } else

    {

      $param=array("id_metode_uji"=>$this->uri->segment(3));

      $data['kat_metode_uji'] = $this->model_kategori_metode_uji->get_metode_uji($param)->row_array();

      $this->template->load('templates/dashboard_template','dashboard/kategori_metode_uji/edit',$data);

    }

  }



  function delete()

  {

    $param=array("id_metode_uji"=>$this->uri->segment(3));

    $this->model_kategori_metode_uji->delete($param);

    redirect ('kategori_metode_uji');

  }

}

