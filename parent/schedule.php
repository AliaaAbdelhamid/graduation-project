<?php include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/img/logo icon.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row m-2">
        <div class="col-sm-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search By Day..">
        </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
    <!DOCTYPE html>
<html>
<head>

<style>
  .form
  {
    display: flex;
    justify-items: center;
    align-items: center;
    height: 350px;
    width:250px;
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
</head>
<body>
<table id="myTable" class="customers">
                <thead>
                <tr>
                  <th>Subject</th>
                  <th>Day</th>
                  <th>From</th>
                  <th>To</th>

              
                </tr>
                </thead>
                  <tbody>
                  <?php
                 

               $sql=" SELECT * from `schedule`  
              where  class='{$_SESSION["class_id"]}' ORDER BY `schedule`.`S_From` ASC";
                $result=$dp->query($sql);
                if($result->num_rows>0)
                 {
                   while ($row=$result->fetch_assoc())
                    {
                     
                      echo "<tr>";
                      echo "<td>".$row['subject']."</td>";
                      echo "<td>".$row['day']."</td>";
                   echo"<td>".$row['S_From']."</td>";
                   echo"<td>".$row['E_To']."</td>";
                      echo "</tr>";
                       
               }
           }

                      ?>

              </table>
</body>
</html>

    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
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
  <?php include('Aprofile_footer.php')?>