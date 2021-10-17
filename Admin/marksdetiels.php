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
              <li class="breadcrumb-item active"></li> Marks </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!--Main content--> 
    <section class="content">
      <div class="container-fluid">
       <h4>Marks</h4>
       <hr>
       <form action="listofmarks.php" method="POST">
         <h3>Select Subject </h3>
         <div class="form-group row">
          <div class="col-2 mt-4" style="left: 110px; "><label>Subject :</label></div>
              <div class="col-10 mt-3">
                          <select name="subject"  class="form-select" aria-label="Default select example"  required>
                                    <option selected>Choose</option>
                                    
                                    <?php  
                    if($_SESSION['link']<=5) :?>
                                  <option value="1">Arabic</option>
                                  <option value="2">English</option>
                                  <option value="3">Math</option>
                    <?php endif; ?>
                    <?php  
                    if($_SESSION['link']<=11 && $_SESSION['link'] >=6) :?>
                                  <option value="1">Arabic</option>
                                  <option value="2">English</option>
                                  <option value="3">Math</option>
                                  <option value="22">Science</option>
                                  <option value="23">Social Studies</option>
                                  <option value="5">German</option>
                                  <option value="11">French</option>
                    <?php endif; ?>
                    <?php  
                    if($_SESSION['link']==12) :?>
                                  <option value="1">Arabic</option>
                                  <option value="2">English</option>
                                  <option value="6">applied math</option>
                                  <option value="8">biology </option>
                                  <option value="9">chemistry</option>
                                  <option value="12">geography</option>
                                  <option value="14">history</option>
                                  <option value="15">philosophy and logic</option>
                                  <option value="5">German</option>
                                  <option value="11">French</option>
                                  <option value="16">physics</option>
                                  <option value="18">pure Math</option>
                    <?php endif; ?>
                    <?php  
                    if($_SESSION['link']==13 ||$_SESSION['link']==14 ) :?>
                                  <option value="1">Arabic</option>
                                  <option value="2">English</option>
                                  <option value="6">applied math</option>
                                  <option value="8">biology </option>
                                  <option value="9">chemistry</option>
                                  <option value="12">geography</option>
                                  <option value="14">history</option>
                                  <option value="15">philosophy and logic</option>
                                  <option value="5">German</option>
                                  <option value="11">French</option>
                                  <option value="17">psychology&sociology</option>
                                  <option value="16">physics</option>
                                  <option value="13">geology</option>
                                  <option value="18">pure Math</option>

                    <?php endif; ?>
                    
                    
                    
                  
          
                                  
                      </select> 
              </div> 
         </div>
         <div class="form-group row">
          <div class="col-2 mt-4" style="left: 130px;"><label>Exam :</label></div>
              <div class="col-10 mt-3">
              <select name="exam"  class="form-select" aria-label="Default select example"  required>
                              <option selected>Choose</option>
                              <option value="midterm">Mid-term</option>
                            <option value="final">Final</option>
                </select>              
         </div> 
         </div>
         <button class="btn btn-info" type="submit" name="show" style="color: white;">Show</button>

       </form>
      <button class="btn mt-5" style="background: #0FB78D;"><a href="Students.php" style="text-decoration: none; color: white;">Back</a></button>
      </div>
    </section>

  </div>
</div>

<?php include('Aprofile_footer.php')?>