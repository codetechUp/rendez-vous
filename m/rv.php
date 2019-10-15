<?php
class rv{

    public static function connectDb(){
        return  new  pdo("mysql:host=localhost;dbname=rv","webroot","192797") ;
      }
      
        public   function dump($r){
            echo "<pre>";
            var_dump($r);
            echo "<pre>";
            
        }
    
      public function addRv($data){
         
        $sql="INSERT INTO rv (id_patient,domaine) VALUES(?,?)";
        $req=rv::connectDb()->prepare($sql);
        $wi=$req->execute($data);
        return $wi;
        }
        
        public function rvAtente(){
          $sql="SELECT * FROM rv WHERE  id_medecin IS NULL OR date_rv IS NULL";
          $req=rv::connectDb()->query($sql);
          $res=$req->fetchAll();
          return ($res);
         }
}