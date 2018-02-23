<?php

class Model_konten extends CI_Model
{

  function input()
  {
    $config['upload_path'] = './assets/img/konten/';
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    //fix error wrong extension
    $file_url=FCPATH.'assets/img/konten/'.$hasil['file_name'];
    if(is_file($file_url)!=1)
    {
      $result=true;
      echo "<script>
      alert('Pastikan semua field terisi !.');
      window.location.href='".base_url('konten/input')."';
      </script>";
    }
    else
    {
        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/konten/cover-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);

        $data = array('judul'     => $this->input->post('judul'),
                      'foto'      => 'cover-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1],
                      'isi_deskripsi' => $this->input->post('isi_deskripsi'),
                      'isi'       => $this->input->post('isi'),
                      'id_kat_konten' => $this->input->post('id_kat_konten'));
        $this->db->insert('konten',$data);

        if($this->db->trans_status()===true)
        {
          echo "
          <script>
          alert('Konten berhasil di input.');
          window.location.href='".base_url('konten')."';
          </script>";
          $this->db->trans_commit();
        }else
        {
          $file_delete=FCPATH.'assets/img/konten/cover-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
          if(is_file($file_delete)==1)
          {
            unlink($file_delete);
          }

          echo "
          <script>
          alert('Konten gagal di input !');
          window.location.href='".base_url('konten/input')."';
          </script>";
          $this->db->trans_rollback();
        }

    }
  }

  function get_konten($param=array())
  {
    if(count($param)<=0)
    {
      $query = "SELECT
              konten.id_konten,
              konten.judul,
              konten.foto,
              konten.isi_deskripsi,
              konten.isi,
              konten.tgl_dibuat,
              kategori_konten.id_kat_konten,
              kategori_konten.deskripsi
              FROM konten
              INNER JOIN kategori_konten ON konten.id_kat_konten = kategori_konten.id_kat_konten
              ORDER BY konten.id_konten ASC";
    return $this->db->query($query);
    }
    else
    {
      return $this->db->get_where("konten",$param);
    }
  }

  function get_old_foto_name($id)
  {
    $param=array("id_konten"=>$id);
    $data=$this->db->get_where("konten",$param)->result_array();
    foreach ($data as $key)
    {
      $ret=$key['foto'];
    }
    return $ret;
  }

  function edit()
  {
    $config['upload_path'] = './assets/img/konten/';
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    if($hasil['file_name']!=NULL || $hasil['file_name']!="")
      {

        $file_url=FCPATH.'assets/img/konten/'.$hasil['file_name'];
        if(is_file($file_url)!=1)
        {
          $result=true;
          echo "<script>
          alert('Pastikan semua field terisi !.');
          window.location.href='".base_url('konten/input')."';
          </script>";
        }
        else
        {
          unlink(FCPATH."assets/img/konten/".$this->get_old_foto_name($this->input->post('id')));

          $file_ext= explode('.',$hasil['file_name']);
          $file_rename=FCPATH.'assets/img/konten/cover-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
          rename($file_url,$file_rename);

          $data = array('judul'     => $this->input->post('judul'),
                    'foto'          => 'cover-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1],
                    'isi_deskripsi' => $this->input->post('isi_deskripsi'),
                    'isi'           => $this->input->post('isi'),
                    'id_kat_konten' => $this->input->post('id_kat_konten'));

        }
      }
      else
      {
        $data = array('judul'     => $this->input->post('judul'),
                  'isi_deskripsi' => $this->input->post('isi_deskripsi'),
                  'isi'           => $this->input->post('isi'),
                  'id_kat_konten' => $this->input->post('id_kat_konten'));
      }

    $this->db->where('id_konten', $this->input->post('id'));
    $this->db->update('konten',$data);
  }

  function delete($param="")
  {
    $file_delete=FCPATH."assets/img/konten/".urldecode($this->get_old_foto_name($this->uri->segment(3)));
    if(is_file($file_delete)==1)
    {
      unlink($file_delete);
    }
    if($param!="")
    {
      $this->db->where($param);
    }
    $this->db->delete("konten");
  }

}
