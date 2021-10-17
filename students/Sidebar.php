<?php 
session_start();
include('database.php'); 
?>
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
                <a href="../Home.php" class="nav-link">Home</a>
            </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" title="Logout" href="../Home.php">
                    Logout
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
            <a href="student_Profile.php" class="nav-link active" style="background-color:#0FB78D;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p >
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="schedule.php" class="nav-link " >
            <i class="nav-icon fas fa-table"></i>
              <p >
              Schedule
              </p>
            </a>
          </li>
          <li class="nav-item menu-auto">
            <a href="#" class="nav-link " >
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <?php /*l mwad aly moshtrka f kolo  */?>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="arabic.php" class="nav-link ">
                <i class="fas fa-angle-right nav-icon"></i>
                  <p>Arabic</p>
                </a>
              </li>
              <?/*ha3ml hna session l kg bs 3shan by5do eng wa7d */ ?>
              <?php  
              $class=$_SESSION['class_id']<=2;
              if($class)  :?>
              <li class="nav-item">
                <a href="english.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>English</p>
                </a>
              </li>
              <?php endif; ?>
              <?php  
              $class=$_SESSION['class_id']>2;
              if($class)  :?>
              <li class="nav-item">
                <a href="english_al.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>english AL</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="english_ol.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>english OL</p>
                </a>
              </li>
              <?php endif; ?>
              <?php  
              $class=$_SESSION['class_id']<=8;
              if($class)  :?>
              <li class="nav-item">
                <a href="math.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Math</p>
                </a>
              </li>
              <?php endif; ?>
              <?php            
              if(($_SESSION['class_id']>=6)) :?>
              <li class="nav-item">
                <a href="forign_language2.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Frensh</p>
                </a>
              </li>
              <?php endif; ?>
              <?php  
              /*lazm adef or 3shan adby aw 3lmy      $class=|| $_SESSION['class_id'] ;*/
              
              if(($_SESSION['class_id']>=9 && $_SESSION["section_id"]==null)||($_SESSION["section_id"]==1 || $_SESSION["section_id"]==4)) :?>
              <li class="nav-item">
                <a href="algebra.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Algebra</p>
                </a>
              </li><li class="nav-item">
                <a href="geometry.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Geometry</p>
                </a>
              </li>
              <?php endif; ?>
              <?php if($_SESSION["section_id"]==1 || $_SESSION["section_id"]==4) :?>
              <li class="nav-item">
                <a href="trigonometry.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Trigonometry</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="statistics.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Statistics</p>
                </a>
              </li>
              <?php endif; ?>
              <?php if($_SESSION["class_id"]==12|| $_SESSION["section_id"]==1 || $_SESSION["section_id"]==4) :?>
              <li class="nav-item">
                <a href="calculus.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Calculus</p>
                </a>
              </li>
              <?php endif; ?>
              <?php  
              if($_SESSION['class_id']>=6 && $_SESSION['class_id']<=11)  :?>
                <li class="nav-item">
                  <a href="science.php" class="nav-link">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Science</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="Social_Studies.php" class="nav-link">
                    <i class="fas fa-angle-right nav-icon"></i>
                    <p>Social Studies</p>
                  </a>
                </li>
              <?php endif; ?>
              <?php  
              if($_SESSION['class_id']==12 || ($_SESSION['section_id']==1||$_SESSION['section_id']==3||$_SESSION['section_id']==4))  :?>
              <li class="nav-item">
                <a href="physics.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Physics</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="chemistry.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Chemistry</p>
                </a>
              </li>
              <?php endif; ?>         
              <?php  
              if($_SESSION['class_id']>=11 &&($_SESSION['section_id']==2||$_SESSION['section_id']==5)) :?>
              <li class="nav-item">
                <a href="geography.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Geography</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="history.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>History</p>
                </a>
              </li>
              <?php endif; ?>
              <?php  
              
              if($_SESSION['section_id']==1||$_SESSION['section_id']==3) :?>
              <li class="nav-item">
                <a href="biology.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Biology</p>
                </a>
              </li>
              <?php endif; ?>
              <?php  
              
              if($_SESSION['section_id']==3) :?>
              <li class="nav-item">
                <a href="geology.php" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Geology</p>
                </a>
              </li>
              <?php endif; ?>
            
            </ul>
          </li>
          <li class="nav-item" >
            <a href="Exams.php" class="nav-link" >
              <i class="nav-icon fas fa-align-right"></i>
              <p >
              Exams
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="Recommends.php" class="nav-link" >
              <i class="nav-icon fas fa-inbox"></i>
              <p >
              Recommends
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