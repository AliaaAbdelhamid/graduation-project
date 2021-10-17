<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>

<?php
if(isset($_GET['link']))
{
  $_SESSION['link'] = $_GET['link'];
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-1">
          <div class="col-sm-3">
        </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Teacher Attendance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
       <h4>Attendance</h4>
       <hr>
       <form action="controlteacherattendance.php" method="POST">
         <h3>Select Date </h3>
         <div class="form-group row">
          <div class="col-2 mt-4" style="left: 130px;"><label>Date :</label></div>
              <div class="col-10 mt-3">
                <input class="form-control" name="date" type="date">
              </div> 
         </div>
         <button class="btn btn-info" type="submit" name="show" style="color: white;">Show</button>

       </form>
      </div>
    </section>

  </div>
</div>

<?php include('Aprofile_footer.php')?>
