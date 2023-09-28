<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ape</title>
</head>
<body>
    <?php
    require_once('Animal.php');

    class Ape extends Animal {
        public function yell() {
            echo "Auooo";
        }
    }
    
?>
</body>
</html>