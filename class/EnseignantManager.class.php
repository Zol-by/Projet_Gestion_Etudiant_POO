<?php

class EnseignantManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function add(Enseignant $Enseignant)
   {
     $sql=$this->_db->prepare("INSERT INTO enseignant (IdMatiere,CNIB,NomEnseignant,PrenomEnseignant,TelEnseignant,PhotoEnseignant)
     
     VALUES(:IdMatiere,:CNIB,:NomEnseignant,:PrenomEnseignant,:TelEnseignant,:PhotoEnseignant)");
     $sql->execute(array(
      "IdMatiere"=>$Enseignant->IdMatiere,
      "CNIB"=>$Enseignant->CNIB,
      "NomEnseignant"=>$Enseignant->NomEnseignant,
      "PrenomEnseignant"=>$Enseignant->PrenomEnseignant,
      "TelEnseignant"=>$Enseignant->TelEnseignant,
      "PhotoEnseignant"=>$Enseignant->PhotoEnseignant,
    ));
   }

   public function get($IdEnseignant)
   {
     $sql=$this->_db->prepare("SELECT * FROM enseignant WHERE IdEnseignant=?");
     $sql->execute(array($IdEnseignant));
     $row=$sql->fetch();
     $sql->closeCursor();
     $ensei=new Enseignant($row);
     return $ensei;
   }

   public function delete($IdEnseignant)
   {
       $sql=$this->_db->prepare("DELETE FROM enseignant WHERE IdEnseignant=?");
       $sql->execute(array($IdEnseignant));
   }

   public function liste()
   {
     $ensei=[];
     $sql=$this->_db->query("SELECT * FROM enseignant");
     $rows=$sql->fetchAll();
     $sql->closeCursor();

     foreach ($rows as $row){
     $ensei[]=new Enseignant($row);
     }
     return $ensei;
   }

   public function edit(Enseignant $Enseignant)
   {
     try{ 
            $sql=$this->_db->prepare("UPDATE enseignant SET IdMatiere=:IdMatiere, NomEnseignant=:NomEnseignant, PrenomEnseignant=:PrenomEnseignant, 
            
            TelEnseignant=:TelEnseignant, CNIB=:CNIB, PhotoEnseignant=:PhotoEnseignant WHERE IdEnseignant=:IdEnseignant");

            $sql->execute(array(
            "IdEnseignant"=>$Enseignant->IdEnseignant,
            "IdMatiere"=>$Enseignant->IdMatiere,
            "NomEnseignant"=>$Enseignant->NomEnseignant,
            "PrenomEnseignant"=>$Enseignant->PrenomEnseignant,
            "TelEnseignant"=>$Enseignant->TelEnseignant,
            "CNIB"=>$Enseignant->CNIB,
            "PhotoEnseignant"=>$Enseignant->PhotoEnseignant
        ));  

     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }


}
