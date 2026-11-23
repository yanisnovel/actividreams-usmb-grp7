<?php
include_once "bdd.php";
include_once "utility.php";
include "Controllers/ActivityController.php";

$conn = db();

// Route GET /activities : récupère et renvoie toutes les activités en utilisant la connexion $conn
get("/activities", function (){
    global $conn;
    return showAllactivities($conn);
});

// Route GET /activities/:activityId : récupère et renvoie une seule activité grâce à son ID dans l'URL
get("/activities/:activityId", function ($param){
    global $conn;
    $id_activity = $param["activityId"];
    return showAllactivitiesByID($conn, $id_activity);
});







get("/learners/:learnerId", function ($param) {
    $learner_id = $param['learnerId'];
});

put("/learners/:learnerId", function () {
    $_PUT = read_put();
    $user_pwd = $_PUT['password'];
});

header("HTTP/1.0 404");




