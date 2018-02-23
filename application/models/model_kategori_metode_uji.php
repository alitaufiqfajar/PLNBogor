<?php



class Model_kategori_metode_uji extends CI_Model

{



  function input()

  {

    $param=array("nama_metode_uji"=>$this->input->post("nama_metode_uji"));

    $this->db->insert("metode_uji",$param);

  }



  function get_metode_uji($param=array())

  {

    if(count($param)<=0)

    {

      return $this->db->get("metode_uji");

    }

    else

    {

      return $this->db->get_where("metode_uji",$param);

    }

  }



  function edit()

  {

    $data = array('nama_metode_uji' => $this->input->post('nama_metode_uji'));

    $this->db->where('id_metode_uji', $this->input->post('id'));

    $this->db->update('metode_uji',$data);

  }



  function delete($param="")

  {

    if($param!="")

    {

      $this->db->where($param);

    }

    $this->db->delete("metode_uji");

  }

}

