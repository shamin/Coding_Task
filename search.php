<?php
include_once 'functions.php';
$function = new functions();

$searchTerm = $_GET['term'];

$return = $function->search($searchTerm);
for ($index = 0; $index < count($return); $index++) {
    $data[] = $return[$index]["name"];
}
echo json_encode($data);
?>