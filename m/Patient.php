<?php
class Patient extends db{


 

  public function addPatient($data){
    
    $sql="INSERT INTO patients(matricule,prenom_patient,nom_patient,sexe,email,pays,adresse,telephone) VALUES(?,?,?,?,?,?,?,?)";
    $req=$this->connectDb()->prepare($sql);
    $req->execute($data);

    }
    public function findFonction(){

      $pdo = new pdo("mysql:host=localhost;dbname=rendezVous","webroot","192797");
      $req=$pdo->query("SELECT * FROM fonctions ");
      $resultats=$req->fetchAll();
      return $resultats;
      
      }
  
    
    public function getIdByMat($mat){
    
      $sql="SELECT id_patient FROM patients WHERE matricule=?";
      $req=$this->connectDb()->prepare($sql);
      $req->execute(array($mat));
      $id=$req->fetch(PDO::FETCH_ASSOC);
      return $id["id_patient"];
      }
    public function setMatricule(){
            $req=$this->connectDb()->query('SELECT matricule FROM patients ORDER BY `matricule` DESC  LIMIT 1');
            $a=$req->fetch(PDO::FETCH_ASSOC);
            if (!empty($a)) {
            $elmt=explode("-",$a["matricule"]);
            //recuperration de la partie number du matricule
            $ma=$elmt[1]+1;
            //Algorithme d incrementation
            if (($ma<10)){
              $mat="DE-0000".$ma;
            }
            if (($ma>=10 && $ma<100)) {
              $mat="DE-000".$ma;
            }
            if (($ma>=100 && $ma<1000)) {
              $mat="DE-00".$ma;
            }
            if (($ma>=1000 && $ma<10000)) {
              $mat="DE-0".$ma;
            }if (($ma>=10000 && $ma<100000)) {
              $mat="DE-".$ma;
              
            }
            return $mat;
    }else{
           $mat="DE-00001";
           return $mat;
         }
   }
}