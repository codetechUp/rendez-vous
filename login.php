<?php
require("m/db.php");
    require("m/secretaire.php");
    require("m/Doctor.php");
    
        if($_POST){
            if($_POST["role"]=="secretaire"){
                $secret=new Secretaire();
                $res=$secret->login($_POST["username"]);
                header("location:secret.php");
            }
            if($_POST["role"]=="medecin"){
                $secret=new Doctor();
                $res=$secret->loginDoc($_POST["username"]);
                header("location:medecin.php");
            }
        }?>
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

<body class='body'>
    <div class="container login bg-transparent ">
        <div class="container">
            <img id="profil" src="profil.png" alt="profil user">
        </div>
        <form method="post" >
            <div class="form-group">
                <label for="">UserName</label>
                <input name="username" class="form-control" type="text">
            </div>
            <div class="form-group mt-4">
                <label for="">Password</label>
                <input name="password" class="form-control" type="password">
            </div>
            <fieldset>
                <legend>Role</legend>
                <input type="radio" name="role"  value="secretaire" checked>
                <label >Secretaire</label>
                <input type="radio" name="role" value="medecin">
                <label >Medecin</label>
                <input type="radio" name="role" value="admin">
                <label >Admin</label>
            </fieldset>
            <button class="btn btn-primary mt-4" type="submit">se connecter</button>
        </form>
    </div>
   


</body>

</html>
