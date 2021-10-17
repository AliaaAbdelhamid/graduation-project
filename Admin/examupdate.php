<?php
include_once 'database.php';
session_start();
$email=$_SESSION['email'];
//remove exam
if(isset($_SESSION['key'])){
if(@$_GET['q']== 'rmquiz' && $_SESSION['key']=='sunny7785068889') {
$eid=@$_GET['eid'];
$result = mysqli_query($dp,"SELECT * FROM questionsexam WHERE eid='$eid' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$qid = $row['qid'];
$r1 = mysqli_query($dp,"DELETE FROM optionsexam WHERE qid='$qid'") or die('Error');
$r2 = mysqli_query($dp,"DELETE FROM answerexam WHERE qid='$qid' ") or die('Error');
}
$r3 = mysqli_query($dp,"DELETE FROM questionsexam WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($dp,"DELETE FROM exam WHERE eid='$eid' ") or die('Error');
$r4 = mysqli_query($dp,"DELETE FROM historyexam WHERE eid='$eid' ") or die('Error');

header("location:exam.php?q=0");
}
}

//add exam
  if(isset($_SESSION['key'])){
    if(@$_GET['q']== 'addquiz' && $_SESSION['key']=='sunny7785068889') {
  $name = $_POST['name'];
  $name= ucwords(strtolower($name));
  $total = $_POST['total'];
  $sahi = $_POST['right'];
  $wrong = $_POST['wrong'];
  $time = $_POST['time'];
  $tag = $_POST['tag'];
  $desc = $_POST['desc'];
  $class_id = $_POST['class_id'];
  $subject_id = $_POST['subject_id'];

  $id=uniqid();
  $q3=mysqli_query($dp,"INSERT INTO exam VALUES  ('$id','$name' , '$sahi' , '$wrong','$total','$time' ,'$desc','$tag', NOW() , $class_id , '$subject_id')");
  
  header("location:exam.php?q=4&step=2&eid=$id&n=$total");
  }
}
  
//add question
if(isset($_SESSION['key'])){
  if(@$_GET['q']== 'addqns' && $_SESSION['key']=='sunny7785068889') {
  $n=@$_GET['n'];
  $eid=@$_GET['eid'];
  $ch=@$_GET['ch'];
  
  for($i=1;$i<=$n;$i++)
   {
   $qid=uniqid();
   $qns=$_POST['qns'.$i];
  $q3=mysqli_query($dp,"INSERT INTO questionsexam VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");
    $oaid=uniqid();
    $obid=uniqid();
  $ocid=uniqid();
  $odid=uniqid();
  $a=$_POST[$i.'1'];
  $b=$_POST[$i.'2'];
  $c=$_POST[$i.'3'];
  $d=$_POST[$i.'4'];
  $qa=mysqli_query($dp,"INSERT INTO optionsexam VALUES  ('$qid','$a','$oaid')") or die('Error61');
  $qb=mysqli_query($dp,"INSERT INTO optionsexam VALUES  ('$qid','$b','$obid')") or die('Error62');
  $qc=mysqli_query($dp,"INSERT INTO optionsexam VALUES  ('$qid','$c','$ocid')") or die('Error63');
  $qd=mysqli_query($dp,"INSERT INTO optionsexam VALUES  ('$qid','$d','$odid')") or die('Error64');
  $e=$_POST['ans'.$i];
  switch($e)
  {
    case 'a':
    $ansid=$oaid;
    break;
    case 'b':
    $ansid=$obid;
    break;
    case 'c':
    $ansid=$ocid;
    break;
    case 'd':
    $ansid=$odid;
    break;
    default:
    $ansid=$oaid;
  }
  
  
  $qans=mysqli_query($dp,"INSERT INTO answerexam VALUES  ('$qid','$ansid')");
  
   }
  header("location:exam.php?q=0");
  }
  }

?>



