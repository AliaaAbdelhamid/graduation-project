<?php 
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php');


?>

<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/img/logo icon.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <?php echo $_SESSION["year"]?></a></li>
              <li class="breadcrumb-item active"></li>Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div id="dashboard" class="dashboard" style="background-color:rgba(0, 0, 0, 0.1) ;">
      <h4 class="m-2 p-3" style=" color: black;">Recently accessed courses </h4>
            <div class="card-group p-3 m-2" >
           
                <div class="card">
                    <img src="img/english prim.jpg" class="card-img-top" alt="..." width="100px" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">English</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/math prim.jpg" class="card-img-top" alt="..." width="100px" height="250px">
                    <div class="card-body">
                        <h5 class="card-title">Math</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img src="img/اللغة-العربية.jpg" class="card-img-top" alt="..." width="100px" height="250px" style="background-size: contain;">
                    <div class="card-body">
                        <h5 class="card-title">Arabic</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
               
            </div>
        </div>
      </div>
    </section>

    
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>