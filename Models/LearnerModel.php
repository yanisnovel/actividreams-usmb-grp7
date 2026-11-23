<?php

function getAllLearners($conn) {
    $learners = [];
    $sql = "SELECT * FROM learners";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        $learners[] = $row;
    }
    return $learners;
}

function getLearnerbyID($conn, $id){
    $sql = "SELECT * FROM learners WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $learner = mysqli_fetch_assoc($result);
    return $learner;
}

?>
