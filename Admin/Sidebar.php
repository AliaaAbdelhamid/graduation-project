<?php include('header.php')?>
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
                <a class="nav-link" title="Logout" href="logout.php">
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
            <a href="Admin_Profile.php" class="nav-link active" style="background-color:#0FB78D;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p >
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Students.php" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                 Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Teacher.php" class="nav-link">
            <i class="fas fa-chalkboard-teacher"></i>

              <p>
                  Teachers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Parent.php" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                  Parents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="attendance1.php" class="nav-link">
              <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                 Student Attendance
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="marks.php" class="nav-link">
            <i class="nav-icon fas fa-poll-h"></i>

              <p>
                  Marks
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="exam.php" class="nav-link">
            <i class=" nav-icon fa fa-question-circle" aria-hidden="true"></i>
              <p>
                  Exams
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="schudele.php" class="nav-link">
            <i class="nav-icon  fas fa-table"></i>
              <p>
              Schudele
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="teacherattendance.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard"></i>
              <p>
                  Teacher Attendance
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
<?php include('footer.php')?>
 