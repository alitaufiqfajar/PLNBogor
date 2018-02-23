<?php

class model_dokumen extends CI_Model
{

  function get_data_dokumen($id_dokumen="")
  {
    $sql="
    SELECT * FROM dokumen
    INNER JOIN kategori_dokumen
    ON dokumen.id_kat_dokumen=kategori_dokumen.id_kat_dokumen";
    if($id_dokumen!="")
    {
      $sql.=" AND id_dokumen=".$id_dokumen;
    }
    return $this->db->query($sql);
  }

  function get_kategori_dokumen($id_dokumen="")
  {
    $sql="
    SELECT * FROM dokumen
    INNER JOIN kategori_dokumen
    ON dokumen.id_kat_dokumen=kategori_dokumen.id_kat_dokumen";
    if($id_dokumen!="")
    {
      $sql.=" AND dokumen.id_kat_dokumen=".$id_dokumen;
    }
    return $this->db->query($sql);
  }

  function input()
  {
    $config['upload_path'] = './assets/dokumen/';
    $config['allowed_types'] = 'txt|pdf|swf|doc|docx|xls|xlsx|ppt|pptx|vsd|vsdx';
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();
    $file_ext= explode('.',$hasil['file_name']);

    $data = array('judul'          => $this->input->post('judul'),
                  'namafile'      => $hasil['file_name'],
                  'ekstensi'      => $file_ext[1],
                  'id_kat_dokumen'=> $this->input->post('id_kat_dokumen')
                 );
    $this->db->insert('dokumen',$data);

    $file_url=FCPATH.'assets/dokumen/'.$hasil['file_name'];

    if(is_file($file_url)!=1)
    {
      $param=array("namafile"=>$hasil['file_name']);
      $this->db->where($param);
      $this->db->delete("dokumen");

      echo "<script>
      alert('File tidak berhasil di upload, pastikan hanya file dokumen yang di upload.');
      window.location.href='".base_url('dokumen/input')."';
      </script>";
    }
    else
    {
      echo "<script>
      alert('File berhasil di upload !');
      window.location.href='".base_url('dokumen')."';
      </script>";
    }
  }

  function edit()
  {
    $config['upload_path']    = "./assets/dokumen/";
    $config['allowed_types']  = "txt|pdf|swf|doc|docx|xls|xlsx|ppt|pptx|vsd|vsdx";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    if($hasil['file_name']!=NULL || $hasil['file_name']!="")
    {

      $file_url=FCPATH.'assets/dokumen/'.$this->input->post('namafile');
      if(is_file($file_url)==1)
      {
        unlink("assets/dokumen/".$this->input->post('namafile'));
      }

      $file_ext= explode('.',$hasil['file_name']);

      $data = array('judul'          => $this->input->post('judul'),
                    'namafile'      => $hasil['file_name'],
                    'ekstensi'      => $file_ext[1],
                    'id_kat_dokumen'=> $this->input->post('id_kat_dokumen')
                   );

       $file_url=FCPATH.'assets/dokumen/'.$hasil['file_name'];

        if(is_file($file_url)!=1)
        {
            $param=array("namafile"=>$hasil['file_name']);
            $this->db->where($param);
            $this->db->delete("dokumen");

            echo "<script>
            alert('File tidak berhasil di upload, pastikan hanya file dokumen yang di upload.');
            window.location.href='".base_url('dokumen/input')."';
            </script>";
        }
        else
        {
            echo "<script>
            alert('File berhasil di upload !');
            window.location.href='".base_url('dokumen')."';
            </script>";
        }
    }
    else
    {

      $data = array('judul'         => $this->input->post('judul'),
                    'id_kat_dokumen'=> $this->input->post('id_kat_dokumen')
                   );
      echo "<script>
            window.location.href='".base_url('dokumen')."';
            </script>";
    }
    $this->db->where('id_dokumen', $this->input->post('id_dokumen'));
    $this->db->update('dokumen',$data);
  }

  function delete()
  {
    $file_url=FCPATH.'assets/dokumen/'.$this->uri->segment(4);

    if(is_file($file_url)==1)
    {
      unlink(FCPATH."assets/dokumen/".$this->uri->segment(4));
    }
    $param=array("id_dokumen"=>$this->uri->segment(3));
    $this->db->where($param);
    $this->db->delete('dokumen');
  }
}
