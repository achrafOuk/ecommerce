<html>

<head>
    <title>
        Store - shart page
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
            <buton id="checkout">checkout</button>
        </div>
        </div>
        <?php
        include_once $includes . "footer.php";

        ?>
    </body>
    <?php if (!isset($_SESSION['user'])) { ?>
        <script src="/js/items.js"></script>
    <?php
    } else {
    }
    ?>


</html>