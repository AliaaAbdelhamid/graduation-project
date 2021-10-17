<?php include('Aprofile_header.php')?>
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
      text-align: center;
      background-color: #0FB78D;
      color: white;
      }
    .login-form
    {
      width: 350px;
    margin-left: 10px;
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
              <h1 class="m-0"> Lectures</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>Lectures</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
      <!-- Main content -->
  <section class="content"> 
    <div class="container-fluid" >
      <div class="row">
        <div class="col-9">
        <table id="myTable" class="customers">
                  <thead>
                  <tr>
                  <th>Title </th>
                  <th>Name</th>
                  <th>Download</th>
                  
                  </tr>
                  </thead>
                  <tbody>
        <?php
                  $sql = "SELECT * FROM `lecture` where
                  lecture.class_id='{$_SESSION["class_id"]}' and subject_id=1";
                 $res=$dp->query($sql);
                 if($res->num_rows>0)
                 {
                 while($row=$res->fetch_assoc())
                 {
                  echo "<td>".$row['title']."</td>";
                   echo "<td>".$row['name']."</td>";
 
                   ?>
                   <td><a href="../teacher/uploadlecture.php?file_id=<?php echo $row['lecture_id'] ?>">download</a></td>
                 <?php } }
                 else
                 {
                   echo "No Record Found";
                 }
              
                          
                ?>
              </table>
  
          
        </div>
        </section>

          <button class="btn mt-5" style="background: #0FB78D;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>
    </div>
  </div>



  <?php include('Aprofile_footer.php')?>
