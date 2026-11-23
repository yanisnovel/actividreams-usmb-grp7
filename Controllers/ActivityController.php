<?php
include 'Models/ActivityModel.php';

function showAllactivities($conn) {
    $activities = getAllActivities($conn);
    echo json_encode($activities);
}

function showAllactivitiesByID($conn, $id){
    $activities = getActivitiesbyID($conn, $id);
    echo json_encode($activities);
}


?>