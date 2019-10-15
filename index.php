<?php 
require ('m/db.php');
require("m/classe.php");
require("m/Patient.php");
//Attribution automatique du matricule;
$p=new Patient();
$mat=$p->setMatricule();
$resultats=$p->findFonction();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.js"></script>
    <script src="app.js"></script>
    <title>Gestion de rendez-vous</title>
</head>
<body class="patient" >
<div id="no" class="mt-5 no bg-danger">
    <p>Bienvenue !</p>
    <p>Voici le formulaire pour faire votre de Rendez-vous </p>
    <p>cliquez sur le boutton et remplissez le formilaire </p>
    <button id="cacher" class="btn btn-primary">cliquez</button>
</div>
    <div id="d" class="container forme">
        <form class="contenu " action="dm.php?m=<?= $mat ?>" method="post" >
            <div class="form-group pt-2 ">
                <label>Matricule</label>
                <input  disabled="true" value="<?= $mat ?>"  name="matricule"  type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input name="prenom" type="text" class="form-control" placeholder="Votre Prenom">
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom"  class="form-control" placeholder="Votre Nom">
            </div>
            <fieldset>
                <legend>Sexe</legend>
                <input type="radio"  name="sexe" value="Mr">
                <label >Masculin</label>
                <input type="radio" name="sexe" value="Mme">
                <label >Feminin</label>
            </fieldset>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"  class="form-control" placeholder="Votre Email">

            </div>
            <div class="form-group">
                <label>Addresse</label>
                <input name="addresse"  type="text" class="form-control" placeholder="Votre Addresse">

            </div>
            <div class="form-group">
                <label>Pays</label>
                <select name="pays" id="select" class="form-control" id="exampleFormControlSelect1">
                      <option value="Senegal">Sénégal</option>
                      <option value="Mali">Mali</option>
                      <option value="Gambie">Gambie</option>
                      <option value="Guinée Bissau">Guinée Bissau</option>
                      <option value="Mauritanie">Mauritanie</option>
                      <option value="Guinée Konacky">Guinée Konacky</option>
                    </select>
            </div>

            <div class="form-group ">
                <label>Telephone</label>
                <div class="row">
                    <div class="col-2 ">  
                        <select class="form-control" name="indicatif" id="">
                            <option id="tel" value="">+221</option>
                        </select>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10"> 
                        <input class="form-control" name="telephone" type="number" placeholder="Votre Numero de telephone..">
                </div>
                
            </div>
            <div class="form-group">
                <label>Type de rendez-vous </label>
                <select name="fonction" class="form-control" id="exampleFormControlSelect1">
                    <?php foreach($resultats as $resultat): ?>
                      <option value="<?= $resultat["nom_fonction"] ?>"><?= $resultat["nom_fonction"] ?></option>
                    <?php endforeach ?>
                    </select>
            </div>
            <button class="btn btn-primary mb-3" type="submit">ENVOYER</button>
        </form>
    </div>

</body>

</html>
