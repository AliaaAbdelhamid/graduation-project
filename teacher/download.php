<?php
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM student_assignment WHERE assignment_id='$id'";
    $result = mysqli_query($dp, $sql);
    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['filename'];
    $type=$file['file_type'];


    if (file_exists($filepath)) {
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Type: $type');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        readfile('uploads/' . $file['filename']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE student_assignment SET downloads='$newCount' WHERE assignment_id='$id'";
        mysqli_query($dp, $updateQuery);
        header('location:student_assignments.php');

        exit;
    }

}