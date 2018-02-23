<?php
 class Multi_Insert extends CI_Controller {

  function __construct() {
   parent::__construct();
   
   
   $this->load->library('form_validation'); // digunakan untuk proses validasi yg di input
   $this->load->database(); // Load our cart model for our entire class
   $this->load->helper(array('url','form')); // Load our cart model for our entire class
  }
  
  function index() {
   $this->load->view('form_insert'); // Display the page
  }
  
  function insert_keDB() {
   $this->form_validation->set_rules('nama[]', 'nama', 'required');
   $this->form_validation->set_rules('umur[]', 'umur', 'required');
   $this->form_validation->set_rules('asal[]', 'asal', 'required');
   
   if ($this->form_validation->run() == FALSE){
    echo validation_errors(); // tampilkan apabila ada error
   }else{
    
    $nm = $this->input->post('nama');
    $result = array();
    foreach($nm AS $key => $val){
     $result[] = array(
      "nama"  => $_POST['nama'][$key],
      "umur"  => $_POST['umur'][$key],
      "asal"  => $_POST['asal'][$key]
     );
    }            
    
    $test= $this->db->insert_batch('list_name', $result); // fungsi dari codeigniter untuk menyimpan multi array
    
    if($test){
     echo "nama sukses di input";
     redirect('multi_insert');    }else{
     echo "gagal di input";
    }
   }
  }
 }

/* End of file multi_insert.php */
/* Location: ./application/controllers/multi_insert.php */
?>