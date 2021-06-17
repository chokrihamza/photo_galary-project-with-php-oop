<?php

class User extends Db_object
{
  protected static $db_table = "users";
  protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
  public $id;
  public $username;
  public $password;
  public $first_name;
  public $last_name;

  public static function verify_user($username, $password)
  {
    global $database;
    $username = $database->escape_string($username);
    $password = $database->escape_string($password);
    $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
    $sql .= "username='{$username}' ";
    $sql .= " AND password='{$password}' ";
    $sql .= "LIMIT 1";
    $the_reslut_array = self::find_by_query($sql);
    return  !empty($the_reslut_array) ? array_shift($the_reslut_array) : false;
  }
 

  
}