<?php
class Patient{


  public static function connectDb(){
    return  new  pdo("mysql:host=localhost;dbname=rv","webroot","192797") ;
  }
  
    public   function dump($r){
        echo "<pre>";
        var_dump($r);
        echo "<pre>";
        
    }

  public function addPatient($data){
    
    $sql="INSERT INTO patients(matricule,prenom_patient,nom_patient,sexe,email,pays,adresse,telephone) VALUES(?,?,?,?,?,?,?,?)";
    $req=Patient::connectDb()->prepare($sql);
    $req->execute($data);

    }
    public function getIdByMat($mat){
    
      $sql="SELECT id_patient FROM patients WHERE matricule=?";
      $req=Patient::connectDb()->prepare($sql);
      $req->execute(array($mat));
      $id=$req->fetch(PDO::FETCH_ASSOC);
      return $id["id_patient"];
      }
    public static function setMatricule(){
            $req=Patient::connectDb()->query('SELECT matricule FROM patients ORDER BY `matricule` DESC  LIMIT 1');
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