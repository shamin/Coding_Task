<?php

include_once 'functions.php';
$function = new functions();

$searchTerm = $_POST['term'];
$return = $function->search($searchTerm);
for ($index = 0; $index < count($return); $index++) {
    echo '<li><a href="car.php?name=' . $return[$index]["model"] . '">' . $return[$index]["make"].' ' . $return[$index]["model"] . '</a></li><br>'; 
}
?>