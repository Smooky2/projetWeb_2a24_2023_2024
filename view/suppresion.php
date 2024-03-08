<?php
require_once '../model/employe.php';
require_once '../controller/employeC.php';
$employeC = new EmployeC();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sup = $employeC->deleteEmploye($id);
}
?>
<html>
<head>	<title>SUP</title>
</head>
<body>
	<h1>SUPPRESION</h1>
    <form method="POST" action="suppresion.php">
    	<label for="id">id:</label>
	<input type="text" id="id" name="id" required><br><br>
    <input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</form>
</body>
</html>







