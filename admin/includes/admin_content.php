<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        Admin
        <small>Subheading</small>

      </h1>
      <?php
      $user = new User();
      $user->username = "Exemple user";
      $user->password = "Exemple pass user";
      $user->last_name = "Exemple last user";
      $user->first_name = "Exemple first user";
      $user->create();
    
      
          ?>
      <ol class="breadcrumb">
        <li>
          <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
        </li>
        <li class="active">
          <i class="fa fa-file"></i> Blank Page
        </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container-fluid -->