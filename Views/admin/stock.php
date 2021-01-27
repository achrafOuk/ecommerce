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
            <?php
            $includes = dirname(__DIR__) . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR;
            $navbar = $includes . "sidebar.php";
            include_once $navbar;
            ?>
            <section id="items">
                <p id="management">Stock management</p>
                <?php
                for ($i = 0; $i < 5; $i++) {
                    echo "<div class='gestion'>";
                    echo "<a href='#' class='itemName'>";
                    echo $item[$i][2];
                    echo "</a>";
                    echo "<a class='btn update' href='/item/update/{$item[$i][0]}'>update</a>";
                    echo "<a class='btn delete' href='/item/delete/{$item[$i][0]}'>delete</a>";
                    echo "</div>";
                }
                ?>
            </section>
        </div>

    </body>



</html>