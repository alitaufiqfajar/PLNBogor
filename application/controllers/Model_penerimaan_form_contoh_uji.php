<?php



class model_penerimaan_form_contoh_uji extends CI_Model

{



  function input()

  {

    $param=array("nama_metode_uji"=>$this->input->post("nama_metode_uji"));

    $this->db->insert("metode_uji",$param);

  }



  function get_penerimaan_form($param=array())

  {

    if(count($param)<=0)

    {

      return $this->db->get("penerimaan_contoh");

    }

    else

    {

      return $this->db->get_where("penerimaan_contoh",$param);

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

