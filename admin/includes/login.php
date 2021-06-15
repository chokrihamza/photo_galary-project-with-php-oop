<?php require_once('init.php') ?>
<?php

if ($session->is_signed_in()) {
  redirect("index.php");
}


if (isset($_POST['submit'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
}

//Method to check databae user