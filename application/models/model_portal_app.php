<?php

class Model_portal_app extends CI_Model
{

  function get_portal_app($param=array())
  {
    if(count($param)<=0)
    {
      $query = "
      SELECT
      portal_app.*,
      kategori_portal.id_kat_portal,
      kategori_portal.deskripsi
      FROM portal_app
      INNER JOIN kategori_portal ON portal_app.id_kat_portal = kategori_portal.id_kat_portal
      ORDER BY portal_app.id_portal ASC";

    return $this->db->query($query);
    }
    else
    {
      return $this->db->get_where("portal_app",$param);
    }
  }


  function input()
  {
    $config['upload_path'] = './assets/img/portal_app/';
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();
    //fix error wrong extension
    $file_url=FCPATH.'assets/img/portal_app/'.$hasil['file_name'];

    if(is_file($file_url)!=1)
    {
      $result=true;
      echo "<script>
      alert('Pastikan semua field terisi !.');
      window.location.href='".base_url('portal_app/input')."';
      </script>";
    }
    else
    {
        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/portal_app/portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);

        $data = array('judul'          => $this->input->post('judul'),
                      'url'            => $this->input->post('url'),
                      'portal_desc'    => $this->input->post('portal_desc'),
                      'icon'           => 'portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1],
                      'id_kat_portal'  => $this->input->post('id_kat_portal'));
        $this->db->insert('portal_app',$data);

        if($this->db->trans_status()===true)
        {
          echo "
          <script>
          alert('Portal App berhasil di input.');
          window.location.href='".base_url('portal_app')."';
          </script>";
          $this->db->trans_commit();
        }else
        {
          $file_delete=FCPATH.'assets/img/portal_app/portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
          if(is_file($file_delete)==1)
          {
            unlink($file_delete);
          }

          echo "
          <script>
          alert('Portal App gagal di input !');
          window.location.href='".base_url('portal_app/input')."';
          </script>";
          $this->db->trans_rollback();
        }
     }
  }

  function get_old_foto_name($id)
  {
    $param=array("id_portal"=>$id);
    $data=$this->db->get_where("portal_app",$param)->result_array();
    foreach ($data as $key)
    {
      $ret=$key['icon'];
    }
    return $ret;
  }

  function edit()
  {
    $config['upload_path']    = "./assets/img/portal_app/";
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    if($hasil['file_name']!=NULL || $hasil['file_name']!="")
    {
      $file_url=FCPATH.'assets/img/portal_app/'.$hasil['file_name'];

      if(is_file($file_url)!=1)
      {
        $result=true;
        echo "<script>
        alert('Pastikan semua field terisi !.');
        window.location.href='".base_url('portal_app/input')."';
        </script>";
      }
      else
      {
        unlink("assets/img/portal_app/".$this->get_old_foto_name($this->input->post('id')));

        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/portal_app/portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);
        $data = array('judul'          => $this->input->post('judul'),
                        'url'            => $this->input->post('url'),
                        'portal_desc'    => $this->input->post('portal_desc'),
                        'icon'           => 'portal-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1],
                        'id_kat_portal'  => $this->input->post('id_kat_portal'));
      }

    }
    else
    {
      $data = array('judul'          => $this->input->post('judul'),
                    'url'            => $this->input->post('url'),
                    'portal_desc'    => $this->input->post('portal_desc'),
                    'id_kat_portal'  => $this->input->post('id_kat_portal'));

    }

    $this->db->where('id_portal', $this->input->post('id'));
    $this->db->update('portal_app',$data);
  }

  function delete($param="")
  {
    $file_delete=FCPATH."assets/img/portal_app/".urldecode($this->get_old_foto_name($this->uri->segment(3)));
    if(is_file($file_delete)==1)
    {
      unlink($file_delete);
    }
    if($param!="")
    {
      $this->db->where($param);
    }
      $this->db->delete('portal_app');
  }
}
