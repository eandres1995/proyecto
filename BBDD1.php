<html>
<head>
<title>Ejercicio 1</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<?php
$servername="localhost";
$username="alex";
$password="JawdqYqZ48RbeATX";
//$username="root";
//$password="toor";
$BBDD="login-user";


//obrïm connexió

$con=new mysqli($servername, $username, $password, $BBDD);

if($con->connect_error){
	die("Fallada de connexió");
}
$sql="SELECT id, nom, cognom, login, contra FROM usuaris";

$result=$con->query($sql);

echo "Numero d'usuaris: " . $result->num_rows. "<br>";

while($row = $result->fetch_assoc())
{

	echo "id: " . $row["id"] . ", ";
	echo "nom: " . $row["nom"] . ", ";
	echo "cognom: " . $row["cognom"] . ", ";
	echo "login: " . $row["login"] . ", ";
	echo "contra: " . $row["contra"] . "<br>";
}

$con->close();

?>