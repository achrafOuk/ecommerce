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
$str = dirname(__DIR__)."../../Controllers/UserController.php";
?>
<section id="loginForm">

<p>Login page</p>
<form id="loginForm" method="Post">
Email or username:
<input type="text" id="loginLogin" name="loginLogin">
Password:
<input type="password" id="passwordLogin" name="passwordLogin">

<input type="submit" id="submitLogin" name="loginSubmit" value="login">
<section id="singinDirct">
If you don't have a compte <a href="/user/singin">sign up</a>
</section>
</form>
</section>


<?php
include_once $includes."footer.php";

?>
</body>
</html>