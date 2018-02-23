<?php

class Model_slider extends CI_Model
{

  function get_slider_data($param=array())
  {
    if(count($param)>0)
    {
      return $this->db->get_where("slider",$param);
    }
    else {
      return $this->db->get("slider");
    }
  }

  function input()
  {
    $config['upload_path'] = './assets/img/slider/';
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    //fix error wrong extension
    $file_url=FCPATH.'assets/img/slider/'.$hasil['file_name'];

    if(is_file($file_url)!=1)
    {
      $result=true;
      echo "<script>
      alert('Pastikan semua field terisi !.');
      window.location.href='".base_url('slider/input')."';
      </script>";
    }
    else
    {
        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/slider/slider-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);
        $data = array('judul'          => $this->input->post('judul'),
                      'link'           => $this->input->post('link'),
                      'slider_desc'    => $this->input->post('slider_desc'),
                      'foto'           => 'slider-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1]);
        $this->db->insert('slider',$data);

        if($this->db->trans_status()===true)
        {
          echo "
          <script>
          alert('Slider berhasil di input.');
          window.location.href='".base_url('slider')."';
          </script>";
          $this->db->trans_commit();
        }else
        {
          $file_delete=FCPATH.'assets/img/slider/slider-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
          if(is_file($file_delete)==1)
          {
            unlink($file_delete);
          }

          echo "
          <script>
          alert('Slider gagal di input !');
          window.location.href='".base_url('slider/input')."';
          </script>";
          $this->db->trans_rollback();
        }

    }
  }

  function edit()
  {
    $config['upload_path'] = './assets/img/slider/';
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();


    if($hasil['file_name']!=NULL || $hasil['file_name']!="")
    {

      $file_url=FCPATH.'assets/img/slider/'.$hasil['file_name'];
      if(is_file($file_url)!=1)
      {
        $result=true;
        echo "<script>
        alert('Pastikan semua field terisi !.');
        window.location.href='".base_url('slider/input')."';
        </script>";
      }
      else
      {
        unlink("assets/img/slider/".$this->input->post('foto'));

        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/slider/slider-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1];
        rename($file_url,$file_rename);
        $data = array('judul'        => $this->input->post('judul'),
                      'link'         => $this->input->post('link'),
                      'slider_desc'    => $this->input->post('slider_desc'),
                      'foto'         => 'slider-'.Date("Y-m-d h.i.sa").'.'.$file_ext[1]);

      }

    }
    else
    {
      $data = array('judul'        => $this->input->post('judul'),
                    'link'         => $this->input->post('link'),
                    'slider_desc'    => $this->input->post('slider_desc')
                  );
    }
    $this->db->where('id_slider', $this->input->post('id_slider'));
    $result=$this->db->update('slider',$data);
    return $result;
  }

  function delete()
  {
    $file_delete=FCPATH."assets/img/slider/".urldecode($this->uri->segment(4));
    if(is_file($file_delete)==1)
    {
      unlink($file_delete);
    }
    $param=array("id_slider"=>$this->uri->segment(3));
    $this->db->where($param);
    $this->db->delete('slider');
  }

}
