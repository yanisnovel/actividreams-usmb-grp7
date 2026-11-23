<?php

function getAllActivities($conn) {
    $activities = [];
    $sql = "SELECT * FROM activities";
    $result = mysqli_query($conn, $sql);
    while ($row = musqli_fetch_assoc($result)){
        $activities[] = $row;
    }
    return $activities;
}



?>