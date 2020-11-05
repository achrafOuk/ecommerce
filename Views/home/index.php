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
<div class ="section">
<p >Lasted items </p></br>
<?php
if(isset($ProductsData))
{
    echo "<section id='Products'>";
    
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
    echo "<div class='categories'>";
    for($i=0;$i<count($categoriesNamesArray);$i++)
    {
        echo "<div class='articles'>";
        echo "<p>".$categoriesNamesArray[$i]."</br></p>";
        echo "<div class='itemsCat'>";
            for($j=0;$j<count($Products[$i]);$j++)
            {
            //print_r($Products[$i][$j]);
            echo "<article class='items'>";
            echo 
            '<img src = "data:image/png;base64,' . base64_encode( $Products[$i][$j]['1'] ) . '" width = "250px" "/>'."</br>";
            echo "<a href='/item/".$Products[$i][$j]['0']."'>".
            $Products[$i][$j]['2']."</a></br>";

            echo "<div id ='price'>".$Products[$i][$j]['3']." DH"."</div></br>";
            echo "<button class='buyitem'>buy item</button>";
            echo "</article> ";
            }
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    echo "</section>";

}
?>
</div>

<?php
include_once $includes."footer.php";

?>
</body>
</html>