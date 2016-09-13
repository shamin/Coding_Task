<?php

include_once 'functions.php';
$function = new functions();
$low_price = $_POST["price_low"];
$high_price = $_POST["price_high"];
$low_mileage = $_POST["mileage_low"];
$high_mileage = $_POST["mileage_high"];
if (isset($_POST["make"]) && isset($_POST["fuel"])) {
    $cars = $function->selectcarsfuelmake($low_price, $high_price, $low_mileage, $high_mileage, $_POST["make"], $_POST["fuel"]);
} else if (isset($_POST["make"])) {
    $cars = $function->selectcarsmake($low_price, $high_price, $low_mileage, $high_mileage, $_POST["make"]);
} else if (isset($_POST["fuel"])) {
    $cars = $function->selectcarsfuel($low_price, $high_price, $low_mileage, $high_mileage, $_POST["fuel"]);
} else {
    $cars = $function->selectcars($low_price, $high_price, $low_mileage, $high_mileage);
}
$n = count($cars);
for ($index = 0; $index < $n; $index++) {
    echo '<div class = "col s6 m4 l4">
            <div class="card">
                <div class="card-image">
                    <img src = "assets/cars/car' . $cars[$index]["id"] . '.png" alt="' . $cars[$index]["model"] . '">
                </div>
                <div class = "card-content">
                    <h6><strong>' . $cars[$index]["make"] . " " . $cars[$index]["model"] . '</strong></h6>
                    <p> Rs.' . $cars[$index]["price"] . ' Lakhs</p>
                </div>
                <div class="card-action">
                     <a class="red-color" href="car.php?name=' . $cars[$index]["model"] . '">View</a>
                </div>
            </div>
        </div>';
}
?>

