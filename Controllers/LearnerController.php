<?php
include 'Models/LearnerModel.php';

function showAllLearners($conn) {
    $learners = getAllLearners($conn);
    return $learners;
}

function showLearnerByID($conn, $id){
    $learner = getLearnerbyID($conn, $id);
    return $learner;
}


?>
