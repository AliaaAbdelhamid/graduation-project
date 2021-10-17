<?php include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<?if(!isset($_SESSION["email"])&&isset($_SESSION["teacher_id"])){
  
  header("lodation:teacher_login.php");
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
              
            <li class="breadcrumb-item"><a href="#">teacher</a></li>
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
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php

                ?>
  <?php
                 $sql="SELECT * FROM `teacher_classes` INNER JOIN classes 
                 ON teacher_classes.teacher_id ='{$_SESSION["teacher_id"]}' AND teacher_classes.class_id=classes.ID";
                $query_run = mysqli_query($dp,$sql);
                $row = mysqli_num_rows($query_run);

                echo'<h1>'.$row.'</h1>';
                
                ?>
                <p>class</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
             
                 <?php
                $sql="SELECT * FROM student INNER JOIN teacher_classes
                ON student.class_id=teacher_classes.class_id AND teacher_id='{$_SESSION["teacher_id"]}'";
                $query_run = mysqli_query($dp,$sql);
                $row = mysqli_num_rows($query_run);

                echo'<h1>'.$row.'</h1>';
                
                ?>
                <p>Total Student</p>
              </div>
              <div class="icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <a href="allstudent.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
             
              <?php
                $sql="SELECT * FROM teacher_schedule where teacher_id='{$_SESSION["teacher_id"]}'";
                $query_run = mysqli_query($dp,$sql);
                $row = mysqli_num_rows($query_run);

                echo'<h1>'.$row.'</h1>';
                
                ?>

                <p>schedule</p>
              </div>
              <div class="icon">
                <i class="fas fa-book-open"></i>
              </div>
              <a href="schedule.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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