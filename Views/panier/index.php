<html>

<head>
    <title>
        Store - Home page
    </title>
    <?php
    $includes = dirname(__DIR__) . DIRECTORY_SEPARATOR . "components" . DIRECTORY_SEPARATOR;
    $navbar = $includes . "bootstrap.php";
    include_once $navbar;
    ?>

    <head>

    <body>
        <?php
        include_once $includes . "navbar.php";

        ?>
        <div class="section">
            <p> Panier </p></br>

            <div id="panier">
            </div>
            <div id="total"> Total :<div id="price">0</div>DH
            </div>

        </div>

        <?php
        include_once $includes . "footer.php";

        ?>
    </body>
    <script src="/js/items.js"></script>

</html>