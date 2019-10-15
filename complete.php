<?php 
session_start();
require ('m/db.php');
require 'm/rv.php';
$id=$_GET["i"];
$rv=new rv();
$date=$rv->dateRv($id);
var_dump($date);
$date=$date["date_rv"];
?>

<!DOCTYPE html>
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
    <div class="container">
        <form method="post" action="complete1.php?i=<?=$id?>&date=<?=$date?>" class=" p-5 centre forme">
            <div class="form-group">
                <label for="">Date de rendez-vous</label>
                <?php if($date!=NULL):?>
                <input type="date" value=<?=$date?> disabled="true" class="form-control" name="dateRv">
                <?php else :?>
                <input type="date" class="form-control" name="dateRv">
                <?php endif ?>
            </div>
            <button class="btn btn-primary">Continuer</button>
        </form>
    </div>
</body>
</html>