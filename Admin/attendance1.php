<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Student Attendance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
      <h2 class="mb-5" >Choose Acdemic Year</h2>
      <div class="row">
          <div class=" col-6">
            <div class="small-box " style="background: #AE3C60; color: white ;" >
              <div class="inner">
                <h3>KG</h3>
                <div class="dropdown mt-5" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;">
                            Choose Academic year
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="KGclasses.php?link=Kg1">Kg 1</a></li>
                            <li><a class="dropdown-item" href="KGclasses.php?link=Kg2">Kg 2</a></li>
                        </ul>
                  </div> 
              </div>
              <div class="icon">
                <i class="fas fa-child"></i>
              </div>
            </div>
          </div>
          <div class=" col-6">
            <!-- small box -->
            <div class="small-box " style="background: #82B4BB; color: white;" >
              <div class="inner">
                <h3 style="color: white;">Primary</h3>
                <div class="dropdown mt-5" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;">
                                    Choose Academic year
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="PRIMclasses.php?link=prim1">Primary 1</a></li>
                                    <li><a class="dropdown-item" href="PRIMclasses.php?link=prim2">Primary 2</a></li>
                                    <li><a class="dropdown-item" href="PRIMclasses.php?link=prim3">Primary 3</a></li>
                                    <li><a class="dropdown-item" href="PRIMclasses.php?link=prim4">Primary 4</a></li>
                                    <li><a class="dropdown-item" href="PRIMclasses.php?link=prim5">Primary 5</a></li>
                                    <li><a class="dropdown-item" href="PRIMclasses.php?link=prim6">Primary 6</a></li>
                                </ul>
                    </div> 
              </div>
              <div class="icon">
                <i class="fas fa-user-friends"></i>
              </div>
            </div>
          </div>
          <div class="col-6">
            <!-- small box -->
            <div class="small-box" style="background: #F3C33C ; color: white;">
              <div class="inner">
                <h3>Prepartory</h3>
                <div class="dropdown mt-5" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;">
                                    Choose Academic year
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="PREPclasses.php?link=prep1">Prepartory 1</a></li>
                                    <li><a class="dropdown-item" href="PREPclasses.php?link=prep2">Prepartory 2</a></li>
                                    <li><a class="dropdown-item" href="PREPclasses.php?link=prep3">Prepartory 3</a></li>
                  
                                </ul>
                 </div>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
          <div class=" col-6">
            <!-- small box -->
            <div class="small-box " style="background: #255E79; color: white;">
              <div class="inner">
                <h3>Secondary</h3>
                <div class="dropdown mt-5" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;">
                                    Choose Academic year
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="SECclasses.php?link=sec1">Secondary 1</a></li>
                                    <li><a class="dropdown-item" href="SECclasses.php?link=sec2">Secondary 2</a></li>
                                    <li><a class="dropdown-item" href="SECclasses.php?link=sec3">Secondary 3</a></li>
                                </ul>
                    </div> 
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

  </div>
</div>

<?php include('Aprofile_footer.php')?>