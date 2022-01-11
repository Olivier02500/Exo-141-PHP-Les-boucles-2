<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
//Exercice 1
for ($point = 0 ; $point <= 10 ; $point++){
    echo $point ."<br>";
}

echo "<br><br>";

//Exercice 2
$croix = 2;
for ($trait = 0 ; $trait <= 20 ; $trait += $croix ) {
        echo $trait ."<br>";
    }

echo "<br><br>";

//Exercice 3
$round = 100;
$diamond = 10;
for ($carre = $round * $diamond ; $carre >= 10 ; $carre -= $diamond){
    echo $carre . "<br>";
}

echo "<br><br>";

//Exercice 4
for ($oval = 1 ; $oval <= 10 ;$oval +=2){
    echo $oval ."<br>";
}

echo "<br><br>";

//Exercice 5
for ($cube = 1 ; $cube <= 15 ; $cube++){
    echo $cube ." On y arrive presque. <br>";
}

echo "<br><br>";

//Exercice 6
for ($sphere = 20 ; $sphere >= 0 ; $sphere--){
    echo $sphere ." C'est presque bon. <br>";
}

echo "<br><br>";

//Exercice 7
for ($square = 1 ; $square <= 100 ; $square+= 15){
    echo $square ." On tient le bon bout. <br>";
}

echo "<br><br>";

//Exercice 5
for ($circle = 200 ; $circle >= 0 ; $circle-= 12){
    echo $circle ." Enfin !!!!. <br>";
}
?>

</body>
</html>