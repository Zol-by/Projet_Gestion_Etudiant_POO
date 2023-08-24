<?php

class Compte
{
private $username;
private $password;
private $_db; 

public function __construct($db)
   {
       $this->_db=$db;
   }

   public static function adm($toverif){
    $action="";

    if ($toverif=="admin") {
        $action="hidden";
    }
return $action;

}

    public static function cons($toverif){
        $action="";

        if ($toverif=="enseignant") {
            $action="hidden";
        }
    return $action;
    
    }

    public function authenticate($username,$password){
        $auth=$this->_db->prepare("SELECT * FROM compte WHERE username=:username AND password=:password");
        $auth->execute(array("username"=>$username,"password"=>$password));
        $result=$auth->fetchAll();

        if (count($result)==0) {
            return false;
        } else {
            return $result;
        }
    }
    
}



