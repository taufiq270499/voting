<?php

class M_data extends CI_Model
{

   

public function read_data()
{
  $this->db->select('*');
  $this->db->from('pilih');
  $query = $this->db->get();
  return $query;
}


}