<?php include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<?if(!isset($_SESSION["email"])&&isset($_SESSION["teacher_id"])){
  
  header("lodation:login.php");
}
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
              
            <li class="breadcrumb-item"><a href="#">Parent</a></li>
              <li class="breadcrumb-item active"></li>Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $query = " SELECT * from schedule where class = {$_SESSION["class_id"]}";
                $query_run = mysqli_query($dp,$query);
                $row = mysqli_num_rows($query_run);
                echo'<h1>'.$row.'</h1>';
                ?>
               <h5>schedule</h5>
              </div>
              <div class="icon">
                <i class="fas fa-chalkboard"></i>
              </div>
              <a href="schedule.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $query1 = " SELECT * from mark where student_id = {$_SESSION["student_id"]}";
                $query1_run = mysqli_query($dp,$query1);
                $row = mysqli_num_rows($query1_run);
                echo'<h1>'.$row.'</h1>';
                ?>
                <h5>Teachers Comment</h5>
              </div>
              <div class="icon">
              <i class="fas fa-comments"></i>

</div>
              <a href="comment.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $query1 = " SELECT * from exam where class_id = {$_SESSION["class_id"]}";
                $query1_run = mysqli_query($dp,$query1);
                $row = mysqli_num_rows($query1_run);
                echo'<h1>'.$row.'</h1>';
                ?>
                <h5>Exams</h5>
              </div>
              <div class="icon">
                <i class="fas fa-book-open"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class=" col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-olive">
              <div class="inner">
              <?php
                $query1 = " SELECT * from quiz where class_id = {$_SESSION["class_id"]}";
                $query1_run = mysqli_query($dp,$query1);
                $row = mysqli_num_rows($query1_run);
                echo'<h1>'.$row.'</h1>';
                ?>
                <h5>Quizes</h5>
              </div>
              <div class="icon">
              <i class="fas fa-sticky-note"></i>

</div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
        </div>
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>