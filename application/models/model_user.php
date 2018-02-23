<?php

class Model_user extends CI_Model
{

  function get_user($param=array())
  {
    if(count($param)<=0)
    {
      $query = "SELECT
              user.id_user,
              user.nip,
              user.nama,
              user.tgl_lahir,
              user.jenis_kelamin,
              user.no_telp,
              user.email,
              user.alamat,
              user.foto,
              user.username,
              user.password,
              user.tgl_dibuat,
              user_roles.id_role,
              user_roles.role_name,
              user_roles.role_desc
              FROM user
              INNER JOIN user_roles ON user.id_role = user_roles.id_role
              ORDER BY user.id_user ASC";
    return $this->db->query($query);
    }
    else
    {
      return $this->db->get_where("user",$param);
    }
  }


  function input()
  {
    //Validate
    $nip=$this->input->post('nip');
    $username=$this->input->post('username');
    $nama=$this->input->post('nama');

    $config['upload_path'] = './assets/img/user/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $this->load->library('upload',$config);
    $this->upload->do_upload();
    $hasil  = $this->upload->data();

    //fix error wrong extension
    $file_url=FCPATH.'assets/img/user/'.$hasil['file_name'];

    if(is_file($file_url)!=1)
    {
      $param=array("nip"=>$nip);
      $this->db->where($param);
      $this->db->delete("user");
      $result=true;
      echo "<script>
      alert('Pastikan semua field terisi !.');
      window.location.href='".base_url('user/input')."';
      </script>";
    }
    else
    {
        $file_ext= explode('.',$hasil['file_name']);
        $file_rename=FCPATH.'assets/img/user/profil-'.$nip.'.'.$file_ext[1];
        rename($file_url,$file_rename);
        $data = array('nip'            => $nip,
                      'nama'           => $this->input->post('nama'),
                      'tgl_lahir'      => $this->input->post('tgl_lahir'),
                      'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
                      'no_telp'        => $this->input->post('no_telp'),
                      'email'          => $this->input->post('email'),
                      'alamat'         => $this->input->post('alamat'),
                      'username'       => $username,
                      'password'       => md5($this->input->post('password')),
                      'foto'           => 'profil-'.$nip.'.'.$file_ext[1],
                      'id_role'        => $this->input->post('id_role'));

        $result=$this->db->insert('user',$data);

        if($this->db->trans_status()===true)
        {
          echo "
          <script>
          alert('User berhasil di input.');
          window.location.href='".base_url('user')."';
          </script>";
          $this->db->trans_commit();
        }else
        {
          $file_delete=FCPATH."assets/img/user/".'profil-'.$nip.'.'.$file_ext[1];
          if(is_file($file_delete)==1)
          {
            unlink($file_delete);
          }

          echo "
          <script>
          alert('User gagal di input, username atau nip telah ada.');
          window.location.href='".base_url('user/input')."';
          </script>";
          $this->db->trans_rollback();
        }

    }

    return $result;
  }

  function get_old_foto_name($id)
  {
    $param=array("id_user"=>$id);
    $data=$this->db->get_where("user",$param)->result_array();
    foreach ($data as $key)
    {
      $ret=$key['foto'];
    }
    return $ret;
  }

  function edit()
  {
    $nip=$this->input->post('nip');
    $username=$this->input->post('username');
    $nama=$this->input->post('nama');

    $config['upload_path']    = "./assets/img/user/";
    $config['allowed_types']  = "gif|jpg|png|jpeg";
    $this->load->library('upload',$config);
    $this->upload->do_upload();

    $hasil  = $this->upload->data();

    //fix error wrong extension
    $file_url=FCPATH.'assets/img/user/'.$hasil['file_name'];

    if($this->input->post('password')!=NULL || $this->input->post('password')!="")
    {
      if($hasil['file_name']!=NULL || $hasil['file_name']!="")
      {
        if(is_file($file_url)!=1)
        {
          $param=array("nip"=>$nip);
          $this->db->where($param);
          $this->db->delete("user");

          $url=base_url('user/edit/'.$this->uri->segment(3));

          echo "<script>
          alert('Pastikan semua field terisi !.');
          window.location.href='".$url."';
          </script>";
        }
        else
        {
          unlink("assets/img/user/".$this->input->post('foto'));
          $file_ext= explode('.',$hasil['file_name']);
          $file_rename=FCPATH.'assets/img/user/profil-'.$nip.'.'.$file_ext[1];
          rename($file_url,$file_rename);
          $data = array('nip'            => $nip,
                        'nama'           => $this->input->post('nama'),
                        'tgl_lahir'      => $this->input->post('tgl_lahir'),
                        'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
                        'no_telp'        => $this->input->post('no_telp'),
                        'email'          => $this->input->post('email'),
                        'alamat'         => $this->input->post('alamat'),
                        'username'       => $username,
                        'password'       => md5($this->input->post('password')),
                        'foto'           => 'profil-'.$nip.'.'.$file_ext[1],
                        'id_role'        => $this->input->post('id_role'));

        }
      }
      else
      {
        $data = array('nip'            => $this->input->post('nip'),
                      'nama'           => $this->input->post('nama'),
                      'tgl_lahir'      => $this->input->post('tgl_lahir'),
                      'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
                      'no_telp'        => $this->input->post('no_telp'),
                      'email'          => $this->input->post('email'),
                      'alamat'         => $this->input->post('alamat'),
                      'username'       => $this->input->post('username'),
                      'password'       => md5($this->input->post('password')),
                      'id_role'        => $this->input->post('id_role'));
      }


    }
    else
    {
      if($hasil['file_name']!=NULL || $hasil['file_name']!="")
      {
        if(is_file($file_url)!=1)
        {
          $param=array("nip"=>$nip);
          $this->db->where($param);
          $this->db->delete("user");

          echo "<script>
          alert('Pastikan semua field terisi !.');
          window.location.href='".base_url('user/input')."';
          </script>";
        }
        else
        {
          unlink("assets/img/user/".$this->input->post('foto'));
          $file_ext= explode('.',$hasil['file_name']);
          $file_rename=FCPATH.'assets/img/user/profil-'.$nip.'.'.$file_ext[1];
          rename($file_url,$file_rename);
          $data = array('nip'            => $nip,
                        'nama'           => $this->input->post('nama'),
                        'tgl_lahir'      => $this->input->post('tgl_lahir'),
                        'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
                        'no_telp'        => $this->input->post('no_telp'),
                        'email'          => $this->input->post('email'),
                        'alamat'         => $this->input->post('alamat'),
                        'username'       => $username,
                        'foto'           => 'profil-'.$nip.'.'.$file_ext[1],
                        'id_role'        => $this->input->post('id_role'));

        }
      }
      else
      {
        $data = array('nip'            => $this->input->post('nip'),
                      'nama'           => $this->input->post('nama'),
                      'tgl_lahir'      => $this->input->post('tgl_lahir'),
                      'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
                      'no_telp'        => $this->input->post('no_telp'),
                      'email'          => $this->input->post('email'),
                      'alamat'         => $this->input->post('alamat'),
                      'username'       => $this->input->post('username'),
                      'id_role'        => $this->input->post('id_role'));
       }
    }

    $this->db->where('id_user', $this->input->post('id'));
    $result=$this->db->update('user',$data);
    return $result;

  }


  function delete($param="")
  {
    $file_delete=FCPATH."assets/img/user/".$this->get_old_foto_name($this->uri->segment(3));
    if(is_file($file_delete)==1)
    {
      unlink($file_delete);
    }
    if($param!="")
    {
      $this->db->where($param);
    }
    $this->db->delete('user');

  }
}
