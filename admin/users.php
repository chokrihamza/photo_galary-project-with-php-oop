<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {
  redirect("login.php");
} ?>
<?php $users  =  User::find_all() ?>

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
        <a href="add_user.php" class="btn btn-primary">Add user</a>
      </h1>
      <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Username</th>
              <th>First name</th>
              <th>Last name</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) : ?>
            <tr>
              <td><?php echo $user->id; ?></td>
              <td><img class="thumbnail" style="width: 50px; "
                  src="<?php echo $user->image_path_and_placeholder();   ?>" alt="" />
                <div class="pictures_link">
                  <a href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
                  <a href="edit_user.php?id=<?php echo $user->id; ?>">Edit</a>

                </div>
              </td>
              <td>
                <?php echo $user->username; ?></td>

              <td><?php echo $user->first_name; ?></td>
              <td><?php echo $user->last_name; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>


</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>