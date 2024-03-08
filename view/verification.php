<?php
require_once '../model/employe.php';
require_once '../controller/employeC.php';
$id = $_POST['id'];
$nom = $_POST['first_name'];
$prenom = $_POST['last_name'];
$mot_de_passe = $_POST['password'];
$telephone = $_POST['phone'];
$email = $_POST['email']; 
$date_de_naissance = $_POST['date_of_birth'];


$employe=new Employe($id,$nom,$prenom,$mot_depasse,$telephone,$email,$date_de_naissance);
$emplo=new EmployeC();
$emplo->showEmploye($employe);
?>