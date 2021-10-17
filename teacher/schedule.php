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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> schedule</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>schedule</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </div>
    <div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/img/logo icon.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <div class="content-header">
      <div class="container-fluid">
        <div class="row m-2">
        <div class="col-sm-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search by Day..">
        </div>
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
        <div class="container ">   
       
             
              <table id="myTable" class="customers">
                <thead>
                <tr>
                  <th>Duration</th>
                  <th>Day</th>
                  <th>Class</th>
                </tr>
                </thead>
                  <tbody>
                  <?php
               $sql=" SELECT * from `teacher_schedule` inner join classes 
               on teacher_schedule.class=classes.ID and teacher_id='{$_SESSION["teacher_id"]}' ORDER BY `teacher_schedule`.`duration` ASC";
                $result=$dp->query($sql);
                if($result->num_rows>0)
                 {
                     while ($row=$result->fetch_assoc()) {
                        
                              echo "<tr>";
                              echo "<td>".$row['duration']."</td>";
                              echo "<td>".$row['day']."</td>";
                              echo "<td>".$row['class']."</td>";
                              echo "</tr>";
                     }
                 }
                      ?>
                        </tbody>
              </table>
           </div>
           
        </div>
        <button class="btn mt-5" style="background:#0FB78D;"><a href="Teacher_Profile.php"  style="text-decoration: none; color: white;">Back</a></button>    </section>
    </div>
</div>
</div>
</body>
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
  </script>
<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>