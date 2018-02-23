<?php

class Model_galery extends CI_Model
{

  function get_galery($param=array())
  {
    if(count($param)<=0)
    {
      $query = "
      SELECT * FROM galery";

    return $this->db->query($query);
    }
    else
    {
      return $this->db->get_where("galery",$param);
    }
  }


  function input()
  {
    $config['upload_path'] = './assets/img/galery/';
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();
    //fix error wrong extension
    $file_url=FCPATH.'assets/img/galery/'.$hasil['file_name'];

    if(is_file($file_url)!=1)
    {
      $result=true;
      echo "<script>
      alert('Pastikan semua field terisi !.');
      window.location.href='".base_url('galery/input')."';
      </script>";
    }
    else
    {
        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/galery/portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);

        $data = array('judul'          => $this->input->post('judul'),
                      'foto'           => 'portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1]);
        $this->db->insert('galery',$data);

        if($this->db->trans_status()===true)
        {
          echo "
          <script>
          alert('galery berhasil di input.');
          window.location.href='".base_url('galery')."';
          </script>";
          $this->db->trans_commit();
        }else
        {
          $file_delete=FCPATH.'assets/img/galery/portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
          if(is_file($file_delete)==1)
          {
            unlink($file_delete);
          }

          echo "
          <script>
          alert('galery gagal di input !');
          window.location.href='".base_url('galery/input')."';
          </script>";
          $this->db->trans_rollback();
        }
     }
  }

  function get_old_foto_name($id)
  {
    $param=array("id_galery"=>$id);
    $data=$this->db->get_where("galery",$param)->result_array();
    foreach ($data as $key)
    {
      $ret=$key['foto'];
    }
    return $ret;
  }

  function edit()
  {
    $config['upload_path']    = "./assets/img/galery/";
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    if($hasil['file_name']!=NULL || $hasil['file_name']!="")
    {
      $file_url=FCPATH.'assets/img/galery/'.$hasil['file_name'];

      if(is_file($file_url)!=1)
      {
        $result=true;
        echo "<script>
        alert('Pastikan semua field terisi !.');
        window.location.href='".base_url('galery/input')."';
        </script>";
      }
      else
      {
        unlink("assets/img/galery/".$this->get_old_foto_name($this->input->post('id')));

        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/galery/portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);
        $data = array('judul'          => $this->input->post('judul'),
                        'foto'           => 'portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1]);
      }

    }
    else
    {
      $data = array('judul'          => $this->input->post('judul'));

    }

    $this->db->where('id_galery', $this->input->post('id'));
    $this->db->update('galery',$data);
  }

  function delete($param="")
  {
    $file_delete=FCPATH."assets/img/galery/".urldecode($this->get_old_foto_name($this->uri->segment(3)));
    if(is_file($file_delete)==1)
    {
      unlink($file_delete);
    }
    if($param!="")
    {
      $this->db->where($param);
    }
      $this->db->delete('galery');
  }
}
