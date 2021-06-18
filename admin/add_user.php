<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {
  redirect("login.php");
} ?>
<?php //

//$user  =  User::find_by_id($_GET['id']);
$user = new User();
if (isset($_POST['create'])) {

  $user->username = $_POST['username'];
  $user->first_name = $_POST['first_name'];
  $user->last_name = $_POST['last_name'];
  $user->password = $_POST['password'];
  $user->set_file($_FILES['user_image']);
  $user->save_user_and_image();


  // if ($user) {
  //   $user->title = $_POST['title'];
  //   $user->caption = $_POST['caption'];
  //   $user->alternate_text = $_POST['alternate_text'];
  //   $user->description = $_POST['description'];
  //   $user->save();
  // }
}

?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">SB Admin</a>
  </div>
  <!-- Top Menu Items -->

  <?php include("includes/top_nav.php"); ?>


  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <?php include("includes/side_nav.php");    ?>
  <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        users
        <small>Subheading</small>

      </h1>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-4 col-md-offset-4">
          <div class="form-group">

            <input type="file" name="user_image" class="form-control">

          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">

          </div>

          <div class="form-group">
            <label for="first_name">First name</label>
            <input type="text" name="first_name" class="form-control">

          </div>
          <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" class="form-control">

          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">

          </div>
          <div class="form-group">

            <input type="submit" name="create" class="btn btn-info pull-right">

          </div>
        </div>

      </form>
    </div>
  </div>
  <!-- /.row -->

</div>


</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>