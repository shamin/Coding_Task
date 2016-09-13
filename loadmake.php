<?php

include_once 'functions.php';
$function = new functions();
$make = $function->selectmake();
$n = count($make);
for ($index = 0; $index < $n; $index++) {
    echo '<p>
                <input name="make[]" value="' . $make[$index]["make"] . '" type="checkbox" id="' . $make[$index]["make"] . '" />
                <label for="' . $make[$index]["make"] . '">' . $make[$index]["make"] . '</label>
            </p>';
}
?>

