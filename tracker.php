
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$name = "Siham";
$weightKg = 75;
$heightCm = 184;


?>
<h3>Le nom de l'utilisateur <?php echo "$name" ?> <br>
Le poids en kilogrammes <?php echo "$weightKg" ?> <br>
La hauteur en centimétres <?php echo"$heightCm"?></h3>
<br><br><br>
<h3>Convertir la hauteur en mètres
<?php echo $heightCm /100?></h3>
<br><br><br>

<h3>la valeur de la hauteur au carré
<?php echo (pow(($heightCm /100) ,2));?></h3>

<br><br><br>

<h3>Calculer l'IMC
<?php echo (75 / pow(($heightCm /100) ,2));?></h3>

<h2><?php echo"$name"?> votre l'IMC est <?php echo (75 / pow(($heightCm /100) ,2));?></h2>
    
</body>
</html>