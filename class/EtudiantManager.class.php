<?php

class EtudiantManager
{

  private $_db;

   public function __construct($db)
   {
       $this->_db=$db;
   }

   public function add(Etudiant $Etudiant)
   {
     $sql=$this->_db->prepare("INSERT INTO etudiant (IdFiliere,NomEtudiant,PrenomEtudiant,TelEtudiant,PaysEtudiant,PhotoEtudiant)
     
     VALUES(:IdFiliere,:NomEtudiant,:PrenomEtudiant,:TelEtudiant,:PaysEtudiant,:PhotoEtudiant)");
     $sql->execute(array(
      "IdFiliere"=>$Etudiant->IdFiliere,
      "NomEtudiant"=>$Etudiant->NomEtudiant,
      "PrenomEtudiant"=>$Etudiant->PrenomEtudiant,
      "TelEtudiant"=>$Etudiant->TelEtudiant,
      "PaysEtudiant"=>$Etudiant->PaysEtudiant,
      "PhotoEtudiant"=>$Etudiant->PhotoEtudiant,
    ));
   }

   public function get($IdEtudiant)
   {
     $sql=$this->_db->prepare("SELECT * FROM etudiant WHERE IdEtudiant=?");
     $sql->execute(array($IdEtudiant));
     $row=$sql->fetch();
     $sql->closeCursor();
     $etud=new Etudiant($row);
     return $etud;
   }

   public function delete($IdEtudiant)
   {
       $sql=$this->_db->prepare("DELETE FROM etudiant WHERE IdEtudiant=?");
       $sql->execute(array($IdEtudiant));
   }

   public function liste()
   {
     $etud=[];
     $sql=$this->_db->query("SELECT * FROM etudiant");
     $rows=$sql->fetchAll();
     $sql->closeCursor();

     foreach ($rows as $row){
     $etud[]=new Etudiant($row);
     }
     return $etud;
   }

   public function edit(Etudiant $Etudiant)
   {
     try{ 
            $sql=$this->_db->prepare("UPDATE etudiant SET IdFiliere=:IdFiliere, NomEtudiant=:NomEtudiant, PrenomEtudiant=:PrenomEtudiant, TelEtudiant=:TelEtudiant WHERE IdEtudiant=:IdEtudiant");
            $sql->execute(array(
            "IdEtudiant"=>$Etudiant->IdEtudiant,
            "IdFiliere"=>$Etudiant->IdFiliere,
            "NomEtudiant"=>$Etudiant->NomEtudiant,
            "PrenomEtudiant"=>$Etudiant->PrenomEtudiant,
            "TelEtudiant"=>$Etudiant->TelEtudiant
        ));  

     } catch (Exception $ex) {
         echo $ex->getMessage();
     }
   }


}
