<?php 
session_start();
require 'm/db.php';
require 'm/rv.php';
$id_medecin=$_POST["id_medecin"];
$id=$_GET["id"];
$rv=new rv();
$ok=$rv->setMedecin($id_medecin,$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="body">
    <div class="container">
        <div class="no">Rendez-vous completer entendez que le medecin l' accepte</div>
    </div>
    
</body>
</html>