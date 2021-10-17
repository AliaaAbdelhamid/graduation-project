<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<?php 
if(isset($_POST['show']))
{
  $_SESSION['subject']=$_POST["subject"];
  $_SESSION['date']=$_POST["date"];}
?>

<style>
  form
  {  
      width:100%;
      padding: 50px;
      box-shadow: 10px 10px 15px 10px grey;
  }
    .customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    .customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .customers tr:nth-child(even){background-color: #f2f2f2;}

    .customers tr:hover {background-color: #ddd;}

    .customers th {
      padding: 12px;
      text-align: left;
      background-color: #5cb100;
      color: white;
    }
    .notattend th{
      background-color: red;
      padding: 12px;
      text-align: left;
      color: white;
      width: 500px;

    }
</style>
<!-- Add attendance modal-->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Schedule Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="controlattendance.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <h6>Attendance</h6>
            <hr style="border-top: 1px dashed black;">

            <h3>Enter student ID </h3>
            <div class="form-group row">
              <div class="col-12">
                    <input class="form-control" name="student_id" type="number">
                      </select> 
              </div> 
            </div>
         <h3>Attendance </h3>

            <div class="form-group row">
              <div class="col-12">
                    <select name="attendance" id="attendance"  class="form-select" aria-label="Default select example"  required>
                            <option selected>Choose</option>
                            <option value="1">Attend</option>
                            <option value="0">Not Attend</option>

                      </select> 
              </div> 
            </div>
      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="insertdata"class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['insertdata']))
    {
        
        $class = $_SESSION['link'];
        $subject = $_SESSION['subject'];
        $date=$_SESSION['date'];
        $attendance=$_POST['attendance'];
        $student_id=$_POST['student_id'];
        
        $query ="INSERT INTO `attendance`( `Student_ID`, `date`, `status`, `class`, `subject`) 
        VALUES ('$student_id','$date','$attendance','$class','$subject')";
        $query_run = mysqli_query($dp,$query);

        if($query_run)       
        {
        echo '<script> alert ("Data saved");</script>';   


        }
        else
        {
            echo '<script> alert ("Data Not saved");</script>'; 

        }
    }
?>
<!--############################################################################################################-->
<!-- Edit modal-->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Student Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="controlattendance.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
        
            <input type="hidden" name="update_id" id="update_id">
            <div class="form-group">
              <div class="col-12">

                    <select name="attendance" id="attendance"  class="form-select" aria-label="Default select example"  required>
                            <option selected>Choose</option>
                            <option value="1">Attend</option>
                            <option value="0">Not Attend</option>

                      </select> 
              </div> 
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="updatedata"class="btn btn-primary">Save Data</button>
          </div>
      </form>
    </div>
  </div>
</div>
<?php
  if(isset($_POST['updatedata']))
  {
    $edit_id=$_POST['update_id'];
    $attendance = $_POST['attendance'];
   
            $query1 = " UPDATE `attendance` SET `status`='$attendance' WHERE attendance_id ='$edit_id'";
             $query1_run = mysqli_query($dp,$query1);
            if($query1_run)
            {
                echo '<script> alert ("Data Updated");</script>';   
            }
            else
            {
               echo '<script>alert ("Data Not updated");</script>';

            }
        }
    

?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <h2 class="col-6 mb-5">Attendance</h2>

        <div class="d-flex justify-content-end">
              <button type="button" class="btn" style="color: white; background-color: #0FB78D;" data-bs-toggle="modal" data-bs-target="#studentaddmodal"><i class="fa fa-plus pr-2" aria-hidden="true"></i>Add</button>
               </div>
          
        </div>

       <h4> Control Attendance :<?php echo ucfirst($_SESSION['subject'])?> , <?php echo ucfirst($_SESSION['date'])?></h4><hr>
 <div class="row">

    <div class=" col-6">
      <?php
              $query = 'SELECT * FROM `attendance` WHERE class = "'. $_SESSION['link'].'" AND subject = "'. $_SESSION["subject"].'" AND attendance.date ="'. $_SESSION['date'].'" AND status=1';
              $query_run = mysqli_query($dp,$query);
              
              ?> 
              <table id="myTable" class="customers">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Student ID</th>
                  <th>Attend</th>
                </tr>
                </thead>
                <?php
              if($query_run)
              {
                foreach($query_run as $row)
                {
                  $_SESSION['Student_ID']= $row['Student_ID'];
            ?>
                  <tbody>
                  <tr *ngfor= "let item of attendancelist">
                  <td><?php echo $row['attendance_id'];?></td>
                      <td><?php echo $row['Student_ID'];?></td>
                      <td>
                      <div class="col-6">
                            <a type="button" class="btn btn-info editbtn" style="font-size: 12px;"><i class="fas fa-edit mr-"></i></a>
                          </div>
                                      
                      </td>
                  </tr>
                 
                </tbody>
                <?php
                }
              }
              else
              {
                echo "No Record Found";
              }
                         
              ?>
              </table>
   </div>
   <div class=" col-6">
      <?php
              $query = 'SELECT * FROM `attendance` WHERE class = "'. $_SESSION['link'].'" AND subject = "'. $_SESSION['subject'].'" AND date ="'. $_SESSION['date'].'" AND status=0';
              $query_run = mysqli_query($dp,$query);
              
              ?> 
              <table id="myTable" class="notattend customers">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Student ID</th>
                  <th>Not Attend</th>
                </tr>
                </thead>
                <?php
              if($query_run)
              {
                foreach($query_run as $row)
                {
                  $_SESSION['Student_ID']= $row['Student_ID'];
            ?>
                  <tbody>
                  <tr *ngfor= "let item of attendancelist">
                  <td><?php echo $row['attendance_id'];?></td>
                      <td><?php echo $row['Student_ID'];?></td>
                      <td>
                      <div class="col-6">
                            <a type="button" class="btn btn-info editbtn" style="font-size: 12px;"><i class="fas fa-edit mr-"></i></a>
                          </div>
                                      
                      </td>
                  </tr>
                 
                </tbody>
                <?php
                }
              }
              else
              {
                echo "No Record Found";
              }
                         
              ?>
              </table>
   </div>
 </div>
      <button class="btn mt-5" style="background: #0FB78D;"><a href="Students.php" style="text-decoration: none; color: white;">Back</a></button>
      </div>
    </section>
  </div>

</div>
<script>
   // edit function/////////////////////////////////////////////////////////
   $(document).ready(function()
  {
    $('.editbtn').on('click', function()
    {
      $('#editmodal').modal('show');

      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function()
      {
        return $(this).text();
      }).get();

      console.log(data);

      $('#update_id').val(data[0]);
      $('#marks').val(data[1]);
    });
  });
//////////////////////////////////////////////////////////////////////////
</script>
<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>