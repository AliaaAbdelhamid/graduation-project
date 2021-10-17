<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduROute</title>
    <!-- Font Awesome -->
    
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <!-- Google Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  
   
</head>
<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../Home.php" class="nav-link" style="color:#0FB78D;font-size:17px"><b> Home</b></a>
                
            </li>
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            </li>
            </ul>
          
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link"   title="Logout" href="../Home.php">
                <i class="fa fa-sign-out-alt"></i>
                </a>
            </li>
            </ul>
    </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../Home.php" class="brand-link">
      <img src="../assets/img/logo icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">duRoute</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="width: 150px;">
          <li class="nav-item menu-open" >
            <a href="Profile.php" class="nav-link active" style="background-color:#0FB78D;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p >
                Dashboard
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="schedule.php" class="nav-link">
              <i class=" mr-1 fa fa-table"></i>
              <p>
                 schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mark.php" class="nav-link">
              <i class="fa fa-question-circle"></i>
              <p>
                  Marks
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
      

          <li class="nav-item">
            <a href="attendance.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                  Attendance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>       
          <li class="nav-item">
            <a href="comment.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                  Teachers Comments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     
  </body>
</html> 