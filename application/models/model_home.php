<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model
{

  function get_menu_parent($page)
  {
    if($page=="all")
    {

      $sql="SELECT * FROM menu WHERE parent=0";
    }
    else {

      $sql="SELECT * FROM menu WHERE page='$page' AND parent=0";
    }
    $query= $this->db->query($sql);
    return $query->result_array();
  }

  function get_count_child($id_parent)
  {
    $sql="SELECT COUNT(*) as total_child FROM menu WHERE parent=$id_parent";
    $query=$this->db->query($sql);
    $row=$query->row_array();
    $result=$row['total_child'];
    return $result;
  }

  function get_menu_child($id_parent,$page)
  {
    $sql="SELECT * FROM menu WHERE page='$page' AND parent=$id_parent";
    $query= $this->db->query($sql);
    return $query->result_array();
  }

  function verify_dashboard_menu_by_role($id_role,$id_menu)
  {
    $sql="
    SELECT user_nav.id_role,user_roles.role_name,user_nav.id_menu,menu.judul
    FROM user_nav,user_roles,menu
    WHERE user_roles.id_role=user_nav.id_role
    AND menu.id_menu=user_nav.id_menu
    AND user_roles.id_role=$id_role
    AND menu.id_menu=$id_menu";
    return $this->db->query($sql);
  }

  public function record_count() {
    return $this->db->count_all("dokumen");
    }

    // Fetch data according to per_page limit.
  public function fetch_data($limit, $id)
   {
    $this->db->limit($limit);
    $this->db->where('id_dokumen', $id);
    $query = $this->db->get("dokumen");
    if ($query->num_rows() > 0)
    {
    foreach ($query->result() as $row) {
    $data[] = $row;
    }

    return $data;
    }
    return false;
    }
  
  function get_artikel()
    {
      $sql="SELECT * FROM konten order by id_konten DESC limit 7";
      return $this->db->query($sql);  
    }

  function get_slider()
    {
      $sql="SELECT * FROM slider order by id_slider DESC limit 6";
      return $this->db->query($sql);  
    }

   function get_page_konten($row)
    {
    $query = ("SELECT * FROM konten ORDER by id_konten DESC LIMIT $row,4");
    return $this->db->query($query);
    }

   function get_konten()
    {
    return $this->db->get('konten');
    }

   function get_portal()
    {
    return $this->db->get('portal_app');
    }

    private $primary="id_konten";
    private $table="konten";
  function cari($cari){

        $this->db->like("$this->primary",$cari);
        $this->db->or_like("judul",$cari);
        $this->db->or_like("isi_deskripsi",$cari);
        $this->db->or_like("isi",$cari);
        $this->db->or_like("tgl_dibuat",$cari);
        $this->db->limit(4);
        return $this->db->get($this->table);
    }
}
