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
    background-color:  #F3C33C;
    color: white;
  }
</style>
<div class="wrapper">
<!--############################################################################################################-->
<!-- Edit modal-->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Student Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="PREPprofile.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
            <h6>Student Information</h6>
            <hr style="border-top: 1px dashed black;">
            <input type="hidden" name="update_id" id="update_id">
              <div class=" row form-group">
                <div class="col-6">
                <label>Name</label>
                <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="col-6">
                <label>Gender</label>
                <select name="gender" id="gender" class="form-select" aria-label="Default select example" required>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select> 
                </div>
              </div>
              <div class=" row form-group">
                <div class="col-6">
                <label>E-mail</label>
                <input type="email" id="semail" name="email" class="form-control" placeholder="Enter Email"required>
                </div>
                <div class="col-6">
                <label>Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address"required>
                </div>
              </div>
              <div class=" row form-group">
                <div class="col-6">
                <label>Phone</label>
                <input type="number" id="sphone" name="phone" class="form-control" placeholder="Enter Phone number" required>
                </div>
                <div class="col-6">
                <label>Password</label>
                <input type="text" id="spassword" name="password" class="form-control" placeholder="Enter Password" required>
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
    $edit_name =$_POST['sname'];
    $edit_gender =$_POST['gender'];
    $edit_email =$_POST['email'];
    $edit_address =$_POST['address'];
    $edit_phone =$_POST['phone'];
    $edit_password =$_POST['password'];

   
            $query1 = " UPDATE `student` SET `name`='$edit_name',`sex`='$edit_gender',`address`='$edit_address',`phone`='$edit_phone',`email`='$edit_email',`password`='$edit_password'  where student_id = '$edit_id'";
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
        <form action="PREPprofile.php" method="POST">
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
    $query = " DELETE FROM `student` where student_id = '$id'";
    $query_run = mysqli_query($dp,$query);

    if($query_run)

    {
        

      echo '<script> alert ("Data Deleted");</script>';   



    }
    
    else
    {
        
      echo '<script> alert ("Data Noy Deleted");</script>';   

        

    }

}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row m-1">
          <div class="col-sm-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search..">
        </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Prepartory</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
        
             
               <div class="container">
              <h4 class="m-3">List of students</h4>
              <?php
              $query = 'SELECT * 
              FROM student WHERE class_id = "'. $_SESSION['link'].'"';
              $query_run = mysqli_query($dp,$query);
              ?> 
              <table id="myTable" class="customers">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Birthday</th>
                  <th>Address</th>
                  <th>Relogion</th>
                  <th>Phone</th>
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
                      <td><?php echo $row['name'];?></td>
                      <td><?php  echo $row['sex'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['password'];?></td>
                      <td><?php echo $row['birthday'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td><?php echo $row['relogion'];?></td>
                      <td><?php echo $row['phone'];?></td>
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
           <button class="btn mt-5" style="background: #F3C33C;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>

           </div>
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
    td = tr[i].getElementsByTagName("td")[1];
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
      $('#sname').val(data[1]);
      $('#gender').val(data[2]);
      $('#semail').val(data[3]);
      $('#spassword').val(data[4]);
      $('#birthday').val(data[5]);
      $('#address').val(data[6]);
      $('#relogion').val(data[7]);
      $('#sphone').val(data[8]);


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