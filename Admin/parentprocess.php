<?php
include('../database.php');
if(isset($_POST['updatedata']))
{
    $id = $_POST['update_id'];
    $name = $_POST['name'];
    $job = $_POST['job'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $class = $_POST['class'];
   
    $query1 = "UPDATE `parent` SET `name`='$name',`email`='$email',`password`='$password',
    `phone`='$phone',`address`='$address',`profession`='$job',`class`='$class' WHERE parent_id = $id";
    $query1_run = mysqli_query($dp,$query1);


    if($query1_run)

    {
        echo '<script>alert ("Data saved successufly");</script>';
        header('location: ../parent.php');
    }
    else
    {
        echo '<script>alert ("Data Not saved");</script>';
    }
}
if(isset($_POST['deletedata']))
{
    $id=$_POST['delete_id'];
   
    $query = " DELETE FROM parent where parent_id = '$id'";
    $query_run = mysqli_query($dp,$query);

    if($query_run)

    {
        echo '<script>alert ("Data Deleted");</script>';
        header('location: ../parent.php');
    }
    else
    {
        echo '<script>alert ("Data Not saved");</script>';
    }
}
?>