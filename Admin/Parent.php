<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<style>
.form
{
    display: flex;
    justify-items: center;
    align-items: center;
    height: 350px;
    width:350px;
    padding: 50px;
    box-shadow: 10px 10px 15px 10px grey;
    border-radius: 10%;
}
</style>
<body >
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Parent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Parent</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
        <div class="container form " style="background: #5cb100;color: white ;">
        
            <div class="small-box" style="box-shadow: none;">
            
              <div class="inner">
              
                    <h5 style="color:white;">Choose Academic  Year</h5>
                </div>
                <div class="dropdown mt-5" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white; left: 25%;">
                            Choose
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="parentprofile.php?parent=1">Kg 1</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=2">Kg 2</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=3">Prim 1</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=4">Prim 2</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=5">Prim 3</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=6">Prim 4</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=7">Prim 5</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=8">Prim 6</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=9">Prep 1</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=10">Prep 2</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=11">Prep 3</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=12">Sec 1</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=13">Sec 2</a></li>
                            <li><a class="dropdown-item" href="parentprofile.php?parent=14">Sec 3</a></li> 
                        </ul>
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
</body>
<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>