<?php
include_once "bdd.php";
include_once "utility.php";
include "Controllers/ActivityController.php";

// Route GET /activities : récupère et renvoie toutes les activités en utilisant la connexion $conn
get("/activities", function () use ($conn){ // use sert a autoriser la fonction anonyme a se servir de cette variable
    return showAllactivities($conn);
});

// Route GET /activities/:activityId : récupère et renvoie une seule activité grâce à son ID dans l'URL
get("/activities/:activityId", function ($param) use ($conn){
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




