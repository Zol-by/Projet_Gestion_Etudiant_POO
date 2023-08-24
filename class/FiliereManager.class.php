<?php

class FiliereManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function add(Filiere $Filiere)
   {
    $sql=$this->_db->prepare("INSERT INTO filieres(IdFiliere, NomFiliere, Departement, Date) VALUES(:IdFiliere,:NomFiliere,:Departement, :Date)");
    $sql->execute(array(
      "IdFiliere"=>$Filiere->IdFiliere,
      "NomFiliere"=>$Filiere->NomFiliere,
      "Departement"=>$Filiere->Departement,
      "Date"=>$Filiere->Date,
    ));
   }

   public function get($IdFiliere)
   {
     $sql=$this->_db->prepare("SELECT * FROM filieres WHERE IdFiliere=?");
     $sql->execute(array($IdFiliere));
     $row=$sql->fetch();
     $sql->closeCursor();
     $serv=new Filiere($row);
     return $serv;
   }

   public function delete($IdFiliere)
   {
       $sql=$this->_db->prepare("DELETE FROM filieres WHERE IdFiliere=?");
       $sql->execute(array($IdFiliere));
   }
   
   public function liste()
   {
     $serv=[];
     $sql=$this->_db->query("SELECT * FROM filieres");
     $rows=$sql->fetchAll();
     $sql->closeCursor();
     
     foreach ($rows as $row) {
     $serv[]=new Filiere($row);
     }
     return $serv;
   }

 public function edit(Filiere $Filiere)
   {
     try{ 
            $sql=$this->_db->prepare("UPDATE filieres SET IdFiliere=:IdFiliere, NomFiliere=:NomFiliere, Departement=:Departement, Date=:Date WHERE IdFiliere=:IdFiliere");
            $sql->execute(array(
            "IdFiliere"=>$Filiere->IdFiliere,
            "NomFiliere"=>$Filiere->NomFiliere,
            "Departement"=>$Filiere->Departement,
            "Date"=>$Filiere->Date
        ));  

     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }
}