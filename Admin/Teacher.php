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
<!-- Add Teacher modal-->
<div class="modal fade" id="teachermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Teacher </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form  autocomplete="off" action="Teacher.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <h6>Teacher Information</h6>
            <hr style="border-top: 1px dashed black;">

              <div class=" row form-group">
                <div class="col-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
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
                <div class="col-6">
                  <label>Department</label>
                  <select name="department" class="form-select" aria-label="Default select example" required>
                    <option selected>Choose</option>
                    <option value="Arabic">Arabic</option>
                    <option value="English">English</option>
                    <option value="Maths">Maths</option>
                    <option value="Science">Science</option>
                    <option value="Social Studies">Social Studies</option>
                    <option value="Music">Music</option>
                    <option value="Computer">Computer</option>
                    <option value="Foreign Language">Foreign Language</option>
                    <option value="Art">Art</option>
                    <option value="librarian">librarian</option>
                    <option value="Phynsical education">Phynsical education</option>
                  </select> 
                </div>
                <div class="col-6">
                  <label>Subject</label>
                  <select name="subject" class="form-select" aria-label="Default select example" required>
                  <option selected>Choose</option>
                    <option value="arabic">Arabic</option>
                    <option value="english">English</option>
                    <option value="Math">Math</option>
                    <option value="Pure Math">Pure Math</option>
                    <option value="Applied  math">Applied  math</option>
                    <option value="Art">Art</option>
                    <option value="Social Studies">Social Studies</option>
                    <option value="Geography">Geography</option>
                    <option value="History">History</option>
                    <option value="Psychology&sociology">Psychology&sociology</option>
                    <option value="Philosophy and Logic">Philosophy and Logic</option>
                    <option value="Computer">Computer</option>
                    <option value="french">french</option>
                    <option value="German">German</option>
                    <option value="librarian">librarian</option>
                    <option value="Music">Music</option>
                    <option value="Phynsical education">Phynsical education</option>
                    <option value="Science">Science</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option>
                    <option value="Biology ">Biology </option>
                    <option value="Geology">Geology</option>
                 


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
    $name =$_POST['name'];
    $gender =$_POST['gender'];
    $email =$_POST['email'];
    $birthday =$_POST['birthday'];
    $address =$_POST['address'];
    $relogion =$_POST['relogion'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];
    $subject =$_POST['subject'];
    $department =$_SESSION['department'];

    $query1 = "INSERT INTO teacher (`name`, `birthday`, `sex`, `religion`, `address`, `phone`, `email`, `password`, `subject`, `Department`) VALUES 
    ('$name','$birthday','$gender','$relogion','$address','$phone','$email','$password','$subject' , '$department')";
      $query_run = mysqli_query($dp,$query1);
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
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Teachers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Teachers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
      <div class="d-flex justify-content-end">
              <button type="button" class="btn" style="color: white; background-color: #dc3545;" data-bs-toggle="modal" data-bs-target="#teachermodal"><i class="fa fa-plus pr-2" aria-hidden="true"></i>Add Teacher</button>
               </div>
        <div class="container form " style="background: #dc3545; color: white ;">
        
            <div class="small-box" style="box-shadow: none;">
            
              <div class="inner">
              
                    <h1 style="color:white;">Department</h1>
                </div>
                <div class="dropdown mt-1" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;">
                            Choose Department
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Arabic"> Arabic</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=English"> English</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Science"> Science</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Maths"> Maths</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Social Studies"> Social Studies</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Music">Music</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Computer">Computer</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Foreign Language"> Foreign Language</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Art"> Art</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=librarian"> librarian</a></li>
                        <li><a class="dropdown-item" href="Teacherprofile.php?department=Phynsical education"> Phynsical education</a></li>
                        </ul>
            </div>            
        </div>
      </div>
      <br><br><br>
     

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