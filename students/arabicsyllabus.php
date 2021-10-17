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
      background-color: #4CAF50;
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
            <h1 class="m-0"> academic_syllabus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>academic_syllabus</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content"> 
    <div class="container-fluid" >
      <div class="row">
        <div class="col-9">
        <table id="myTable" class="customers">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Download</th>
                  </tr>
                  </thead>
        <?php

                $sql = "SELECT * FROM `academic_syllabus` where class_id='{$_SESSION["class_id"]}' AND subject_id=1";
                $res=$dp->query($sql);
                if($res->num_rows>0)
                {
                while($row=$res->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".$row['description']."</td>";
                    ?>
                    <td><a href="../teacher/fileslogic.php?file_id=<?php echo $row['id'] ?>">download</a></td>
                   </tr>

                  <?php } }
                  else
                  {
                    echo "No Record Found";
                  }
                            
                  ?>
              </table>
          
        </div>
    </div>
    <button class="btn" style="background: #5cb100;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>
  </div>
</section>
</div>
<?php

// Downloads files





