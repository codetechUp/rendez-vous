<?php
require("m/rv.php");
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
    $rvs=$rv->rvAtente();

    ?>
    <?php foreach($rvs as $rvs): ?>
    <div class="container">
    <div class="row bg-dark mt-5">
    <div class="col-4 text-white"><?= $rvs['id_rv'] ?></div>
    <div class="col-4"><a href="complete.php?i=$rvs['id_rv']" class="btn btn-primary">Completer le RV</a></div>
    <div class="col-4"><a href="" class="btn btn-danger">Editer le RV</a></div>
    </div>
    </div>
    <?php endforeach ?>
</body>
</html>