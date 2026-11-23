<?php
include 'Models/MarkModel.php';

//Fonction pour ajouter une note à une activité : 
function addMarkController($conn, $activity_id){
    // On récupère l'identifiant de l'étudiant et la note envoyé dans le formulaire
    $learner_id = $_POST["learner_id"];
    $mark = $_POST["mark"];

    $res = createMark($conn, $learner_id, $activity_id, $mark);

    return $res;
}



?>