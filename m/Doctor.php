<?php

class Doctor extends db{
    
      
      
  
    public static function getRandDoctor($func){

        $sql="SELECT id_fonction FROM fonctions WHERE nom_fonction=?";
        $req=$this->connectDb()->prepare($sql);
        $req->execute(array($func));
        $resultat=$req->fetch();
        $sql="SELECT medecins.prenom,medecins.nom,fonctions.nom_fonction FROM medecins,fonctions WHERE fonctions.id_fonction=medecins.id_fonction AND fonctions.id_fonction=?";
        $req=$this->connectDb()->prepare($sql);
        $req->execute(array($resultat["id_fonction"]));
        $resultats=$req->fetchAll();
        $doctor=$resultats[array_rand($resultats,1)];
        //ca retour un array qui contient le docteur (nom,id,fonction..)
        return $doctor;
        
      }
      public function getDoctor($func){
        $sql="SELECT id_medecin,prenom,nom FROM medecins WHERE id_fonction=?";
        $req=$this->connectDb()->prepare($sql);
        $req->execute(array($func));
        $resultats=$req->fetchAll();
        return $resultats;

      }
      public function loginDoc($username){
        $sql="SELECT id_medecin,id_fonction,password FROM medecins WHERE email=?";
        $req=$this->connectDb()->prepare($sql);
        $wi=$req->execute(array($username));
        $res=$req->fetch(PDO::FETCH_ASSOC);
        if($res){
            if($res['password']==$_POST["password"]){
              echo 'entreeeeeeeeeeeeee';                
                  session_start();
                $_SESSION['id']=$res["id_medecin"];
                $_SESSION['username']=$username;
                $_SESSION['id_fonction']=$res['id_fonction'];
            }else{
                echo "Mot de passe non valide";
            }
        }else{
            header("location:login.php");
        }
      }
}