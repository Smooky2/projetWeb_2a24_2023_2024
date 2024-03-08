<?php

class Employe
{
    private $id;
    private $lastname;
    private $firstName; 
    private $password;
    private $phone;
    private $email;
    private $dOB;

    public function getid()
    {
        return $this->id;
    }
    public function setid($a)
    {
        $this->id=$a;
    }
    public function getlastname()
    {
        return $this->lastname;
    }
    public function setlastname($a)
    {
        $this->lastname=$a;
    }
    public function getfirstname()
    {
        return $this->firstName;
    }
    public function setfirstname($a)
    {
        $this->firstName=$a;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setpassword($a)
    {
        $this->password=$a;
    }
    public function getphone()
    {
        return $this->phone;
    }
    public function setphone($a)
    {
        $this->phone=$a;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function setemail($a)
    {
        $this->email=$a;
    }
    public function getdob()
    {
        return $this->dOB;
    }
    public function setdob($a)
    {
        $this->dOB=$a;
    }

   /* public function__construct()
    {   
    $this->lastname="";
    $this->firstName=""; 
    $this->password="";
    $this->phone="";
    $this->email="";
    $this->dOB="";

    }*/
    public function __construct($a,$b,$c,$d,$e,$f)
    {   
    $this->lastname=$a;
    $this->firstName=$b; 
    $this->password=$c;
    $this->phone=$d;
    $this->email=$e;
    $this->dOB=$f;

    }
    public function afficher()
    {
        echo "Nom : ". $this->lastname . "<br>";
        echo "Prénom : ". $this->firstName ."<br>";
        echo "Mot de passe : ". $this->password ."<br>";
        echo "Téléphone : ". $this->phone ."<br>";
        echo "Email : ". $this->email ."<br>";
        echo "Date de naissance : ". $this->dOB;

    }

}



?>