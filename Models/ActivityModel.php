<?php

function getAllActivities($conn) {
    $activities = [];
    $sql = "SELECT * FROM Activity";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        $activities[] = $row;
    }
    return $activities;
}

function getActivitiesbyID($conn, $id){
    $sql = "SELECT * FROM Activity  WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $activitie = mysqli_fetch_assoc($result);
    return $activitie;
}

function createMark($conn, $student_number, $activity_id, $mark){
    $sql = "INSERT INTO Mark (student_number, activity_id, mark) 
    VALUES ('$student_number', '$student_number', '$activity_id', '$mark')";
    $result = mysqli_query($conn,$sql);
    return $result;
}


?>