<?php
include('database.php');



if(isset($_POST['updatedata']))
{
    $edit_id=$_POST['update_id'];
    $marks = $_POST['marks'];
   
            $query1 = " UPDATE `mark` SET `mark_obtained`='$marks' WHERE student_id ='$edit_id'";
             $query1_run = mysqli_query($dp,$query1);
            if($query1_run)
            {
                echo '<script> alert ("Data Updated");</script>';   
                header('location: listofmarks.php');
            }
            else
            {
               echo '<script>alert ("Data Not updated");</script>';
               header('location: listofmarks.php');

            }
        }
    


if(isset($_POST['deletedata']))
{
    $id=$_POST['delete_id'];
   
    $query = " DELETE FROM `mark` where student_id = '$id'";
    $query_run = mysqli_query($dp,$query);

    if($query_run)

    {
        echo '<script>alert ("Data Deleted");</script>';

        header("location: listofmarks.php");

    }
    else
    {
        echo '<script>alert ("Data Not saved");</script>';
        header("location: listofmarks.php");

    }
}
?>