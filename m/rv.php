<?php

class rv extends db{
    
      public function addRv($data){
         
        $sql="INSERT INTO rv (id_patient,domaine) VALUES(?,?)";
        $req=$this->connectDb()->prepare($sql);
        $wi=$req->execute($data);
        return $wi;
        }
        
        public function rvAtente(){
          $sql="SELECT * FROM rv WHERE  id_medecin IS NULL OR date_rv IS NULL OR id_medecin IS  NULL ";
          $req=$this->connectDb()->query($sql);
          $res=$req->fetchAll();
          return ($res);
         }
         public function dateRv($id){
          $sql="SELECT date_rv FROM rv WHERE  id_rv=?";
          $req=$this->connectDb()->prepare($sql);
          $res=$req->execute(array($id));
          $res=$req->fetch(PDO::FETCH_ASSOC); 
          return $res;
         }
         public function heure($id){
          $sql="SELECT id_heure FROM rv WHERE  id_rv=?";
          $req=$this->connectDb()->prepare($sql);
          $res=$req->execute(array($id));
          $res=$req->fetch(PDO::FETCH_ASSOC); 
          return $res;
         }
         public function heureRv($date,$id){
                  $sql="UPDATE rv SET date_rv=? WHERE id_rv=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($date,$id));
                  $sql="SELECT id_heure FROM rv WHERE date_rv=? AND id_rv=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($date,$id));
                  $res=$req->fetch(PDO::FETCH_ASSOC);
                  if($res["id_heure"]!=NULL){
                    $sql="SELECT heureRv FROM heureRv WHERE id_heure=?";
                    $req=$this->connectDb()->prepare($sql);
                    $req->execute(array($res["id_heure"]));
                    $res=$req->fetch(PDO::FETCH_ASSOC);
                    return $res["heureRv"];

                  }else{
                    $sql="SELECT id_heure FROM rv WHERE date_rv=?  AND id_heure IS NOT NULL";
                    $req=$this->connectDb()->prepare($sql);
                    $req->execute(array($date));
                    $res1=$req->fetchAll();
                    $sql="SELECT * FROM heureRv ";
                    $req=$this->connectDb()->query($sql);
                    $res2=$req->fetchAll();
                    if($res1){
                      return (array_diff_key($res2,$res1));
                    }else{
                      return $res2;
                    }
                   
                  }
              }
              public function MedecinDispo($date,$id_heure,$id_fonction,$id){

                  $sql="SELECT id_medecin FROM rv WHERE date_rv=? AND id_heure=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($date,$id_heure));
                  $res1=$req->fetchAll();
                  if($res1!=NULL){
                  $sql="SELECT id_medecin FROM medecins WHERE id_fonction=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($id_fonction));
                  $res2=$req->fetchAll();
                  $sql="UPDATE rv SET id_heure=? WHERE id_rv=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($id_heure,$id));
                  return array_diff_key($res2,$res1);
                 }else{
                  $sql="SELECT id_medecin,prenom,nom FROM medecins WHERE id_fonction=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($id_fonction));
                  $res2=$req->fetchAll();
                  $sql="UPDATE rv SET id_heure=? WHERE id_rv=?";
                  $req=$this->connectDb()->prepare($sql);
                  $req->execute(array($id_heure,$id));
                  return $res2;
                 }
                 
              }
              public function setMedecin($id_medecin,$id){
                $sql="UPDATE rv SET id_medecin=? WHERE id_rv=?";
                $req=$this->connectDb()->prepare($sql);
                $req->execute(array($id_medecin,$id));
              }
              public function medecinRv($id_medecin){
                $sql="SELECT * FROM rv WHERE id_medecin=?";
                $req=$this->connectDb()->prepare($sql);
                $req->execute(array($id_medecin));
                $res=$req->fetchAll();
                return $res;

              }
}