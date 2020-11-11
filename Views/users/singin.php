<html>
<head>
<title>
    Store - Home page
</title>
<?php
$includes = dirname(__DIR__).DIRECTORY_SEPARATOR ."components".DIRECTORY_SEPARATOR ;
$navbar = $includes . "bootstrap.php";
include_once $navbar;
?>
<head>
<body>
<?php
include_once $includes."navbar.php";

?>
<section id="SinginForm">

<p>Singin page</p>
<form id="singinForm" method="Post">
Username:
<input type="text" id="loginLogin" name="loginLogin">
Email:
<input type="email" id="EmailLogin" name="EmailLogin">
Password:
<input type="password" id="passwordLogin" name="passwordLogin">

<input type="submit" id="submitLogin" name="signinSubmit" value="singin">
<section id="singinDirct">
If you have a compte <a href="/user/login">login</a>
</section>
</form>
</section>


<?php
include_once $includes."footer.php";

?>
</body>
</html>