<?php
include("database.php");
if (isset($_GET['download'])) {
  $id = $_GET['download'];

  // fetch file to download from database
  $sql = "SELECT * FROM student_assignment WHERE studentass_id ='$id'";
  $result = mysqli_query($dp, $sql);
  $file = mysqli_fetch_assoc($result);
  $filepath = 'uploads/' . $file['filename'];
  $type=$file['file_type'];

  if (file_exists($filepath)) {
      echo"nora";
      header('Cache-Control: public');
      header('Content-Description: File Transfer');
      header('Content-Type: $type');
      header('Content-Disposition: attachment; filename=' . basename($filepath));
      readfile('uploads/' . $file['filename']);

      // Now update downloads count
      $newCount = $file['downloads'] + 1;
      $updateQuery = "UPDATE student_assignment SET downloads='$newCount' WHERE studentass_id ='$id'";
      mysqli_query($dp, $updateQuery);
      header('location:../teacher/student_assignments.php');

      exit;
  }

}