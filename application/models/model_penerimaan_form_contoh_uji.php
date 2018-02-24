<?php



class model_penerimaan_form_contoh_uji extends CI_Model

{





  function input()

  {

    $param1=array(
      "no_administrasi"=>$this->input->post("no_administrasi"),
      "nama_atau_instansi_pengirim"=>$this->input->post("nama_atau_instansi_pengirim"),
      "alamat_pengirim"=>$this->input->post("alamat_pengirim"),
      "telp_fax_email_pengirim"=>$this->input->post("telp_fax_email_pengirim"),
      "kondisi_uji"=>$this->input->post("kondisi_uji"),
      "bentuk"=>$this->input->post("bentuk"),
      "warna"=>$this->input->post("warna"),
      "bau"=>$this->input->post("bau"),
      "jernih"=>$this->input->post("jernih"),
      "keruh"=>$this->input->post("keruh"),
      "lainnya"=>$this->input->post("lainnya"),
      "waktu_pengujian"=>$this->input->post("waktu_pengujian"),
      "metode_pengujian"=>$this->input->post("metode_uji"),
      "sdm"=>$this->input->post("sdm"),
      "peralatan"=>$this->input->post("peralatan"),
      "bahan_kimia"=>$this->input->post("bahan_kimia"),
      "jumlah_biaya"=>$this->input->post("jumlah_biaya"),
      "penerima_contoh"=>$this->input->post("penerima_contoh"),
      "status"=>1,

    );

    $insert = $this->db->insert("penerimaan_contoh",$param1);


     
    $jc = $this->input->post('jenis_contoh_input');
    $result = array();
    $id = $this->db->insert_id();

    foreach($jc AS $key => $val){
     $result[] = array(
      "id_penerimaan" => $id,
      "nama_jenis_contoh"  => $_POST['jenis_contoh_input'][$key],
      "kode_contoh"  => $_POST['kode_contoh_input'][$key],
      "jumlah_contoh"  => $_POST['jumlah_contoh_input'][$key],
      "permintaan_pengujian"  => $_POST['permintaan_pengujian_contoh_input'][$key]
     );
    }            
    $test= $this->db->insert_batch('penerimaan_contoh_jenis', $result);
    redirect('form_penerimaan_contoh_uji');
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

    $this->db->delete("penerimaan_contoh");

  }

  function get_detail($param=array())
  {
      $this->db->select("penerimaan_contoh.*,penerimaan_contoh_jenis.*");
      $this->db->from("penerimaan_contoh");
      $this->db->join("penerimaan_contoh_jenis", "penerimaan_contoh.id_penerimaan = penerimaan_contoh_jenis.id_penerimaan");
      $this->db->where($param);
      $query = $this->db->get();

    //$query = $this->db->query('SELECT * FROM penerimaan_contoh RIGHT JOIN penerimaan_contoh_jenis ON penerimaan_contoh.id_penerimaan=penerimaan_contoh_jenis.id_penerimaan WHERE penerimaan_contoh.id_penerimaan = 26');

    return $query;
  }

  function get_detail_contoh_uji($parameter)
  {
    $this->db->select('*');
    $this->db->from('penerimaan_contoh_jenis');
    $this->db->where('id_penerimaan',$parameter);
    $query = $this->db->get();

    return $query;

  }

}

