<?php

class Model_Portfolio extends CI_Model 
{
  public function getAll($table)
  {
    return $this->db->get($table);
  }

  public function getEdit($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function getId()
  {
    return $this->db->query("SELECT id FROM portfolio ORDER BY id DESC LIMIT 1");
  }

  public function save($data, $table)
  {
    $this->db->insert($table, $data);
  }
}
