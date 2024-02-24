<?php
class EmployeC{

    public function show(Employe $employe)
    {
        $employetab = [
            "Nom" => $employe->getlastname(),
            "Prénom" => $employe->getfirstname(),
            "Mot de passe" => $employe->getpassword(),
            "Téléphone" => $employe->getphone(),
            "Email" => $employe->getemail(),
            "Date de naissance" => $employe->getdob()
        ];

        return $employetab;
    }



}





?>