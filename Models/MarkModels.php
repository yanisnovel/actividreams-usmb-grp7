<?php

function createMark($conn, $student_number, $activity_id, $mark){
    $sql = "INSERT INTO Mark (student_number, activity_id, mark) 
    VALUES ('$student_number', '$student_number', '$activity_id', '$mark')";
    $result = mysqli_query($conn,$sql);
    return $result;
}



?>