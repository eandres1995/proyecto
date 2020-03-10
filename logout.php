<!DOCTYPE html>

<?php
// set the expiration date to one hour ago
setcookie("cookieusuario",$cookie_value, time() - 3600);
setcookie("cookierol",$row["rol"], time() - 3600);
header("Refresh:0;url=\"index.php\"");

?>
<html>
<body>
</body>
</html>
