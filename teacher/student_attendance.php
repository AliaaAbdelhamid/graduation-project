<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
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
    text-align: left;
    background-color: #4CAF50;
    color: white;
    
   
    }
</style>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Students attendance</h1>
          </div>
          <div class="">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>All Students attendance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    
    <section class="content">
      <div class="container-fluid">
        <div class="container ">  
        <form action="" method="get" id="searchFormTest">
        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search..">
              <div style="display: inline;">
                
                 
               </button>
              </div>


        </form> 
        
        <table id="myTable">
          <thead>
          
                  <tr>
                  <th>Student ID</th>
                  <th>Class</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>date</th>
                  </tr>
              
              </thead>
              <tbody>
              <?php 
              
                 $sql="SELECT `student_id`,`name`,`birthday`,`sex`, `relogion`, `address`, `phone`,`email`,`password`,
                'student.class',`year`,`section_id`,`parent_id`,'teacher_schedule.subject'
                 FROM `student` INNER JOIN teacher_schedule
                 ON student.class= teacher_schedule.class AND teacher_schedule.teacher_id='{$_SESSION["teacher_id"]}'";
                $result=$dp->query($sql);
                if($result->num_rows>0)
                 {
                   while($row=$result->fetch_assoc())
                     {
                      
                       echo "<tr>";
                        echo "<td>".$row['Student_ID']."</td>";
                        echo "<td>".$row['class']."</td>";
                        echo "<td>".$row['subject1']."</td>";
                        echo "<td>".$row['status']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "</tr>";
                       }
                     }
                      ?>
              </tbody>
        </table>
           </div>
           <button class="btn" style="background: #5cb100;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>
        </div>
    </section>
    </div>
</div>
</div>
</body>
<!-- ./wrapper -->
<script>
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td=tr[i].getElementsByTagName("td")[1];
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
</script>
<?php include('Aprofile_footer.php')?>