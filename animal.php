<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animal</title>
</head>
<body>
<?php
class Animal {
    public $name;
    public $legs;
    public $cold_blooded = "no";

    public function __construct($name, $legs = 4) {
        $this->name = $name;
        $this->legs = $legs;
    }
}


?>
</body>
</html>