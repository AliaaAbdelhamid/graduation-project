<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-6">
            <div class="small-box " style="background: #AE3C60; color: white ;" >
              <div class="inner">
                <h3>KG</h3>
              </div>
              <div class="icon">
                <i class="fas fa-child"></i>
              </div>
              <a href="KG.php?link=kg" class="small-box-footer" style="color: white;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class=" col-6">
            <!-- small box -->
            <div class="small-box " style="background: #82B4BB; color: white;" >
              <div class="inner">
                <h3 style="color: white;">Primary</h3>
              </div>
              <div class="icon">
                <i class="fas fa-user-friends"></i>
              </div>
              <a href="PRIM.php?link=primary" class="small-box-footer" style="color: white;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <!-- small box -->
            <div class="small-box" style="background: #F3C33C ; color: white;">
              <div class="inner">
                <h3>Preparatory</h3>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="PREP.PHP?link=preparatory" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class=" col-6">
            <!-- small box -->
            <div class="small-box " style="background: #255E79; color: white;">
              <div class="inner">
                <h3>Secondary</h3>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <a href="SEC.PHP?link=secondary" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a>
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