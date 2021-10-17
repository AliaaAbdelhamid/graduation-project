<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>

<?php
if(isset($_GET['link']))
{
  $_SESSION['link'] = $_GET['link'];
}
if(isset($_POST['show']))
{
    $_SESSION['subject_id']=$_POST['subject'];
    $_SESSION['exam']=$_POST['exam'];
}
?>
  
  <style>
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
        background-color:  #255E79;
        color: white;
    }
</style><!-- Content Wrapper. Contains page content -->

<!-- Add MArks modal-->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Student </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="listofmarks.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <h6>Student Information</h6>
            <hr style="border-top: 1px dashed black;">

            <div class=" row form-group">
                <div class="col-12">
                    <label>Student ID </label>
                    <input type="number" name="sid" class="form-control" placeholder="Enter ID" required>
                </div>
                
            </div>
              <div class=" row form-group">
                <div class="col-12">
                <label>Marks</label>
                    <input type="number" name="marks" class="form-control" placeholder="Enter marks" required>
                </div>
                
              </div>
              <div class=" row form-group">
                <div class="col-12">
                <label>Total Marks</label>
                    <input type="number" name="total" class="form-control" placeholder="Enter Total Marks" required>
                </div>
                
              </div>
              <div class=" row form-group">
                <div class="col-12">
                <label>Comments</label>
                    <input type="text" name="comment" class="form-control" placeholder="Enter Comment">
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
        
        $student_id = $_POST['sid'];
        $marks = $_POST['marks'];
        $total = $_POST['total'];
        $subject_id =$_SESSION['subject_id'];
        $class_id =$_SESSION['link'];
        $exam =$_SESSION['exam'];
        $comment=$_POST['comment'];
        
        $query ="INSERT INTO `mark`( `student_id`, `subject_id`, `class_id`, `mark_obtained`, `mark_total`, `comment` , `exam`)
        VALUES ('$student_id','$subject_id','$class_id','$marks','$total','$comment','$exam')";
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
        <form action="marksprocess.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
        
            <input type="hidden" name="update_id" id="update_id">
              <div class=" row form-group">
                <div class="col-6">
                <label>Marks</label>
                <input type="number" name="marks" id="marks" class="form-control" placeholder="Enter Mark" required>
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
<!--############################################################################################################-->
<!-- delete modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Student Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="marksprocess.php" method="POST">
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
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          
        <div class="row m-1">
          <div class="col-sm-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search by student..">
        </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li> Marks</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!--Main content--> 
    <section class="content">
      <div class="container-fluid">
      <div class="d-flex justify-content-end">
              <button type="button" class="btn" style="color: white; background-color: #255E79;" data-bs-toggle="modal" data-bs-target="#studentaddmodal"><i class="fa fa-plus pr-2" aria-hidden="true"></i>Add</button>
               </div>
       <h4>Marks</h4>
       <hr>
              <?php
              $query = 'SELECT * FROM `mark`  WHERE subject_id ="'. $_SESSION['subject_id'].'" AND class_id="'. $_SESSION['link'].'" AND exam="'. $_SESSION['exam'].'"';
              $query_run = mysqli_query($dp,$query);
              ?> 
              <table id="myTable" class="customers">
                <thead>
                <tr>
                <th>Student_ID</th>
                  <th>Mark</th>
                  <th>total</th>
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
                  <td><?php echo $row['student_id'];?></td>
                      <td><?php echo $row['mark_obtained'];?></td>
                      <td><?php  echo $row['mark_total'];?></td>
                      <td>
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
           </div>
           <button class="btn mt-5" style="background: #255E79;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>

           </div>
        
      <button class="btn mt-5" style="background: #AE3C60;"><a href="Students.php" style="text-decoration: none; color: white;">Back</a></button>
      </div>
    </section>

  </div>
</div>
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
    td = tr[i].getElementsByTagName("td")[0];
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
      $('#marks').val(data[1]);
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