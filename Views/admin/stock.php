<html>

<head>
    <title>
        Admin panel-stock management
    </title>
    <?php
    $includes = dirname(__DIR__) . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR;
    $navbar = $includes . "bootstrap.php";
    include_once $navbar;
    ?>
    <link rel="stylesheet" type="text/css" href="/css/admin.css" target="_blank">


    <head>

    <body>
        <div id="panel">
            <nav id="adminbar">
                <a href="/admin">statisics</a></br>
                <a href="">stock managment</a>
            </nav>

            <section id="items">
                <?php
                for ($i = 0; $i < 5; $i++) {
                    echo "<div class='gestion'>";
                    echo "<a href='#' class='itemName'>";
                    echo $item[$i][2];
                    echo "</a>";
                    echo "<button type='button' class='btn update'>update</button>";
                    echo "<button type='button' class='btn delete'>delete</button>";

                    echo "</div>";
                }
                ?>
            </section>
        </div>

    </body>



</html>