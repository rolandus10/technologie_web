<?php

class Reservation
{
      private $pays;
      private $nbplace;

      
      public function __construct($pays, $nbplace)
      {
            $this->pays = $pays;
            $this->nbplace = $nbplace;
      }
      public function getDestination()
      {
            return $this->pays;
      }
      public function setDastination($value)
      {
            $this->pays = $value;
      }
      public function getNbplace()
      {
            return $this->nbplace;
      }
      public function setNbplace($value)
      {
            $this->nbplace = $value;
      }
}
class Passager
{
       private $name;
       private $prenom;
       private $age;

       public function __construct ($name,$prenom,$age)
       {
            $this->name = $name;
            $this->prenom = $prenom;
            $this->age = $age;
       }
       public function getName()
       {
            return $this->name;
       }
       public function getPrenom()
       {
            return $this->prenom;
       }
       public function getAge()
       {
            return $this->age;
       }
       public function setName($name)
       {
            $this->name = $name;
       }
       public function setPrenom($prenom)
       {
            $this->prenom = $prenom;
       }
       public function setAge($age)
       {
            $this->age = $age;
       }
}

?>