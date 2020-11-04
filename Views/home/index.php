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
<p>Home page</p>

<?php
include_once $includes."footer.php";

?>
</body>
</html>