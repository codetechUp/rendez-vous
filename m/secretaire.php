<?php
class Secretaire extends db{

  

    public function login($username){
        $sql="SELECT id_secret,id_fonction,password FROM secretaires WHERE username=?";
        $req=$this->connectDb()->prepare($sql);
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
   
}
?>