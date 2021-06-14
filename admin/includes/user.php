<?php

class User
{

  public function find_all_users()
  {
    global $database;
    $reslut_set = $database->query("SELECT * FROM users");
    return $reslut_set;
  }
}