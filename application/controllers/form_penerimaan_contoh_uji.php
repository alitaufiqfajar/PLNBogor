<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class form_penerimaan_contoh_uji extends CI_Controller

{

  function __construct()

  {

    parent::__construct();

    authentication($this);

    secure_bypass_menu($this);

    $this->load->model("model_penerimaan_form_contoh_uji");

  }



  function index()

  {

    $data=dashboard_data($this);

    $data['form_penerimaan']=$this->model_penerimaan_form_contoh_uji->get_penerimaan_form();

    $this->template->load('templates/dashboard_template','dashboard/penerimaan_contoh_uji/penerimaan_contoh_uji',$data);

  }



  function input()

  {

    $data=dashboard_data($this);

    if (isset($_POST['submit'])) {

      $this->model_penerimaan_form_contoh_uji->input();

      /*redirect('form_penerimaan_contoh_uji');*/

    } else {

      $this->template->load('templates/dashboard_template','dashboard/penerimaan_contoh_uji/input', $data);

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

    $param=array("id_penerimaan"=>$this->uri->segment(3));

    $this->model_penerimaan_form_contoh_uji->delete($param);

    redirect ('form_penerimaan_contoh_uji');

  }

  function get_detail()
  {
    $data=dashboard_data($this);
    $param= array("penerimaan_contoh.id_penerimaan"=>$this->uri->segment(3));
    $parameter = $this->uri->segment(3);
    $data['detail_penerimaan'] = $this->model_penerimaan_form_contoh_uji->get_detail($param)->result_array();
    $data['detail_penerimaan_contoh'] = $this->model_penerimaan_form_contoh_uji->get_detail_contoh_uji($parameter)->result_array();
    $this->template->load('templates/dashboard_template','dashboard/penerimaan_contoh_uji/get_detail',$data);
  }

}

