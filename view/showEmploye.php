<?php
require_once '../model/Employe.php';
require_once '../controller/employeC.php';

$employe1 = new Employe('Dupont', 'Pierre', 'pwd123', '0601020304', 'pierre.dupont@gmail.com', '1985-05-15');

var_dump($employe1);


$employeC = new EmployeC();
$employeC->show($employe1);