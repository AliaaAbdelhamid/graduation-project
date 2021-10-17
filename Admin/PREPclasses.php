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
              <li class="breadcrumb-item active"></li> Classes / <?php echo ucfirst( $_SESSION['link'])?></li>
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
       <form action="controlattendance.php" method="POST">
         <h3>Select attendance info </h3>
         <div class="form-group row">
         <div class="col-2 mt-4" style="left: 110px;"><label>Subject :</label></div>
          <div class="col-10 mt-3">
                          <select name="subject"  class="form-select" aria-label="Default select example"  required>
                                    <option selected>Choose</option>
                                    
                                    <?php  
                    if($_SESSION['link']=="prep1" | $_SESSION['link']=="prep2" | $_SESSION['link']=="prep3" ) :?>
                         <option value="arabic">Arabic</option>
                            <option value="english">English</option>
                            <option value="math">Math</option>
                                  <option value="science">Science</option>
                                  <option value="social Studies">Social Studies</option>
                                  <option value="german">German</option>
                                  <option value="french">French</option>
                    <?php endif; ?>
                      </select> 
              </div> 
         </div>

         <div class="form-group row">
          <div class="col-2 mt-4" style="left: 130px;"><label>Date :</label></div>
              <div class="col-10 mt-3">
                <input class="form-control" name="date" type="date">
              </div> 
         </div>
         <button class="btn btn-info" type="submit" name="show" style="color: white;">Show</button>

       </form>
      <button class="btn mt-5" style="background: #AE3C60;"><a href="Students.php" style="text-decoration: none; color: white;">Back</a></button>
      </div>
    </section>

  </div>
</div>

<?php include('Aprofile_footer.php')?>