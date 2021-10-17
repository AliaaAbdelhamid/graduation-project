<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php');
if(isset($_GET['parent']))
{
  $_SESSION['parent'] = $_GET['parent'];
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
    background-color: #5cb100;
    color: white;
  }
</style>
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
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid">
               <div class="container">
              <h4 class="m-3">List of Parents</h4>
              <?php
              $query = 'SELECT * FROM parent WHERE class_id = "'.$_SESSION['parent'].'"';
              $query_run = mysqli_query($dp,$query);
              ?> 
              <table id="myTable" class="customers">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Job</th>
                </tr>
                <?php
              if($query_run)
              {
                foreach($query_run as $row)
                {
            ?>
                  <tbody>
                  <tr>
                      <td><?php echo $row['parent_id'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php  echo $row['email'];?></td>
                      <td><?php echo $row['password'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td><?php echo $row['phone'];?></td>
                      <td><?php echo $row['profession'];?></td>
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
           <button class="btn mt-5" style="background: #5cb100;"><a href="parent.php" style="text-decoration: none; color: white;">Back</a></button>

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
      $('#Parenteditmodal').modal('show');

      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function()
      {
        return $(this).text();
      }).get();

      console.log(data);

      $('#update_id').val(data[0]);
      $('#name').val(data[1]);
      $('#email').val(data[2]);
      $('#password').val(data[3]);
      $('#address').val(data[4]);
      $('#phone').val(data[5]);
      $('#job').val(data[6]);         
      $('#class').val(data[7]);         
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