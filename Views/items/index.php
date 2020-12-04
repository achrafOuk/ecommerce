<html>
<head>
<title>
    Store - Items page
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
    echo "<div id='itemTitle'> ".utf8_encode($ProductData[0]['2']).'</div>'."</br>";
    echo 
        '<img src = "data:image/png;base64,' . base64_encode( $ProductData[0]['1'] ) . '" width = "250px" height = "250px"/>'."</br>";
    echo "<div id='itemPrice'> ".$ProductData[0]['3']." DH"."</div>"."</br>";
    echo "Details:"."</br>";
    echo utf8_encode( $ProductData[0]['4'] )."</br>";
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
        utf8_encode($ProductsData[$i]['2'])."</a></br>";
        echo "<div id ='price'>".$ProductsData[$i]['3']." DH"."</div></br>";
        echo "<button class='buyitems'>b</button>";
        echo "</article> ";
    }
    echo "</section>";
    
    if( isset($pages_num) )
    {
        $preveiw = $page-1;
        $next = $page+1;
        echo "<div id='pagination'>";
         if($page!= 1) echo "<a class='page-link' href='/item/page/{$preveiw}'>Previous</a>";
        for($i=1;$i<=$pages_num;$i++)
        {
            echo "<a href='/item/page/2'>{$i}</a>";
        }
        if($page!= $pages_num) echo "<a class='page-link' href='/item/page/{$next}'>Next</a>";
        echo "</div>";
        
    }
   
}
if(isset($_COOKIE))
{
    print_r($_COOKIE);
}
?>
<?php
include_once $includes."footer.php";
?>

</body>
<script src="/js/js.js"></script>
</html>