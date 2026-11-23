<?php
include 'Models/ActivityModel.php';

function showAllactivities($conn) {
    $activities = getAllActivities($conn);
    return $activities;
}

function showAllactivitiesByID($conn, $id){
    $activities = getActivitiesbyID($conn, $id);
    return $activities;
}


?>