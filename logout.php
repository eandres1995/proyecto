<html>
<head>
</head>
<body>
<?php
setcookie("cookierol","",time() - 144000, "/");
setcookie("cookieusuario","",time() - 144000, "/");
header("Location: index.php");
?>
</body>
</html>