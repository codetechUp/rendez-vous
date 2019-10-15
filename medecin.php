<?php
session_start();
require 'm/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.js"></script>
    <script src="app.js"></script>
    <title>Document</title>
</head>
<body class="body">
<div id="no" class="no bg-danger">
    <p>Bonjour Dr <?=$_SESSION["username"]?> !</p>
    <p>Voici Votre Tableau De Bord</p>
    <p>TOUTE Vos rendez-vous seront affichés ici </p>
    <button id="cacher" class="btn btn-primary">cliquez</button>
</div>

<div class="container">
    <div class="row bg-dark">
        <div class="col-4"><a href="mesrv.php" class="btn btn-danger m-3">Vos rendez-vous d'Aujourd'hui</a></div>
        <div class="col-4"><a href="" class="btn btn-danger  m-3">Vos rendez-vous d'Aujourd'hui</a></div>
        <div class="col-4"><a href="" class="btn btn-danger  m-3">Vos rendez-vous d'Aujourd'hui</a></div>
    </div>
</div>
    
</body>
</html>