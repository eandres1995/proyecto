 <?php if($_COOKIE["cookierol"]=="admin"){ ?>
    <html><head>
    <style>
    header {
        border: solid 1px red; height: 100px;
     }
    nav {
        border: solid 1px blue;
     }
     nav div	{
        width: 75%;
        float: left;
        margin: 0 auto;
    //	border: solid 1px black;
        height: 5em
        outline:none
     }

     nav div:last-child	{
        width: 25%;
        float: right;
        margin: 0 auto;
    //	border: solid 1px yellow;
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
        <a href="index-user-admin.php">Enlace uno</a>
        <a href="#">Enlace dos</a>
        <a href="#">Enlace tres</a>


    </div>


    <div>

    <?php
    if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
            echo "<h4>";
            echo "Usuari: " . $_COOKIE["cookieusuario"] . " ";
            echo "Rol: " . $_COOKIE["cookierol"] . "</h4>";
    }


    else
    {
            echo "<h4>";
            echo "Usuari no identificat.";
            echo "</h4>";
    }
    ?>
    </div>
    <div>
    <?php
    if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
    echo "<form action=\"logout.php\" method=\"post\">";
    echo            "<input type=\"submit\" value=\"logout\">";
    echo            "</form>";

    }
    else{
    echo "<form action=\"login.php\" method=\"post\">";
    echo            "Nombre a consultar: <input type=\"txt\" name=\"nombre\"><br>";
    echo            "Password: <input type=\"password\" name=\"password\"><br>";
    echo            "<input type=\"submit\" value=\"inicia\">";
    echo            "</form>";
    }
    ?>
    </div>
    </nav>

    <main>
    <p>
    When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</p>
    <p>
    Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</p>
    <p>
    So; Session variables hold information about one single user, and are available to all pages in one application.</p>

    </main>
    <footer>
    DESCRIPCION DEL PROYECTO : MEMBERS YO :V
    </footer>

    </body>
    </html>
<?php }elseif($_COOKIE["cookierol"]=="editor"){ ?>
 <html><head>
     <style>
         header {
             border: solid 1px red; height: 100px;
         }
         nav {
             border: solid 1px blue;
         }
         nav div	{
             width: 75%;
             float: left;
             margin: 0 auto;
         //	border: solid 1px black;
             height: 5em
             outline:none
         }

         nav div:last-child	{
             width: 25%;
             float: right;
             margin: 0 auto;
         //	border: solid 1px yellow;
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
         <a href="#">Enlace uno</a>
         <a href="#">Enlace dos</a>


     </div>


     <div>

         <?php
         if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
             echo "<h4>";
             echo "Usuari: " . $_COOKIE["cookieusuario"] . " ";
             echo "Rol: " . $_COOKIE["cookierol"] . "</h4>";
         }


         else
         {
             echo "<h4>";
             echo "Usuari no identificat.";
             echo "</h4>";
         }
         ?>
     </div>
     <div>
         <?php
         if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
             echo "<form action=\"logout.php\" method=\"post\">";
             echo            "<input type=\"submit\" value=\"logout\">";
             echo            "</form>";

         }
         else{
             echo "<form action=\"login.php\" method=\"post\">";
             echo            "Nombre a consultar: <input type=\"txt\" name=\"nombre\"><br>";
             echo            "Password: <input type=\"password\" name=\"password\"><br>";
             echo            "<input type=\"submit\" value=\"inicia\">";
             echo            "</form>";
         }
         ?>
     </div>
 </nav>

 <main>
     <p>
         When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</p>
     <p>
         Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</p>
     <p>
         So; Session variables hold information about one single user, and are available to all pages in one application.</p>

 </main>
 <footer>
     DESCRIPCION DEL PROYECTO : MEMBERS YO :V
 </footer>

 </body>
 </html>
<?php }elseif($_COOKIE["cookierol"]=="usuario"){ ?>
 <html><head>
     <style>
         header {
             border: solid 1px red; height: 100px;
         }
         nav {
             border: solid 1px blue;
         }
         nav div	{
             width: 75%;
             float: left;
             margin: 0 auto;
         //	border: solid 1px black;
             height: 5em
             outline:none
         }

         nav div:last-child	{
             width: 25%;
             float: right;
             margin: 0 auto;
         //	border: solid 1px yellow;
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
         <a href="#">Enlace uno</a>


     </div>


     <div>

         <?php
         if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
             echo "<h4>";
             echo "Usuari: " . $_COOKIE["cookieusuario"] . " ";
             echo "Rol: " . $_COOKIE["cookierol"] . "</h4>";
         }


         else
         {
             echo "<h4>";
             echo "Usuari no identificat.";
             echo "</h4>";
         }
         ?>
     </div>
     <div>
         <?php
         if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
             echo "<form action=\"logout.php\" method=\"post\">";
             echo            "<input type=\"submit\" value=\"logout\">";
             echo            "</form>";

         }
         else{
             echo "<form action=\"login.php\" method=\"post\">";
             echo            "Nombre a consultar: <input type=\"txt\" name=\"nombre\"><br>";
             echo            "Password: <input type=\"password\" name=\"password\"><br>";
             echo            "<input type=\"submit\" value=\"inicia\">";
             echo            "</form>";
         }
         ?>
     </div>
 </nav>

 <main>
     <p>
         When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</p>
     <p>
         Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</p>
     <p>
         So; Session variables hold information about one single user, and are available to all pages in one application.</p>

 </main>
 <footer>
     DESCRIPCION DEL PROYECTO : MEMBERS YO :V
 </footer>

 </body>
 </html>
 <?php }else{ ?>
 <html><head>
     <style>
         header {
             border: solid 1px red; height: 100px;
         }
         nav {
             border: solid 1px blue;
         }
         nav div	{
             width: 75%;
             float: left;
             margin: 0 auto;
         //	border: solid 1px black;
             height: 5em
             outline:none
         }

         nav div:last-child	{
             width: 25%;
             float: right;
             margin: 0 auto;
         //	border: solid 1px yellow;
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

         <?php
         if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
             echo "<h4>";
             echo "Usuari: " . $_COOKIE["cookieusuario"] . " ";
             echo "Rol: " . $_COOKIE["cookierol"] . "</h4>";
         }


         else
         {
             echo "<h4>";
             echo "Usuari no identificat.";
             echo "</h4>";
         }
         ?>
     </div>
     <div>
         <?php
         if(isset($_COOKIE["cookieusuario"])&& isset($_COOKIE["cookierol"])){
             echo "<form action=\"logout.php\" method=\"post\">";
             echo            "<input type=\"submit\" value=\"logout\">";
             echo            "</form>";

         }
         else{
             echo "<form action=\"login.php\" method=\"post\">";
             echo            "Nombre a consultar: <input type=\"txt\" name=\"nombre\"><br>";
             echo            "Password: <input type=\"password\" name=\"password\"><br>";
             echo            "<input type=\"submit\" value=\"inicia\">";
             echo            "</form>";
         }
         ?>
     </div>
 </nav>

 <main>
     <p>
         When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.</p>
     <p>
         Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.</p>
     <p>
         So; Session variables hold information about one single user, and are available to all pages in one application.</p>

 </main>
 <footer>
     DESCRIPCION DEL PROYECTO : MEMBERS YO :V
 </footer>

 </body>
 </html>
 <?php } ?>
