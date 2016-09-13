<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ozi Cars</title>
        <link href="css/nouislider.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/nouislider.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>
        <section id="contents">
            <div class="container">
                <div class="row">
                    <div class="card col l3 m12 s12 left-pane">
                        <div class="row"><h5 class="center-align">Filters</h5></div>
                        <div class="row">
                            <form id="filterform">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                        <div class="collapsible-header">Fuel</div>
                                        <div class="collapsible-body">
                                            <p>
                                                <input name="fuel" value="Petrol" class="with-gap" type="radio" id="test1" />
                                                <label for="test1">Petrol</label>
                                            </p>
                                            <p>
                                                <input name="fuel" value="Diesel" class="with-gap" type="radio" id="test2" />
                                                <label for="test2">Diesel</label>
                                            </p>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="collapsible-header">Make</div>
                                        <div class="collapsible-body scroll">
                                            <?php
                                            include ('loadmake.php');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header">Price (Lakhs)</div>
                                        <div class="collapsible-body"><p id="pricehigh"></p><p id="pricelow"></p><div class="both-slider" id="slider-price"></div><p></p></div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header">Mileage (KMPL)</div>
                                        <div class="collapsible-body"><p id="mileagehigh"></p><p id="mileagelow"></p><div class="both-slider" id="slider-mileage"></div><p></p></div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div>
                            <a class="waves-effect waves-light btn" id="save"><i class="material-icons right">done</i>Save</a>
                        </div>
                        <br>
                    </div>
                    <div class="col l9 m12 s12">
                        <div id="cars" class="row">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
        <script src="js/nouislider.min.js" type="text/javascript"></script>
        <script src="js/materialize.min.js" type="text/javascript"></script>
        <script src="js/myscripts.js" type="text/javascript"></script>
        <script>
            $(".button-collapse").sideNav();
        </script>
    </body>
</html>
