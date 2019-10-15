<?php
class db{


    public function connectDb($user="webroot",$pass="192797"){
        return  new  pdo("mysql:host=localhost;dbname=rv",$user,$pass) ;
      }
      
        public   function dump($r){
            echo "<pre>";
            var_dump($r);
            echo "<pre>";
            
        }
}