<?php
require_once '../model/employe.php';
require_once '../controller/employeC.php';

$nom = $_POST['first_name'];
$prenom = $_POST['last_name'];
$mot_de_passe = $_POST['password'];
$telephone = $_POST['phone'];
$email = $_POST['email'];
$date_de_naissance = $_POST['date_of_birth'];


$employe1 = new Employe($nom, $prenom, $mot_de_passe, $telephone, $email, $date_de_naissance);


//var_dump($employe1);


$employeC = new EmployeC();

$tab=$employeC->show($employe1);

print_r($tab);
?>