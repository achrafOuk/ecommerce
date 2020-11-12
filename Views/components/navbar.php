<nav>
<div id="siteName">
<a href="/">Store</a>
</div>
<form id="search" action="" method="get">
<input type="text" name="search" id="textsearc"/>
<select>
<option value="All">All</option>
<?php
    use  app\Models\CategoriesModel;
    $categorie = new CategoriesModel();
    $categories = $categorie->fetchAll();
    print_r($categories);
    for($i=0;$i<count($categories);$i++)
    {
        echo "<option value='{$categories[$i][1]}''>{$categories[$i][1]}</option>";
    }

?>
</select>
<input type="button" name="search" value="c" id="btnseach"/>
</form>
<div id="shart">
b
</div>
<?php
if ( empty($_SESSION['user']) ){
echo '<div id="login">';
echo '<a href ="/user/login"> Login</a>';
echo '</div>';
echo '<div id="signin">';
echo '<a href ="/user/singin"> Signin</a>';
echo '</div>';
}
else {
    echo "<form name='logout' method='Post' action='User/logout/'>";
    echo "<input type='submit' id='user' value='Logout'>";
    echo "</form>";
}

?>
</nav>

