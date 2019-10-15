<?php
session_start();
require 'm/db.php';
?>
<?php if($_SESSION): ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body class="body">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item text-primary ">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">ajout de patient</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="atente.php">les rvs entente</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">les rvs confirmés</a>
                </li>
            </ul>
        </div>
</nav>
    
</body>
</html>
<?php else : ?>
<?php header("location:login.php"); ?>
<?php endif ?>