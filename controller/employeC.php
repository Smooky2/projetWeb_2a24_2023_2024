<?php
require_once '../config.php';
class EmployeC{

    public function showEmploye($employe) {
        echo '<table border=1 width="100%">
            <tr align="center">
                <td>Last Name</td>
                <td>First Name</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Date of Birth</td>
            </tr>
            <tr>
                <td>'. $employe->getLastName() .'</td>
                <td>'. $employe->getFirstName() .'</td>
                <td>'. $employe->getPhone() .'</td>
                <td>'. $employe->getEmail() .'</td>
                <td>'. $employe->getDOB() .'</td>
            </tr>
        </table>';
    }
    public function listEmploye()
    {
        $req='SELECT * FROM employe';
        $db=config::getConnexion();
        try {
            $liste = $db->query($req);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
}
public function deleteEmploye(int $id){
    $sql='DELETE FROM employe WHERE id=:id';
    $db=config::getConnction();
    try
    {
        $query=$db->prepare($sql);
        $query->blindParam(1,$id,PDO::PARAM_INT);
        $query->execute();


    }
    catch(Exeption $e)
    {
        die('ERROR :'.$e->getMessage());
    }
}
/*public function ajout(Employe $employe)
{
    $sql="INSERT INTO Employe (id,"



}*/



}




?>