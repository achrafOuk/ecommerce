<html>
<head>
<title>
    Store - Index page
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
<section id="product">
<?php
if(isset($ProductData))
{
    echo $ProductData[0]['2'];
?>
<article id="item">
<?php
    echo 
        '<img src = "data:image/png;base64,' . base64_encode( $ProductData[0]['1'] ) . '" width = "250px" height = "250px"/>';
    
    echo $ProductData[0]['3']." DH"."</br>";
    echo "Details:"."</br>";
    echo $ProductData[0]['4'];
}
?>
</article>
</section>
<?php
if(isset($ProductsData))
{

}
?>

<?php
include_once $includes."footer.php";

?>
</body>
</html>