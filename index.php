<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
// Mengimpor class Animal dari animal.php
require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

// Melakukan instance terhadap class Animal
$sheep = new animal("shaun");
echo "Nama: " . $sheep->name . "<br>"; // Output: "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // Output: 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // Output: "no"
echo "<br>";

// Release 1: Instance class Ape dan Frog


$kodok = new Frog("buduk");
echo "Nama: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>"; // Output: 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // Output: "no"
echo "Jump:";
$kodok->jump(); // Output: "hop hop" 
echo "<br>";

$sungokong = new Ape("kera sakti", 2);
echo "<br>";
echo "Nama: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>"; // Output: 2
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // Output: "no"
echo "Yell:";
$sungokong->yell(); // Output: "Auooo"


?>
</body>
</html>
