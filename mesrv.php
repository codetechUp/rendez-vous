<?php
require("m/rv.php");
require 'm/db.php';
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body class="body">
    <?php
    $rv=new rv();
    $rvs=$rv->medecinRv($_SESSION["id"]);

    ?>
     <div class="container">
     <div class="row bg-dark mt-1">
    <div class="col-4 text-white">ID RENDEZ-VOUS</div>
    <div class="col-4 text-white">DATE RV</div>
    <div class="col-4 text-white">>Editer le RV</div>
    </div>
   
    <?php foreach($rvs as $rvs): ?>
    
    <div class="row bg-dark mt-1 ">
    <div class="col-4 text-white"><?= $rvs['id_rv'] ?></div>
    <div class="col-4"><a href="complete.php?i=<?=$rvs['id_rv']?>" class="btn btn-primary"><?=$rvs['date_rv']?></a></div>
    <div class="col-4"><a href="" class="btn btn-danger">Editer le RV</a></div>
    </div>
    <?php endforeach ?>
    </div>
</body>
</html>