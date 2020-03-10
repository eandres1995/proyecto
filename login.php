<html lang="es">
<head>
<style>
header {
        border: solid 1px red; height: 100px;
 }
nav {
        border: solid 1px blue;
 }
 nav div        {
        width: 75%;
        float: left;
        margin: 0 auto;
//      border: solid 1px black;
        height: 5em
        outline:none
 }

 nav div:last-child     {
        width: 25%;
        float: right;
        margin: 0 auto;
//      border: solid 1px yellow;
        height: 5em
        outline:none
        text-align:right

 }

 footer {
        border: solid 1px green;
 }
 main {
        border: solid 1px yellow;
        clear: both
 }
</style>
<meta charset="UTF-8">
<title>Mi Proyecto</title>
</head>
<body>
<header> hello world</header>

<nav>
<div>
        <a href="enlace1">Enlace uno</a>
        <a href="enlace2">Enlace dos</a>
        <a href="enlace3">Enlace tres</a>


<form action="login.php" method="post">
Nombre a consultar: <input type="txt" name="nombre"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="inicia">
</form>
</div>
<div>
Verificando
</div>
</nav>

<main>

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
if($_POST["nombre"]==$row["nom"]&&$_POST["password"]==$row["contra"]){
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




</main>

<footer>

</body>
</html>


</body> 
</html>
