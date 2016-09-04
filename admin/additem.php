<?php
include_once 'functions.php';
$function = new functions();

$status = "";

if(isset($_POST["request"]))
{
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="post">
            <input name="request" value="true" hidden="true">
            <input type="text" name="model" placeholder="model">
            <input type="text" name="make" placeholder="make">
            <input type="number" name="price" placeholder="price">
            <input type="text" name="engine" placeholder="engine">
            <input type="text" name="gearbox" placeholder="gearbox">
            <input type="number" name="power" placeholder="power">
            <input type="number" name="torque" placeholder="torque">
            <input type="checkbox" name="airbags" value="true"><label for="checkbox">Airbags</label>
            <input type="checkbox" name="abs" value="true"><label for="checkbox">ABS</label>
            <input type="checkbox" name="alloy" value="true"><label for="checkbox">Alloy</label>
            <input type="number" name="mileage" placeholder="mileage">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
