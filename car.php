<?php
if (isset($_GET["name"])) {
    include_once 'functions.php';
    $function = new functions();
    $carname = $_GET["name"];
    $car = $function->getcar($carname);
    $car = $car[0];
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ozi Cars</title>
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'navbar.php'; ?>
        <div class="container">
            <nav>
                <div class="nav-wrapper bread">
                    <div class="col s12">
                        <a href="index.php" class="breadcrumb">Home</a>
                        <a href="#" class="breadcrumb"><?php echo $car["model"] ?></a>
                    </div>    
                </div>
            </nav>
            <div class="row">
                <div class="col l5 push-l7 m6"><span class="flow-text">                       
                        <table>
                            <thead>
                                <tr>
                                    <th class="car_head" data-field="id"><?php echo $car["make"] . " " . $car["model"] ?></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="f_size"><strong>Model</strong></td>
                                    <td class="f_size">:</td>
                                    <td class="f_size"><?php echo $car["model"] ?></td>
                                </tr>
                                <tr>
                                    <td class="f_size"><strong>Make</strong></td>
                                    <td class="f_size">:</td>
                                    <td class="f_size"><?php echo $car["make"] ?></td>
                                </tr>
                                <tr>
                                    <td class="center-align">Rs. <?php echo $car["price"] ?><h7> lakhs</h7></td>
                            </tr>
                            </tbody>
                        </table>  

                    </span></div>
                <div class="col l7 pull-l5 s12"><img class="materialboxed responsive-img" width="650" src="assets/cars/car<?php echo $car["id"] ?>.png"></div>
            </div>
            <div class="specs center-align">
                <h5>
                    SPECIFICATIONS
                </h5>
            </div>
            <div>
                <table class="bordered striped card">
                    <tbody>
                        <tr>
                            <th data-field="id">Price</th>
                            <td><?php echo "Rs. " . $car["price"] . " Lakhs" ?></td>
                        </tr>
                        <tr>
                            <th data-field="id">Mileage</th>
                            <td><?php echo $car["mileage"] . " KMPL" ?></td>
                        </tr>
                        <tr>
                            <th data-field="id">Fuel</th>
                            <td><?php echo $car["fuel"] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/nouislider.min.js" type="text/javascript"></script>   
        <script>
            $(".button-collapse").sideNav();
            $(document).ready(function () {
                $("#search").keyup(search);
            });
            function search()
            {
                if ($("#search").val() !== "")
                {
                    var formvalues = "&term=" + $("#search").val();
                    $.ajax({
                        type: 'POST',
                        url: 'search.php',
                        data: formvalues,
                        beforeSend: function (html) {
                            $('.progress').show();
                        },
                        success: function (html) {
                            $('.progress').hide();
                            $('#searchresults').html(html);
                        }
                    });
                } else
                {
                    $('#searchresults').html(null);
                }
            }
        </script>
    </body>
</html>
