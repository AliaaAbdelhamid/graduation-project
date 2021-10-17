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
      .form
{
    display: flex;
    justify-items: center;
    align-items: center;
    height: 350px;
    width:350px;
    padding: 50px;
    margin-top: 50px;
    box-shadow: 10px 10px 15px 10px grey;
    border-radius: 10%;
}
</style>

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"></li>Students</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="container form " style="background: #0FB78D; color: white ;">
        
            <div class="small-box" style="box-shadow: none;">
            
              <div class="inner">
              
                    <h1 style="color:white; padding-left: 70px;">Class</h1>
                </div>
                <div class="dropdown mt-1" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:white;  margin-left: 50px;">
                            Choose Class
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php                     
     $sql="SELECT * FROM `teacher_classes` INNER JOIN classes 
     ON teacher_classes.teacher_id ='{$_SESSION["teacher_id"]}' AND teacher_classes.class_id=classes.ID";
                 $res=$dp->query($sql);
                 if($res->num_rows>0)
                 {
                   while( $row=$res->fetch_assoc()){
                
                      
                  ?>
                        <li><a class="dropdown-item" href="allstudent.php?class=<?php echo $row['class_id'] ?>"><?php echo $row['class']?> </a></li>
                    

                  <?php } } ?>
                    
                        </ul>
            </div>            
        </div>
      </div>
      <br><br><br>

    </section>
          
                 </select> 
         </div> 
    </div>
      
       
          <button class="btn" style="background: #5cb100;"><a href="#" onclick="history.back()" style="text-decoration: none; color: white;">Back</a></button>
    </div>
  </section>
  </div>
  <?php include('Aprofile_footer.php')?>
