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
<style>
  .form
  {
    display: flex;
    justify-items: center;
    align-items: center;
    height: 350px;
    width:250px;
    padding: 50px;
    box-shadow: 10px 10px 15px 10px grey;
    border-radius: 10%;
  }
   .customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
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
    background-color: #f3c33c;
    color: white;
    
  
  }
</style>
<!-- Add schedule modal-->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Schedule Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="addoreditschedule.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <h6>Schedule</h6>
            <hr style="border-top: 1px dashed black;">

            <div class="form-group">
              <div class="col-12">
                <label>Subject</label>

                    <select name="subject" class="form-select" aria-label="Default select example"  required>
                            <option selected>Choose</option>
                                    
                            <?php  
                            if($_SESSION['link']<=5) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="math">Math</option>
                            <?php endif; ?>
                            <?php  
                            if($_SESSION['link']<=11 && $_SESSION['link'] >=6) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="math">Math</option>
                                        <option value="science">Science</option>
                                        <option value="social studies">Social Studies</option>
                                        <option value="german">German</option>
                                        <option value="french">French</option>
                            <?php endif; ?>
                            <?php  
                            if($_SESSION['link']==12) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="applied math">applied math</option>
                                        <option value="biology">biology </option>
                                        <option value="chemistry">chemistry</option>
                                        <option value="geography">geography</option>
                                        <option value="history">history</option>
                                        <option value="philosophy and logic">philosophy and logic</option>
                                        <option value="german">German</option>
                                        <option value="french">French</option>
                                        <option value="physics">physics</option>
                                        <option value="pure Math">pure Math</option>
                            <?php endif; ?>
                            <?php  
                            if($_SESSION['link']==13 ||$_SESSION['link']==14 ) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="applied math">applied math</option>
                                        <option value="biology">biology </option>
                                        <option value="chemistry">chemistry</option>
                                        <option value="geography">geography</option>
                                        <option value="history">history</option>
                                        <option value="philosophy and logic">philosophy and logic</option>
                                        <option value="german">German</option>
                                        <option value="french">French</option>
                                        <option value="psychology&sociology">psychology&sociology</option>
                                        <option value="physics">physics</option>
                                        <option value="geology">geology</option>
                                        <option value="pure Math">pure Math</option>
                            <?php endif; ?>
                                    
                      </select> 
              </div> 
            </div>
            <div class="form-group">
              <div class="col-12">
                <label>Day</label>

                    <select name="day"  class="form-select" aria-label="Default select example"  required>
                            <option selected>Choose</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                           
                      </select> 
              </div> 
            </div>
            <div class="form-group">
                <div class="col-12">
                <label>from</label>
                    <input type="number" name="from" class="form-control" placeholder="Enter Started time">
                </div>
                
            </div>
            <div class="form-group">
                <div class="col-12">
                <label>To</label>
                <input type="number" name="to" class="form-control" placeholder="Enter End time">
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
        $subject = $_POST['subject'];
        $day=$_POST['day'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        
        $query ="INSERT INTO `schedule`(`schedule_id`,`class`, `subject`, `day`, `S_From`, `E_To`)
         VALUES ('','$class','$subject','$day','$from','$to')";
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
        <form action="addoreditschedule.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
        
            <input type="hidden" name="update_id" id="update_id">
            <div class="form-group">
              <div class="col-12">
                <label>Subject</label>

                    <select name="subject" id="subject" class="form-select" aria-label="Default select example"  required>
                            <option selected>Choose</option>
                                    
                            <?php  
                            if($_SESSION['link']<=5) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="math">Math</option>
                            <?php endif; ?>
                            <?php  
                            if($_SESSION['link']<=11 && $_SESSION['link'] >=6) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="math">Math</option>
                                        <option value="science">Science</option>
                                        <option value="social studies">Social Studies</option>
                                        <option value="german">German</option>
                                        <option value="french">French</option>
                            <?php endif; ?>
                            <?php  
                            if($_SESSION['link']==12) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="applied math">applied math</option>
                                        <option value="biology">biology </option>
                                        <option value="chemistry">chemistry</option>
                                        <option value="geography">geography</option>
                                        <option value="history">history</option>
                                        <option value="philosophy and logic">philosophy and logic</option>
                                        <option value="german">German</option>
                                        <option value="french">French</option>
                                        <option value="physics">physics</option>
                                        <option value="pure Math">pure Math</option>
                            <?php endif; ?>
                            <?php  
                            if($_SESSION['link']==13 ||$_SESSION['link']==14 ) :?>
                                        <option value="arabic">Arabic</option>
                                        <option value="english">English</option>
                                        <option value="applied math">applied math</option>
                                        <option value="biology">biology </option>
                                        <option value="chemistry">chemistry</option>
                                        <option value="geography">geography</option>
                                        <option value="history">history</option>
                                        <option value="philosophy and logic">philosophy and logic</option>
                                        <option value="german">German</option>
                                        <option value="french">French</option>
                                        <option value="psychology&sociology">psychology&sociology</option>
                                        <option value="physics">physics</option>
                                        <option value="geology">geology</option>
                                        <option value="pure Math">pure Math</option>
                            <?php endif; ?>
                                    
                      </select> 
              </div> 
            </div>
            <div class="form-group">
              <div class="col-12">
                <label>Day</label>

                    <select name="day" id="day"  class="form-select" aria-label="Default select example"  required>
                            <option selected>Choose</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                           
                      </select> 
              </div> 
            </div>
            <div class="form-group">
                <div class="col-12">
                <label>from</label>
                    <input type="number" name="from" id="from" class="form-control" placeholder="Enter Started time">
                </div>
                
            </div>
            <div class="form-group">
                <div class="col-12">
                <label>To</label>
                <input type="number" name="to" id="to" class="form-control" placeholder="Enter End time">
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
    $class = $_SESSION['link'];
    $subject = $_POST['subject'];
    $day=$_POST['day'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    
            $query1 = " UPDATE `schedule` SET `class`='$class',`subject`='$subject'
            ,`day`='$day',`S_From`='$from',`E_To`='$to'  WHERE schedule_id ='$edit_id'";
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
<!--############################################################################################################-->
<!-- delete modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Student Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="addoreditschedule.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">
            <h4> Do you want to Delete this Data </h4>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">No</button>
            <button type="submit" name="deletedata"class="btn btn-danger">Yes</button>
          </div>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['deletedata']))
{
    $id=$_POST['delete_id'];
   
    $query = "DELETE FROM `schedule` WHERE  schedule_id = '$id'";
    $query_run = mysqli_query($dp,$query);

    if($query_run)

    {
        echo '<script>alert ("Data Deleted");</script>';


    }
    else
    {
        echo '<script>alert ("Data Not saved");</script>';

    }
}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-1">
        <div class="col-sm-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search by day..">
        </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>schedule</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
      <div class="d-flex justify-content-end">
              <button type="button" class="btn" style="color: white; background-color: #255E79;" data-bs-toggle="modal" data-bs-target="#studentaddmodal"><i class="fa fa-plus pr-2" aria-hidden="true"></i>Add</button>
               </div>
          
