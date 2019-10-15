<?php

session_start()  ;

require("m/Patient.php");
require("m/rv.php");
$mat=$_GET['m'];
if($_POST){
    $data=array($mat,$_POST["prenom"],$_POST["nom"],$_POST["sexe"],$_POST["email"],$_POST["pays"],$_POST["addresse"],$_POST["telephone"]);
    $patient=new Patient();
    $rv=new rv();
    $patient->addPatient($data);
    $id=$patient->getIdByMat($mat);
    $dom=$_POST['fonction'];
    $insertRv=$rv->addRv(array($id,$dom));
}
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
<body class="patient">
<?php if(empty($_SESSION)): ?>
    <?php if($insertRv): ?>
    <div id="no" class="mt-5 no bg-danger">
        <p>Demande enregistré !</p>
        <p>Maitenant surveillez vos mails </p>
        <p>Les jours qui viennent </p>
        <a id="cacher" href="index.php" class="btn btn-primary">Retour</a>
    </div>
    <?php endif ?>
<?php endif ?>
<?php  if(($_SESSION["username"])) : ?>
<div id="no" class="mt-5 no bg-danger">
        <p>Demande enregistré !</p>
        <p>Secretaire <?=ucfirst($_SESSION['username']) ?>   Maitenant va voir les rvs en attente </p>
        <p>Et complete les !!!! </p>
        <a id="cacher" href="secret.php" class="btn btn-primary">Retour</a>
<?php endif ?>
</body>
</html>