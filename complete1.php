<?php 
session_start();
require ('m/db.php');

require "m/rv.php"; 
$id=$_GET["i"];
if(empty($_POST["dateRv"])){
    $date=$_GET["date"];
}else{
    $date=$_POST["dateRv"];
}
$rv=new rv();
$res=$rv->heureRv($date,$id);
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
            <form action="complete2.php?d=<?=$date?>&id=<?=$id?>" method="post" class="forme p-5">
            <label for="">Heure de rendez-vous</label>
            <?php if(is_array($res)): ?>
                <select class="form-control" name="heureRv" id="">
                <?php foreach($res as $res):?>
                <option value="<?= $res["id_heure"]?>"><?= $res["heureRv"]?></option>
                <?php endforeach ?>
                </select>
            <?php else :?>
            <input type="text" class="form-control" disabled="true" value="<?=$res?>">
            <?php endif ?>
                <button class="btn btn-primary mt-3">Continuer</button>
            </form>
        </div>
    
</body>
</html>