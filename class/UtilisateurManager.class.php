<?php

class UtilisateurManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function add(Utilisateur $Utilisateur)
   {
     $sql=$this->_db->prepare("INSERT INTO compte (nom,prenom,username,password,statut) VALUES(:nom,:prenom,:username,:password,:statut)");
     $sql->execute(array(
      "iduser"=>$Utilisateur->iduser,
      "nom"=>$Utilisateur->nom,
      "prenom"=>$Utilisateur->prenom,
      "username"=>$Utilisateur->username,
      "password"=>$Utilisateur->password,
      "statut"=>$Utilisateur->statut,
    ));
   }

   public function get($iduser)
   {
     $sql=$this->_db->prepare("SELECT * FROM compte WHERE iduser=?");
     $sql->execute(array($iduser));
     $row=$sql->fetch();
     $sql->closeCursor();
     $Util=new Utilisateur($row);
     return $Util;
   }

   public function delete($iduser)
   {
       $sql=$this->_db->prepare("DELETE FROM compte WHERE iduser=?");
       $sql->execute(array($iduser));
   }
   
   public function liste()
   {
     $Util=[];
     $sql=$this->_db->query("SELECT * FROM compte");
     $rows=$sql->fetchAll();
     $sql->closeCursor();
     
     foreach ($rows as $row) {
     $Util[]=new Utilisateur($row);
     }
     return $Util;
   }

   
 public function edit(Utilisateur $Utilisateur)
   {
     try{ 
            $sql=$this->_db->prepare("UPDATE compte SET iduser=:iduser, nom=:nom, prenom=:prenom, username=:username, password=:password, statut=:statut WHERE iduser=:iduser");
            $sql->execute(array(
            "iduser"=>$Utilisateur->iduser,
            "nom"=>$Utilisateur->nom,
            "prenom"=>$Utilisateur->prenom,
            "username"=>$Utilisateur->username,
            "password"=>$Utilisateur->password,
            "statut"=>$Utilisateur->statut));  

     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }
}