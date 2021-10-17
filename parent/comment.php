<?php include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
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
        background-color:  #0FB78D;
        color: white;
    }
</style><!-- Content Wrapper. Contains page content -->

<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../assets/img/logo icon.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"></li></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
  <section class="content">
      <div class="container-fluid">

       <h4>Comments And Recommendations</h4>
       <hr>
              <?php
              $query = 'SELECT * FROM `mark` INNER JOIN subject ON mark.subject_id = subject.subject_id  WHERE Student_ID ="'. $_SESSION['student_id'].'"';
              $query_run = mysqli_query($dp,$query);
              
              ?> 
              <table id="myTable" class="customers">
                <thead>
                <tr>
                <th>Exam</th>
                    <th>Comment</th>
                  <th>Recommend</th>
                </tr>
                </thead>
                <?php
              if($query_run)
              {
                foreach($query_run as $row)
                {
                    
            ?>
                  <tbody>
                  <tr>
                  <td> <?php echo $row['name'];?> <?php echo $row['exam'];?></td>
                  <td><?php echo $row['comment'];?></td>
                  <td><?php echo $row['recommend'];?></td>
              
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
<?php include('Aprofile_footer.php')?>