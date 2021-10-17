<?php
include('Aprofile_header.php')?>
<?php include('database.php')?>
<?php include('Sidebar.php')?>
<?php
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:quiz.php");

}

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>DASHBOARD </title>

 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
    $(function () {
        $(document).on( 'scroll', function(){
            console.log('scroll top : ' + $(window).scrollTop());
            if($(window).scrollTop()>=$(".logo").height())
            {
                $(".navbar").addClass("navbar-fixed-top");
            }

            if($(window).scrollTop()<$(".logo").height())
            {
                $(".navbar").removeClass("navbar-fixed-top");
            }
        });
    });
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
    td = tr[i].getElementsByTagName("td")[2];
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
  // search function////////////////////////////////////////////////////////////
  function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("maininput");
  filter = input.value.toUpperCase();
  table = document.getElementById("maintable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
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
</head>
<style>
  form
  {  
      width:100%;
      padding: 50px;
      box-shadow: 10px 10px 15px 10px grey;
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
      background-color: #5cb100;
      color: white;
    }
    .notattend th{
      background-color: red;
      padding: 12px;
      text-align: left;
      color: white;
      width: 500px;

    }
</style>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
      <b>Dashboard</b>

<button class="btn"> <?php if(@$_GET['q']==0)?><a href="quiz.php?q=0">Home<span class="sr-only">(current)</span></a></button>
<button class="btn"> <?php if(@$_GET['q']==2)?><a href="quiz.php?q=2">User Rankings</a></button>
<button class="btn"> <?php if(@$_GET['q']==4)?><a href="quiz.php?q=4">Add Quiz</a></button>

  </div><!-- /.container-fluid -->
</nav>
    <!-- Main content --> 
    <section class="content">
      <div class="container-fluid mt-5">
      
<?php if(@$_GET['q']==0) {
 ?> <div class="col-sm-3">
 <input type="text" id="maininput" onkeyup="myFunction()" class="form-control mb-5" placeholder="Search by academic year..">
</div>
<?php
$result = mysqli_query($dp,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel"><table id="maintable" class="customers">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td><b>academic  year</b></td><td><b>Subject id</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
    $class_id = $row['class_id'];
    $subject_id = $row['subject_id'];

	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td><td>'.$class_id.'</td><td>'.$subject_id.'</td>
	<td><b><a href="quizupdate.php?q=rmquiz&eid='.$eid.'" class="pull-right btn btn-danger" style="margin:0px; border-radius:0%;"><span class="glyphicon glyphicon-trash"  aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
$c=0;
echo '</table></div>';

}

//ranking start
if(@$_GET['q']== 2) 
{
   ?> <div class="col-sm-3">
            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control mb-5" placeholder="Search by quiz title..">
        </div>
        <?php
$q=mysqli_query($dp,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title">
<table id="myTable" class="customers" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Exam Tittle</b></td><td><b>Score</b></td><td><b>Class ID</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($dp,"SELECT * FROM student WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
    $name=$row['name'];
    $class=$row['class_id'];

    $q123=mysqli_query($dp,"SELECT * FROM quiz WHERE class_id=1 " )or die('Error231');
    while($row=mysqli_fetch_array($q123) )
    {
        $title=$row['title'];
    }
}

$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$title.'</td><td>'.$s.'</td><td>'.$class.'</td></tr>';
}
echo '</table></div>';}
?>



<!--home closed-->
<!--add quiz start-->
<?php
if(@$_GET['q']==4 && !(@$_GET['step']) ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Exam Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"> 
   <form class="form-horizontal title1" name="form" action="quizupdate.php?q=addquiz"  method="POST">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="clas_id"></label>  
  <div class="col-md-12">
  <input id="class_id" name="class_id" placeholder="Enter Class id" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="clas_id"></label>  
  <div class="col-md-12">
  <input id="subject_id" name="subject_id" placeholder="Enter Subject id" class="form-control input-md" type="number">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Exam Title" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time" name="time" placeholder="Enter time limit for test in minute" class="form-control input-md" min="1" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="tag"></label>  
  <div class="col-md-12">
  <input id="tag" name="tag" placeholder="Enter #tag which is used for searching" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Write description here..."></textarea>  
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
  <input  type="submit" style="margin-left:2% ; background : #0FB78D ; color : white" class="btn" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?>
<!--add exam end-->

<!--add exam step2 start-->
<?php
if(@$_GET['q']==4 ) {
echo ' 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="quizupdate.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
<fieldset>
';
 
 for($i=1;$i<=@$_GET['n'];$i++)
 {
echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br /><!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
  <div class="col-md-12">
  <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'1"></label>  
  <div class="col-md-12">
  <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'2"></label>  
  <div class="col-md-12">
  <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'3"></label>  
  <div class="col-md-12">
  <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'4"></label>  
  <div class="col-md-12">
  <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
    
  </div>
</div>
<br />
<b>Correct answer</b>:<br />
<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
   <option value="a">Select answer for question '.$i.'</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'; 
 }
    
echo '<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
  <input  type="submit" style="margin-left:2% ; background : #0FB78D ; color : white" class="btn" value="Submit" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form></div>';



}
?><!--add exam step 2 end-->


<!--remove exam-->




      </div>
    </section>
  </div>

</div>

<!-- ./wrapper -->
<?php include('Aprofile_footer.php')?>