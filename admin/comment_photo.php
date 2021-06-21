<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {
  redirect("login.php");
} ?>
<?php
if (empty($_GET['id'])) {
  redirect("photos.php");
}
$comments = Comment::find_the_comments($_GET['id']);
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
        comments
        <small>Subheading</small>

      </h1>
      <div class="col-md-12">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Author</th>
              <th>Body</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($comments as $comment) : ?>

            <tr>

              <td><?php echo $comment->id; ?></td>
              <td>
                <?php echo $comment->author;    ?></br>
                <a href="delete_comment_photo.php?id=<?php echo $comment->id; ?>">Delete</a>


              </td>
              <td><?php echo $comment->body; ?></td>
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