<?php
include_once 'functions.php';
$function = new functions();
$cars = $function->selectcars();
$n = count($cars);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ozi Cars</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">OZI</a>
                </div>

                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="signup.php">SignUp</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <section id="contents">
            <div class="row">
                <div class="col-lg-3 col-md-4"> 
                    <div class="row">
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="row">
                        <?php
                        for ($index = 0; $index < $n; $index++) {
                            echo '<div class = "col-sm-6 col-md-4">
                            <div class = "thumbnail">
                            <img src = "assets/car1.png" alt = "...">
                            <div class = "caption">
                            <h3>' . $cars[$index]["name"] . '</h3>
                            <p>' . $cars[$index]["price"] . '</p>
                            </div>
                            </div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
