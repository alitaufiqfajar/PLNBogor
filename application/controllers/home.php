<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_home');
	 	$this->load->model('model_konten');
	 	$this->load->model('model_kategori_konten');
		$this->load->model('model_portal_app');
		$this->load->model('model_dokumen');
		$this->load->model('model_kategori_dokumen');
    	$this->load->model('model_kategori_portal');
		$this->load->model('model_slider');
		$this->load->model('model_galery');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['slider']=$this->model_home->get_slider();
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$data['artikel']= $this->model_home->get_artikel();
		$data['galery'] = $this->model_galery->get_galery();
		$this->template->load('templates/home_template','home/home',$data);
	}

	function portal_app()
	{
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$data['portal_app'] = $this->model_portal_app->get_portal_app();
		$data['kat_portal'] = $this->model_kategori_portal->get_kategori_portal();
		$this->template->load('templates/home_template','home/portal_app/portal_app',$data);
	}

	function konten()
	{
	    $config['base_url'] = base_url().'home/konten/';
	    $config['total_rows'] = $this->model_home->get_konten()->num_rows();
	    $config['per_page'] = 4;

	    //berfungsi untuk melampirkan markup
	    $config['full_tag_open'] = '<ul>';
	    $config['full_tag_close'] = '</ul>';

	    $this->pagination->initialize($config);
	    $row          = $this->uri->segment('3');
	    $row          = $row ==''?0:$row;

	    $data['page']   = $this->model_home->get_page_konten($row);
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$this->template->load('templates/home_template','home/konten/konten',$data);
	}
	
	function detail_konten()
	{
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$param=array("id_konten"=>$this->uri->segment(3));
		$data['konten'] = $this->model_konten->get_konten($param)->row_array();
		$this->template->load('templates/home_template','home/konten/detail_konten',$data);
	}

	function dokumen()
	{
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$data['dokumen']=$this->model_dokumen->get_data_dokumen();
		$data['kat_dokumen']=$this->model_kategori_dokumen->get_kategori_dokumen();
		$this->template->load('templates/home_template','home/dokumen/dokumen',$data);
		// $this->load->view('home/dokumen/a');
	}

	function pencarian()
	{
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$config['base_url'] = base_url().'home/pencarian/';
	    $config['total_rows'] = $this->model_home->get_konten()->num_rows();
	    $config['per_page'] = 4;

	    //berfungsi untuk melampirkan markup
	    $config['full_tag_open'] = '<ul>';
	    $config['full_tag_close'] = '</ul>';

	    $this->pagination->initialize($config);
	    $row          = $this->uri->segment('3');
	    $row          = $row ==''?0:$row;

	    $data['page']   = $this->model_home->get_page_konten($row);

		$cari=$this->input->post('cari');
        $data['cari']=$this->model_home->cari($cari)->result();
        $this->template->load('templates/home_template','home/pencarian/pencarian',$data);
	}

	function galery()
	{
		$data['parent_menu']= $this->model_home->get_menu_parent("home");
		$data['galery'] = $this->model_galery->get_galery();
		$this->template->load('templates/home_template','home/galery/galery',$data);
	}

	}


