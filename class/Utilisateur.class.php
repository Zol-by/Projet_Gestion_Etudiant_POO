<?php

  class Utilisateur
  {
    private $iduser; 
    private $nom;
    private $prenom;
    private $password;
    private $username	;
    private $statut; 
    
    public function __construct(array $donnee){

      foreach ($donnee as $key => $value) 
      {
        if(property_exists($this,$key))
        {
          $this->$key=$value;
        }
      }
    }

    public function __get($propriete)
    {
      if(property_exists($this,$propriete))
      { 
        return $this->$propriete;
      }
    }
          
    public function __set($propriete, $value)
    {
      if(property_exists($this,$propriete))
      { 
        $this->$propriete = $value;
      }
    }
}