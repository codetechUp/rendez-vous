<?php

class Secretaire{

    public static function connectDb(){
        return  new  pdo("mysql:host=localhost;dbname=rv","webroot","192797") ;
      }

    public function login($username){
        $sql="SELECT id_secret,id_fonction,password FROM secretaires WHERE username=?";
        $req=Secretaire::connectDb()->prepare($sql);
        $wi=$req->execute(array($username));
        $res=$req->fetch(PDO::FETCH_ASSOC);
        if($res){
            if($res['password']==$_POST["password"]){
                session_start();
                $_SESSION['id']=$res["id_secret"];
                $_SESSION['username']=$username;
                $_SESSION['id_fonction']=$res['id_fonction'];
            }else{
                echo "Mot de passe non valide";
            }
        }else{
            header("location:login.php");
        }


    }
    
      
        public   function dump($r){
            echo "<pre>";
            var_dump($r);
            echo "<pre>";
            
        }
    
}
?>