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
<!-- Add student modal-->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Student </h5>
            <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form autocomplete="off" action="KG.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <h6>Student Information</h6>
            <hr style="border-top: 1px dashed black;">

              <div class=" row form-group">
                <div class="col-6">
                <label>Name</label>
                <input type="text" name="sname" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="col-6">
                <label>Gender</label>
                <select name="gender" class="form-select" aria-label="Default select example" required>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select> 
                </div>
              </div>
              <div class=" row form-group">
                <div class="col-6">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email"required>
                </div>
                <div class="col-6">
                <label>Birthday</label>
                <input type="date" name="birthday" class="form-control" placeholder="Enter Birthday"required>
                </div>
              </div>
              <div class=" row form-group">
                <div class="col-6">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address"required>
                </div>
                <div class="col-6">
                <label>Relogion</label>
                <select name="relogion" class="form-select" aria-label="Default select example"required>
                  <option value="muslim">Muslim</option>
                  <option value="christian">Christian</option>
                </select> 
                </div>
              </div>
              <div class=" row form-group">
                <div class="col-6">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter Phone number" required>
                </div>
                <div class="col-6">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
              </div>
              <div class=" row form-group">
                  <select hidden name="year" class="form-select" aria-label="Default select example" required>
                    <option  selected value="kg">Kindergarten</option>
                  </select> 
                
                <div class="col-6">
                  <label>Class</label>
                  <select name="class" class="form-select" aria-label="Default select example" required>
                    <option selected>Choose</option>
                    <option value="1">Kg1</option>
                    <option value="2">Kg2</option>
                  </select> 
                  </div>
                
              </div>
              <h6>Parent Information</h6>
            <hr style="border-top: 1px dashed black;">
            <div class=" row form-group">
              <div class="col-12">
                <label>Name</label>
                <input type="text" name="pname" class="form-control" placeholder="Enter Name" required>
              </div>
            </div>
            <div class=" row form-group">
              <div class="col-6">
                <label>Email</label>
                <input type="email" name="pemail" class="form-control" placeholder="Enter Email" required>
                </div>
                <div class="col-6">
                <label>Password</label>
                <input type="text" name="ppassword" class="form-control" placeholder="Enter password" required>
                </div>
                
            </div>
            <div class=" row form-group">
              <div class="col-6">
                <label>Profession</label>
                <input type="text" name="profession" class="form-control" placeholder="Enter Job Tittle" required>
              </div>
              <div class="col-6">
                <label>Phone</label>
                <input type="number" name="pphone" class="form-control" placeholder="Enter Phone Number" required>
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
    $sname =$_POST['sname'];
    $gender =$_POST['gender'];
    $email =$_POST['email'];
    $birthday =$_POST['birthday'];
    $relogion =$_POST['relogion'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $year =$_POST['year'];
    $class =$_POST['class'];
    $address =$_POST['address'];


    
    $query1 = "INSERT INTO student (`name`, `birthday`, `sex`, `relogion`, `address`, `phone`, `email`, `password`, `class_id`,`year`) 
    VALUES ('$sname','$birthday','$gender','$relogion','$address','$phone','$email','$password','$class','$year')";
    $query1_run = mysqli_query($dp,$query1);

    $student_id = mysqli_insert_id($dp);
    $pname =$_POST['pname'];
    $pemail =$_POST['pemail'];
    $ppassword =$_POST['ppassword'];
    $pphone =$_POST['pphone'];
    $profession =$_POST['profession'];
    $address =$_POST['address'];
    $query2 ="INSERT INTO `parent`( `name`, `email`, `password`, `phone`, `address`, `profession`, `class_id` , `student_id`) 
    VALUES ('$pname','$pemail','$ppassword','$pphone','$address','$profession','$class','$student_id')";
    $query2_run = mysqli_query($dp,$query2);

    
  

    if($query1_run && $query2_run)       
    {
     echo '<script> alert ("Data saved");</script>';   

    }
    else
    {
        echo '<script> alert ("Data Not saved");</script>'; 
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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>kindergarten</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
      <div class="d-flex justify-content-end">
              <button type="button" class="btn" style="color: white; background-color: #AE3C60;" data-bs-toggle="modal" data-bs-target="#studentaddmodal"><i class="fa fa-plus pr-2" aria-hidden="true"></i>Add student</button>
               </div>
        <div class="container form " style="background: #AE3C60; color: white ;">
        
            <div class="small-box" style="box-shadow: none;">
            
              <div class="inner">
              
                    <h1 style="color:white">kindergarten</h1>
                </div>
                   <div class="dropdown mt-5" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;">
                            Choose Academic year
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" name="Kg1" href="KGprofile.php?link=1">Kg 1</a></li>
                            <li><a class="dropdown-item" name="Kg2" href="KGprofile.php?link=2">Kg 2</a></li>
                        </ul>
                  </div>  
        </div>
      </div>
      <button class="btn mt-5" style="background: #AE3C60;"><a  href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>

    </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>