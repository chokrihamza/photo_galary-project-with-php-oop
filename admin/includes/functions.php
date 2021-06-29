<?php


function autoloader($class)
{
  
  $class = strtolower($class);
  $the_path = "includes/{$class}.php";

  if (file_exists($the_path)) {
    require_once($the_path);
  } else {
    die("The file {$class}.php does not exist...");
  }
}

spl_autoload_register('autoloader');

function redirect($location)
{
  header("Location:{$location}");
}