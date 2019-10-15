<?php

function findFonction(){

$pdo = new pdo("mysql:host=localhost;dbname=rendezVous","webroot","192797");
$req=$pdo->query("SELECT * FROM fonctions ");
$resultats=$req->fetchAll();
return $resultats;

}
function dump($r){
    echo "<pre>";
    var_dump($r);
    echo "<pre>";
    
}