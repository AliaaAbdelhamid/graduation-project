<?php
include('database.php');
session_start();
if(isset($_POST['insertdata']))
{
    $subject_id = $_SESSION ['subject_id'];
    $class_id = $_POST['class_id'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $query ="INSERT INTO `questionbank`( `question_id` ,`question`, `answer`, `class_id`, `subject_id`)
     VALUES ('','$question','$answer','$class_id','$subject_id')";

    $query_run = mysqli_query($dp,$query);

    if($query_run)       
    {
     echo '<script> alert ("Data saved");</script>';   
     header('location: bank.php');   

    }
    else
    {
        echo '<script> alert ("Data Not saved");</script>'; 
        header('location: bank.php');   
    }
}
   

if(isset($_POST['updatequestion']))
{
    $edit_id=$_POST['update_id'];
    $question =$_POST['question'];
  

   
            $query1 = "UPDATE `questionbank` SET `question`= '$question' where question_id = '$edit_id'";
             $query1_run = mysqli_query($dp,$query1);
            if($query1_run)
            {
                echo '<script> alert ("Data Updated");</script>';   
                header('location: bank.php');
            }
            else
            {
               echo '<script>alert ("Data Not updated");</script>';
            }
        }
    
if(isset($_POST['updateanswer']))
{
    $edit_id=$_POST['updateanswer_id'];
    $answer =$_POST['answer'];
  

   
            $query1 = "UPDATE `questionbank` SET `answer`= '$answer' where question_id = '$edit_id'";
             $query1_run = mysqli_query($dp,$query1);
            if($query1_run)
            {
                echo '<script> alert ("Data Updated");</script>';   
                header('location: bank.php');
            }
            else
            {
               echo '<script>alert ("Data Not updated");</script>';
            }
        }
    


if(isset($_POST['deletedata']))
{
    $id=$_POST['delete_id'];
   
    $query = "  DELETE FROM `questionbank` WHERE  question_id = '$id'";
    $query_run = mysqli_query($dp,$query);

    if($query_run)

    {
        echo '<script>alert ("Data Deleted");</script>';

        header("location: bank.php");

    }
    else
    {
        echo '<script>alert ("Data Not saved");</script>';
    }
}
?>