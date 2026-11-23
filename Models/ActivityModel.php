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

function getActivitiesbyID($conn, $id_activity){
    $sql = "SELECT * FROM Activity WHERE activity_id = $id_activity";
    $result = mysqli_query($conn, $sql);
    $activitie = mysqli_fetch_assoc($result);
    return $activitie;
}





?>