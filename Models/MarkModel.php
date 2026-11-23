<?php

function createMark($conn, $student_number, $activity_id, $mark){
    $sql = "INSERT INTO Mark (student_number, activity_id, mark) 
    VALUES ('$student_number', '$activity_id', '$mark')";
    $result = mysqli_query($conn,$sql);
    return $result;
}

function updateMark($conn, $student_number, $activity_id, $mark) {
    $sql = "UPDATE Mark 
            SET mark = $mark 
            WHERE student_number = '$student_number' AND activity_id = $activity_id";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function deleteMark($conn, $activity_id, $learner_id) {
    $sql = "DELETE FROM Mark 
            WHERE student_number = '$learner_id' AND activity_id = $activity_id";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>