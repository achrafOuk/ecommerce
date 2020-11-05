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

<?php
if(isset($ProductData))
{
    echo "<section id='product'>";
    echo "<div id='itemTitle'> ".$ProductData[0]['2'].'</div>'."</br>";
?>

<?php
    echo 
        '<img src = "data:image/png;base64,' . base64_encode( $ProductData[0]['1'] ) . '" width = "250px" height = "250px"/>'."</br>";
?>

<?php  
    echo "<div id='itemPrice'> ".$ProductData[0]['3']." DH"."</div>"."</br>";
    echo "Details:"."</br>";
    echo $ProductData[0]['4']."</br>";
    echo "<button id='buyitem'>buy item</button>";
echo "</section>";
}
?>


<?php
if(isset($ProductsData))
{
    echo "<section id='products'>";
    for($i=0;$i<count($ProductsData);$i++)
    {
        echo "<article class='item'>";
        echo 
        '<img src = "data:image/png;base64,' . base64_encode( $ProductsData[$i]['1'] ) . '" width = "250px" "/>'."</br>";
        echo "<a href='/item/".$ProductsData[$i]['0']."'>".
        $ProductsData[$i]['2']."</a></br>";

        echo "<div id ='price'>".$ProductsData[$i]['3']." DH"."</div></br>";
        echo "<button class='buyitem'>buy item</button>";
        echo "</article> ";
    }
    echo "</section>";
}
?>

<?php
include_once $includes."footer.php";

?>
</body>
</html>