<?php
              $query = 'SELECT * FROM `schedule` where class ="'. $_SESSION['link'].'"';
              $query_run = mysqli_query($dp,$query);
              ?> 
              <table id="myTable" class="customers m-4">
                <thead>
                <tr>
                
                  <th>Subject</th>
                  <th>Day</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Action</th>
                
                </tr>
                </thead>
                <?php
              if($query_run)
              {
                foreach($query_run as $row)
                {
            ?>
                  <tbody>
                  <tr>
                  <td hidden><?php echo $row['schedule_id'];?></td>
                  <td><?php echo $row['subject'];?></td>
                      <td><?php echo $row['day'];?></td>
                      <td><?php  echo $row['S_From'];?></td>
                      <td><?php echo $row['E_To'];?></td>
                      <td style="width: 140px;">
                        <div class="row">
                          <div class="col-6">
                            <a type="button" class="btn btn-info editbtn" style="font-size: 12px;"><i class="fas fa-edit mr-"></i></a>
                          </div>
                          <div class="col-6">
                          <a type="button" class="btn btn-danger deletebtn" style="font-size: 12px;"><i class="fas fa-trash-alt mr-1"></i></a>
                          </div>

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
<script>
  // search function////////////////////////////////////////////////////////////
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
  }
    //////////////////////////////////////////////////////////////////////////
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
      $('#subject').val(data[1]);
      $('#day').val(data[2]);
      $('#from').val(data[3]);
      $('#to').val(data[4]);
    });
  });
//////////////////////////////////////////////////////////////////////////
// delete function///////////////////////////////////////////////////////
$(document).ready(function()
  {
    $('.deletebtn').on('click', function()
    {
      $('#deletemodal').modal('show');

      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function()
      {
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_id').val(data[0]);
            
    });
  });
  </script>
  <?php include('Aprofile_footer.php')?>
      </div>
      <button class="btn" style="background: #0FB78D;"><a href="Admin_Profile.php" style="text-decoration: none; color: white;">Back</a></button>

    </section>

  </div>
</div>

<?php include('Aprofile_footer.php')?>