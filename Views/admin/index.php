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
                        <?php echo ($income[0][0]) . "DH"; ?>
                    </div>
                    <div class="card">

                        <p class="disc">item ventes</p>
                        <?php echo ($elements[0][0]); ?>

                    </div>

                </section>
                <canvas id="myChart" width="400" height="400"></canvas>
            </section>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        console.log("hello");
        let ctx = document.getElementById('myChart').getContext('2d');
        console.log(<?php echo json_encode($incomemonth); ?>);
        let myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($months); ?>,
                datasets: [{
                    label: "income this year by month",
                    fill: false,
                    borderColor: "#b11e22",
                    pointBorderColor: "#b11e22",
                    data: <?php echo json_encode($incomemonth); ?>
                }]
            }
        });
    </script>


</html>