<?php

class User
{
  protected static $db_table = "users";
  protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
  public $id;
  public $username;
  public $password;
  public $first_name;
  public $last_name;

  public static function find_all()
  {
    return self::find_this_query("SELECT * FROM " . self::$db_table . " ");
  }
  public static function find_by_id($user_id)
  {
    global $database;
    $the_result_array = self::find_this_query("SELECT * FROM " . self::$db_table . " WHERE id=$user_id LIMIT 1");
    $found_user = !empty($the_result_array) ? array_shift($the_result_array) : false;


    return $found_user;
  }

  public static function find_this_query($sql)
  {
    global $database;
    $result_set = $database->query($sql);
    $the_object_array = array();
    while ($row = mysqli_fetch_array($result_set)) {
      $the_object_array[] = self::instantation($row);
    }
    return $the_object_array;
  }

  public static function verify_user($username, $password)
  {
    global $database;
    $username = $database->escape_string($username);
    $password = $database->escape_string($password);
    $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
    $sql .= "username='{$username}' ";
    $sql .= " AND password='{$password}' ";
    $sql .= "LIMIT 1";
    $the_reslut_array = self::find_this_query($sql);
    return  !empty($the_reslut_array) ? array_shift($the_reslut_array) : false;
  }

  public static function instantation($the_record)
  {
    $the_object = new self;
    // $the_object->id = $found_user['id'];
    // $the_object->username = $found_user['username'];
    // $the_object->password = $found_user['password'];
    // $the_object->first_name = $found_user['user_firstname'];
    // $the_object->last_name = $found_user['user_lastname'];
    foreach ($the_record as $the_attribute => $value) {
      if ($the_object->has_the_attribute($the_attribute)) {
        $the_object->$the_attribute = $value;
      }
    }
    return $the_object;
  }

  private function has_the_attribute($the_attribute)
  {
    $object_properties = get_object_vars($this);
    return array_key_exists($the_attribute, $object_properties);
  }

  protected function properties()
  {

    $properties = array();

    foreach (self::$db_table_fields as $db_field) {
      if (property_exists($this, $db_field)) {
        $properties[$db_field] = $this->$db_field;
      }
    }
   
    return $properties;
  }

  protected function clean_properties()
  {
    global $database;
    $clean_properties = array();
    foreach ($this->properties() as $key => $value) {
      $clean_properties[$key] = $database->escape_string($value);
    }
    return $clean_properties;
  }

  public function save()
  {
    return isset($this->id) ? $this->update() : $this->create();
  }


// the create method 
  public function create()
  {
    global $database;
    $properties = $this->clean_properties();
    $sql = "INSERT INTO " . self::$db_table . "(" . implode(",", array_keys($properties)) . ")";
    $sql .= "VALUES('" . implode("','", array_values($properties)) . "')";
    
    // $sql .= $database->escape_string($this->username) . "', '";
    // $sql .= $database->escape_string($this->password) . "', '";
    // $sql .= $database->escape_string($this->first_name) . "', '";
    // $sql .= $database->escape_string($this->last_name) . "')";
    if ($database->query($sql)) {
      $this->id = $database->the_insert_id();
      return true;
    } else {
      return false;
    }
  }
  // the update method
  public function update()
  {
    global $database;

    $properties = $this->clean_properties();
    $properties_pairs = array();
    foreach ($properties as $key => $value) {
      $properties_pairs[] = "{$key}='{$value}'";
    }
    $sql = "UPDATE " . self::$db_table . " SET ";
    $sql .= implode(", ", $properties_pairs);
    $sql .= " WHERE id= " . $database->escape_string($this->id);
    $database->query($sql);
    return (mysqli_affected_rows($database->connection) == 1) ? true : false;
  }

  // the delete method
  public function delete()
  {
    global $database;
    $sql = "DELETE FROM " . self::$db_table . " ";
    $sql .= " WHERE id=" . $database->escape_string($this->id);
    $sql .= " LIMIT 1";
    $database->query($sql);
    return (mysqli_affected_rows($database->connection) == 1) ? true : false;
  }

}