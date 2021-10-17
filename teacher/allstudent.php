<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php');

if(isset($_GET['class']))
{
  $_SESSION['class'] = $_GET['class'];
}

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
    text-align: left;
    background-color: #0FB78D;
    color: white;
    
   
    }
</style>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0">
                 <form class="col-6 mb-5" action="" method="get" id="searchFormTest">
        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search by name..">
        </form> </h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>All Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    
    <section class="content">
      <div class="container-fluid">
</select>
        <div class="container ">        
        <table id="myTable">
          <thead>
          
                  <tr>
                  <th>student_id</th>
                  <th>name</th>
                  <th>birthday</th>
                  <th>sex</th>
                  <th>relogion</th>
                  <th>address</th> 
                  <th>phone</th> 
                  <th>email</th> 
                  <th>class</th>
                  <th>section</th>
                  <th> year</th>
                 
                  </tr>
              
              </thead>
              <tbody>
              <?php 
              /* 8yrt l gadwal*/
            
                 $sql="  SELECT * FROM student INNER JOIN teacher_classes
                 ON student.class_id=teacher_classes.class_id AND teacher_id= '{$_SESSION["teacher_id"]}' AND student.class_id='{$_SESSION["class"]}'";
                $result=$dp->query($sql);
                if ($result->num_rows>0) {
                     {
                        while ($row=$result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>".$row['student_id']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['birthday']."</td>";
                            echo "<td>".$row['sex']."</td>";
                            echo "<td>".$row['relogion']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['phone']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['class_id']."</td>";
                            if (is_null($row['section_id'])) {
                                echo "<td>"."null"."</td>";
                            } else {
                                echo "<td>".$row['section_id']."</td>";
                            }
                            echo "<td>".$row['year']."</td>";
                            echo "</tr>";
                        }
                    }
                }
                      ?>
                      
              </tbody>
        
        </table>
                      
           </div>
           <button class="btn mt-5" style="background: #0FB78D;"><a href="Teacher_Profile.php"  style="text-decoration: none; color: white;">Back</a></button>
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