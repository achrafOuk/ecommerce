<html>

<head>
    <title>
        Admin panel
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

            <section id="stats">
                <section id="count">
                    <div class="card">
                        <p class="disc">income</p>
                        2000DH
                    </div>
                    <div class="card">

                        <p class="disc">item ventes</p>
                        5
                    </div>

                </section>
            </section>
        </div>
    </body>


</html>