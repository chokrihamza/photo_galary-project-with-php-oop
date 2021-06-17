<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {
  redirect("login.php");
} ?>

<?php
$message="";
    if(isset($_POST['submit'])){
      $photo=new Photo();
      $photo->title=$_POST['title'];
      var_dump($_FILES['file_upload']);
      $photo->set_file($_FILES['file_upload']);
  if($photo->save()){
    $message="Photo uploaded successfully";
  }else{
    $message=join("<br>",$photo->errors);
  }
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
        Uploads
        <small>Subheading</small>
      </h1>
      <?php  echo $message;  ?>
      <div class="col-md-6">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="title" class="form-control" />

          </div>
          <div class="form-group">
            <input type="file" name="file_upload" class="form-control" />
          </div>
          <input class="btn btn-success" type="submit" name="submit" class="form-control" />
        </form>
      </div>
    </div>
  </div>
  <!-- /.row -->

</div>


</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>