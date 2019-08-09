<?php
class model extends CI_model
{
  private $db_user = 'giw';
  public function insert($data)
  {
    $this->db->insert($this->db_user, $data);
  }
  public function show($data) //แสดงค่าในดาตราง
  {

    $query = $this->db->get('giw');
      //
      foreach ($query->result() as $row)
      {
              // echo  "ID is ".$row->user_name."<br>";
              // echo "password is ".$row->user_pass."<br><br>";
              //echo $row->user_name."<br>"; //แสดงค่า user_name ทั้งหมด
              $row->user;
              $row->pass;
            //echo $row->color."<br><br>"; //แสดงค่า user_pass ทั้งหมด
      }

      return $query;
  }
}
