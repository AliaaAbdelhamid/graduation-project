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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Exams</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo $_SESSION["year"]?></a></li>
              <li class="breadcrumb-item active"></li>Exams</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <?php  
            $class=$_SESSION['class_id']<=11;
              if($class)  :?>
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h4>Math</h4>
                  </div>
                  <div class="icon">
                  <i class="nav-icon fas fa-stream"></i>
                  </div>
                  <a href="exam.php?subject_id=3" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h4>Science</h4>
                  </div>
                  <div class="icon">
                  <i class="fas fa-stream"></i>
                  </div>
                  <a href="exam.php?subject_id=22" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

          <?php endif; ?>
            <!-- ./col -->

            <?php    
 
              if($_SESSION['class_id']>=6)  :?>
                <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h4>Frensh</h4>
                  </div>
                  <div class="icon">
                  <i class="fas fa-stream"></i>
                  </div>
                  <a href="exam.php?subject_id=11" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
               </div>
          <?php endif; ?>

           <?php  
          if($_SESSION['class_id']>=6 && $_SESSION['class_id']<=11 )  :?>

              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h4>Social Studies</h4>
                  </div>
                  <div class="icon">
                  <i class="fas fa-stream"></i>
                  </div>
                  <a href="exam.php?subject_id=23" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
          <?php endif; ?>

        <div class="col-lg-4 col-6"> 
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Arabic</h4>                
              </div>
              <div class="icon">
              <i class="fas fa-stream"></i>
              </div>
              <a href="exam.php?subject_id=1" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
       </div>     
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>English</h4>
              </div>
              <div class="icon">
                <i class="fas fa-stream"></i>
              </div>
              <a href="exam.php?subject_id=2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <!-- ./col -->
      
          <?php  
           if($_SESSION['class_id']==12 )  :?>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Applied math</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=6" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Biology</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=8" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>      
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Chemistry</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=9" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Geography</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=12" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>History</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=14" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Philosophy and logic</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=15" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Physics</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=16" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h4>Pure Math</h4>
                </div>
                <div class="icon">
                <i class="fas fa-stream"></i>
                </div>
                <a href="exam.php?subject_id=18" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          <?php endif; ?>

          <?php  
              if($_SESSION['class_id']==13 &&($_SESSION['section_id']==2))  :?>
                                    <!-- small box -->
                                    <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>Geography</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=12" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>History</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=14" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>psychology&sociology</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=17" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>philosophy and logic</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=20" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>


          <?php endif; ?>

          <?php  
              if($_SESSION['class_id']==13 &&($_SESSION['section_id']==1))  :?>
            
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Applied math</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=6" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Biology</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=8" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>      
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Chemistry</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=9" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Philosophy and logic</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=15" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Physics</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=16" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Pure Math</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=18" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>

          <?php endif; ?>

          <?php  
              if($_SESSION['class_id']==14 &&($_SESSION['section_id']==5))  :?>
                                    <!-- small box -->
                                    <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>Geography</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=12" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>History</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=14" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>psychology&sociology</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=17" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>philosophy and logic</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=20" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                              
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                              
                                  </div>


          <?php endif; ?>

          <?php  
              if($_SESSION['class_id']==14 &&($_SESSION['section_id']==3))  :?>
                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                      <div class="inner">
                                        <h4>geology</h4>
                                      </div>
                                      <div class="icon">
                                      <i class="fas fa-stream"></i>
                                      </div>
                                      <a href="exam.php?subject_id=17" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                </div>
               
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Biology</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=8" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>      
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Chemistry</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=9" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Philosophy and logic</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=15" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Physics</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=16" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                              
                                  </div>
          <?php endif; ?>
          <?php  
              if($_SESSION['class_id']==14 &&($_SESSION['section_id']==4))  :?>
              
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Applied math</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=6" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
               
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Chemistry</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=9" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Physics</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=16" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h4>Pure Math</h4>
                    </div>
                    <div class="icon">
                    <i class="fas fa-stream"></i>
                    </div>
                    <a href="exam.php?subject_id=18" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                              
                                  </div>
                                  <div class="col-lg-4 col-6">
                                    <!-- small box -->
                              
                                  </div>
          <?php endif; ?>

         
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