<?php
include ('database.php');
include('Aprofile_header.php');
include('Sidebar.php');
?>
<style> 

      #myTable {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    
      }

      #myTable td, #myTable th {
      border: 1px solid #ddd;
      padding: 8px;
    
      
      }

      #myTable tr:nth-child(even){background-color: #f2f2f2;}

      #myTable tr:hover {background-color: #ddd;}

      #myTable th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color:  #0FB78D;
      color: white;
      }
   
</style>
<!-- Add student modal-->
<div class="modal fade" id="studentaddmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Student </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="bankprocess.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
              <div class=" row form-group">
                <div class="col-12">
                <label>Class_id</label>
                <input type="text" name="class_id" class="form-control" placeholder="Enter Class_id" required>
                </div>
              
              </div>
              <div class=" row form-group">
                <div class="col-12">
                <label>Question</label>
                <input type="text" name="question" class="form-control" placeholder="Enter Question" required>
                </div>
              
              </div>
              <div class=" row form-group">
                <div class="col-12">
                <label>Answer</label>
                <input type="text" name="answer" class="form-control" placeholder="Enter Answer" required>
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
  <!--############################################################################################################-->
<!-- Edit modal of question-->
<div class="modal fade" id="editquestionmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Student Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="bankprocess.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
          <input type="hidden" name="update_id" id="update_id">

              <div class=" row form-group">
                <div class="col-12">
                <label>question</label>
                <input type="text" name="question" id="question" class="form-control" placeholder="Enter question" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="updatequestion"class="btn btn-primary">Save Data</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit modal of answer-->
<div class="modal fade" id="editanswermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Student Data </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <form action="bankprocess.php" method="POST"  enctype="multipart/form-data">
          <div class="modal-body">
          <input type="hidden" name="updateanswer_id" id="updateanswer_id">

              <div class=" row form-group">
                <div class="col-12">
                <label>Answer</label>
                <input type="text" name="answer" id="answer" class="form-control" placeholder="Enter answer" required>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="updateanswer"class="btn btn-primary">Save Data</button>
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
        <form action="bankprocess.php" method="POST">
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Question Bank</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>Question Bank</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content"> 
    <div class="container-fluid" >
         
        <?php
                $query = 'SELECT * FROM `subject`  where name="'. $_SESSION['subject'].'"';
                $query_run = mysqli_query($dp,$query);
             if($query_run)
                {
                  foreach($query_run as $row)
                  {
                    $_SESSION ['subject_id'] = $row['subject_id'];
                    
              ?>   
                  <?php
                  }
                }
                else
                {
                  echo "No Record Found";
                }
                          
                ?>
            
   
            <!-- Main content -->
            <div class="d-flex justify-content-end">
                      <button type="button" class="btn" style="color: white; background-color: #0FB78D;" data-bs-toggle="modal" data-bs-target="#studentaddmodal"><i class="fa fa-plus pr-2" aria-hidden="true"></i>Add New Question</button>
                      </div>
      
            <?php
              $query = 'SELECT * FROM `questionbank` WHERE subject_id ="' .$_SESSION ['subject_id'].'"';
              $query_run = mysqli_query($dp,$query);
              
                ?> 
               
<div class="row ">

<div class=" col-12">
<?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                    
            ?>
              <table id="myTable" class="customers" >
                <thead>
                <tr>
                <th style="display: none;" > id</th>             

                <th> Question <?php echo $row['question_id'] ;?></th>        
                <th> Action</th>             
     
                </tr>
                </thead>
             
                  <tbody>
                  <tr>
                    <td  style="display: none;"><?php echo $row['question_id'] ;?></td>
                      <td><h5 style="font-weight: bold;">Question : </h5><p style="margin-left: 60px;"><?php echo $row['question'] ;?></p></td>
                      <td>
                        <div class="row">
                          <div class="col-6">
                            <a type="button" class="btn btn-info editquestionbtn" style="font-size: 12px;"><i class="fas fa-edit mr-"></i></a>
                          </div>
                          <div class="col-6">
                          <a type="button" class="btn btn-danger deletequestionbtn" style="font-size: 12px;"><i class="fas fa-trash-alt mr-1"></i></a>
                          </div>

                        </div>
                      </td>
                  </tr>
                  <tr>
                  <td  style="display: none;"><?php echo $row['question_id'] ;?></td>

                      <td><h5 style="font-weight: bold;">Answer : </h5> <p style="margin-left: 60px;"><?php  echo $row['answer'];?></p></td>
                      <td>
                        <div class="row">
                          <div class="col-6">
                            <a type="button" class="btn btn-info editanswerbtn" style="font-size: 12px;"><i class="fas fa-edit mr-"></i></a>
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
</div>
      </div>
    <button class="btn mt-5" style="background: #0FB78D;"><a href="Teacher_Profile.php" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>
  </section>
              </div>
<script> //////////////////////////////////////////////////////////////////////////
  // edit function/////////////////////////////////////////////////////////
  $(document).ready(function()
  {
    $('.editquestionbtn').on('click', function()
    {
      $('#editquestionmodal').modal('show');

      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function()
      {
        return $(this).text();
      }).get();

      console.log(data);

      $('#update_id').val(data[0]);
      $('#question').val(data[1]);
      


    });
  });
//////////////////////////////////////////////////////////////////////////
 // edit function/////////////////////////////////////////////////////////
 $(document).ready(function()
  {
    $('.editanswerbtn').on('click', function()
    {
      $('#editanswermodal').modal('show');

      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function()
      {
        return $(this).text();
      }).get();

      console.log(data);

      $('#updateanswer_id').val(data[0]);
      $('#answer').val(data[1]);
      


    });
  });
//////////////////////////////////////////////////////////////////////////
// delete function///////////////////////////////////////////////////////
$(document).ready(function()
  {
    $('.deletequestionbtn').on('click', function()
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
<?php include "Aprofile_footer.php"?>