<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frog</title>
</head>
<body>
<?php
require_once('Animal.php');

class Frog extends Animal {
    public function jump() {
        echo "Hop Hop";
    }
}
?>
</body>
</html>