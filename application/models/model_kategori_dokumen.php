<?php

class Model_kategori_dokumen extends CI_Model
{

  function input()
  {
    $param=array("deskripsi"=>$this->input->post("deskripsi"));
    $this->db->insert("kategori_dokumen",$param);
  }

  function get_kategori_dokumen($param=array())
  {
    if(count($param)<=0)
    {
      return $this->db->get("kategori_dokumen");
    }
    else
    {
      return $this->db->get_where("kategori_dokumen",$param);
    }
  }

  function edit()
  {
    $data = array('deskripsi' => $this->input->post('deskripsi'));
    $this->db->where('id_kat_dokumen', $this->input->post('id'));
    $this->db->update('kategori_dokumen',$data);
  }

  function delete($param="")
  {
    if($param!="")
    {
      $this->db->where($param);
    }
    $this->db->delete("kategori_dokumen");
  }
}
