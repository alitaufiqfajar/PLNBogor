<?php

class Model_kategori_portal extends CI_Model
{

  function input()
  {
    $data = array('deskripsi' => $this->input->post('deskripsi'));
    $this->db->insert('kategori_portal',$data);
  }

  function get_kategori_portal($param=array())
  {
    if(count($param)<=0)
    {
      return $this->db->get("kategori_portal");
    }
    else
    {
      return $this->db->get_where("kategori_portal",$param);
    }
  }

  function edit()
  {
    $data = array('deskripsi' => $this->input->post('deskripsi'));
    $this->db->where('id_kat_portal', $this->input->post('id'));
    $this->db->update('kategori_portal',$data);
  }

  function delete($param="")
  {
    if($param!="")
    {
      $this->db->where($param);
    }
    $this->db->delete("kategori_portal");
  }
}
