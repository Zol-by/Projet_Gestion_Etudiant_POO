<?php

class MatiereManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function add(Matiere $Matiere)
   {
    $sql=$this->_db->prepare("INSERT INTO filieres(IdMatiere, NomMatiere, NiveauEtude, DateMatiere) VALUES(:IdMatiere,:NomMatiere,:NiveauEtude, :DateMatiere)");
    $sql->execute(array(
      "IdMatiere"=>$Matiere->IdMatiere,
      "NomMatiere"=>$Matiere->NomMatiere,
      "NiveauEtude"=>$Matiere->NiveauEtude,
      "DateMatiere"=>$Matiere->DateMatiere,
    ));
   }

   public function get($IdMatiere)
   {
     $sql=$this->_db->prepare("SELECT * FROM  matiere WHERE IdMatiere=?");
     $sql->execute(array($IdMatiere));
     $row=$sql->fetch();
     $sql->closeCursor();
     $matier=new Matiere($row);
     return $matier;
   }

   public function delete($IdMatiere)
   {
       $sql=$this->_db->prepare("DELETE FROM  matiere WHERE IdMatiere=?");
       $sql->execute(array($IdMatiere));
   }
   
   public function liste()
   {
     $matier=[];
     $sql=$this->_db->query("SELECT * FROM  matiere");
     $rows=$sql->fetchAll();
     $sql->closeCursor();
     
     foreach ($rows as $row) {
     $matier[]=new Matiere($row);
     }
     return $matier;
   }

 public function edit(Matiere $Matiere)
   {
     try{ 
            $sql=$this->_db->prepare("UPDATE  matiere SET IdMatiere=:IdMatiere, NomMatiere=:NomMatiere, NiveauEtude=:NiveauEtude, DateMatiere=:DateMatiere WHERE IdMatiere=:IdMatiere");
            $sql->execute(array(
            "IdMatiere"=>$Matiere->IdMatiere,
            "NomMatiere"=>$Matiere->NomMatiere,
            "NiveauEtude"=>$Matiere->NiveauEtude,
            "DateMatiere"=>$Matiere->DateMatiere
        ));  

     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }
}