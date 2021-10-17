  <?php
  include ('database.php');
  include('Aprofile_header.php');
  include('Sidebar.php');?>
  <?php include 'logic.php';?>

  <style> 
      #myTable {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    
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
      background-color: #0FB78D;
      color: white;
      }
    .login-form
    {
      width: 100%;
    margin-bottom: 10px;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px 40px;
    
      }
  </style>
     
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Assigment</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>Assigment</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
      <!-- Main content -->
  <section class="content"> 
    <div class="container-fluid" >
      <div class="row">
      <div class="col-12"> 
          <div class="login-form" >
              <form action="assignments.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                            <span  id="inputGroup-sizing-sm">Title</span>
                            <input type="text" name ="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required >
                      </div>
                  
                    <div class="form-group">
                      <span  id="inputGroup-sizing-default">description</span>
                      <input type="text" name ="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                    </div>
                                
                    <div class="form-group">
                          <span id="addon-wrapping">File</span>
                          <input name="file_name" type="text" class="form-control"  aria-label="Select file" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="form-group">
                          <span  id="addon-wrapping">class_id</span>
                          <input name="class_id" type="number" class="form-control"  aria-label="Select file" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="form-group">
                          <span  id="addon-wrapping">subject id</span>
                          <input name="subject_id" type="number" class="form-control"  aria-label="Select file" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="form-group">        
                      <input class="form-control" type="file" name="myfile" required/>
                      <button type="submit" name="save" class="btn btn-primary m-3 justfiy-content-center" onclick="return message()">upload</button>
                    </div>
              </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table id="myTable" class="customers">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th> Name</th>
                    <th>Class </th>
                    <th>File NAme</th>
                    <th>Download</th>
                    <th>Delete</th>



                  </tr>
                  </thead>
                  <tbody>
                <?php

      
                $sql = "SELECT * FROM `assignment` inner join classes on
                 assignment.class_id=classes.ID  and teacher_id='{$_SESSION["teacher_id"]}'";
                $res=$dp->query($sql);
                if($res->num_rows>0)
                {
                while($row=$res->fetch_assoc())
                {
                  echo "<tr>";
                  echo "<td>".$row['assignment_id']."</td>";
                  echo "<td>".$row['title']."</td>";
                  echo "<td>".$row['description']."</td>";
                  echo "<td>".$row['name']."</td>";
                  echo "<td>".$row['class']."</td>";
                  echo "<td>".$row['filename']."</td>";

                  ?>
                  <td><a href="logic.php?file_id=<?php echo $row['assignment_id'] ?>">download</a></td>
                  <td><a href="logic.php?delete=<?php echo $row['assignment_id'] ?>">Delete</a></td>
                <?php } }
                else
                {
                  echo "No Record Found";
                }
                          
                ?>
                   </tbody>
              </table>
  
          
        </div>
       
      </div>

          <button class="btn mt-5" style="background: #0FB78D;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>
    </div>
  </section>
  </div>  
  <script type="text/javascript">
</script>
  <?php include('Aprofile_footer.php')?>
