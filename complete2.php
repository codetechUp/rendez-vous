<?php 
session_start();
require ('m/db.php');
require 'm/rv.php';
$date=$_GET['d'];
$id=$_GET["id"];
$id_heure=$_POST["heureRv"];
$id_fonction=$_SESSION["id_fonction"];
$rv=new rv();
$res=$rv->MedecinDispo($date,$id_heure,$id_fonction,$id);
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
        <form action="ok.php?id=<?=$id?>" method="post" class="p-5 forme">
        <div class="form-group">
                <label for="">Medecin</label>
                <select class="form-control" name="id_medecin" id="">
                <?php foreach($res as $res):?>
                <option value="<?= $res["id_medecin"]?>"><?= $res["prenom"]." ".$res["nom"]?></option>
                <?php endforeach ?>
                </select>
                </div>
                <button class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    
</body>
</html>