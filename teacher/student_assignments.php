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
  
  </style>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> Student Assigment</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>Student Assigment</li>
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
        <table id="myTable" class="customers">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Student Name</th>
                    <th>Download</th>
                  </tr>
                  </thead>
       <?php
       
                $sql = "SELECT * FROM `student_assignment` INNER JOIN student 
                on student_assignment.student_id= student.student_id  AND student_assignment.class_id = 14 ";             
                 
                $res=$dp->query($sql);
                 if($res->num_rows>0)
                 {
                   while ($row=$res->fetch_assoc()) {
                       $s="select subject_id  from subject where name='{$_SESSION["subject"]}'";
                       $re=$dp->query($s);
                       if ($re->num_rows>0) {
                           ?>
                    <tbody>
                    <tr>
                    
                      <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['name']?></td>
                        <td><a href="../students/teacherviewdownloads.php?download=<?php echo $row['studentass_id'] ?>">download</a></td>
                    </tr>
                  
                  </tbody>
                  <?php
                       }
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
    <button class="btn" style="background: #0FB78D;"><a href="Teacher_Profile.php" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>

  </section>
  </div>
  <?php


  ?>
  <?php include('Aprofile_footer.php')?>
