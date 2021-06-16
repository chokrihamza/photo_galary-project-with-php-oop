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
      $user->username = "toyota";
      $user->password = "toyota";
      $user->last_name = "toyota";
      $user->first_name = "toyota";
      $user->create();
      // $user = User::find_user_by_id(3);
      // $user->username = "lean";
      // $user->update();
      // $user = User::find_user_by_id(2);
      // $user->delete();
      // $user = new User();
      // $user->username = "whatever";
      // $user->save();
      
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