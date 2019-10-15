<?php
class Doctor{

    public static function getRandDoctor($func){

        $sql="SELECT id_fonction FROM fonctions WHERE nom_fonction=?";
        $req=Patient::connectDb()->prepare($sql);
        $req->execute(array($func));
        $resultat=$req->fetch();
        $sql="SELECT medecins.prenom,medecins.nom,fonctions.nom_fonction FROM medecins,fonctions WHERE fonctions.id_fonction=medecins.id_fonction AND fonctions.id_fonction=?";
        $req=Patient::connectDb()->prepare($sql);
        $req->execute(array($resultat["id_fonction"]));
        $resultats=$req->fetchAll();
        $doctor=$resultats[array_rand($resultats,1)];
        //ca retour un array qui contient le docteur (nom,id,fonction..)
        return $doctor;
        
      }
     

}