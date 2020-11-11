<nav>
<div id="siteName">
<a href="/">Store</a>
</div>
<form id="search" action="" method="get">
<input type="text" name="search" id="textsearc"/>
<input type="button" name="search" value="c" id="btnseach"/>
</form>
<div id="shart">
b
</div>
<?php if ( empty($_SESSION['user']) ){?>
<div id="login">
<a href ="/user/login"> Login</a>
</div>
<div id="signin">
<a href ="/user/singin"> Signin</a>
</div>
<?php } 
else {
    echo "<div id='user'>";
    echo "Logout";
    echo "</div>";
}

?>
</nav>

