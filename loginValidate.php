<html>
<head>
</head>
<body>
<?php
$servername="localhost";
$BBDD="login-user";
$username="abarranco";
$password="abarranco";

//obrïm connexió

$con=new mysqli($servername, $username, $password, $BBDD);

if($con->connect_error){
    die("Fallada de connexió");
}
$sql="SELECT nom, contra,rol FROM usuaris";

$result=$con->query($sql);

echo "Numero d'usuaris: " . $result->num_rows. "<br>";

while($row = $result->fetch_assoc())
{
    if($_POST["check_user"]==$row["login"]&&$_POST["check_password"]==$row["contra"]){
        $cookie_value=$_POST["nombre"];
        setcookie("cookieusuario", $cookie_value, time() + (86400 * 30), "/");
        setcookie("cookierol", $row["rol"], time() + (86400 * 30), "/");
        header("Refresh:0;url=\"index.php\"");
    }

    echo "nom: " . $row["nom"] . ", ";
    echo "contra: " . $row["contra"] . "<br>";
}

$con->close();

?>
</body>
</html>
