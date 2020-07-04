<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $list=[
    'Rachid El Ouali' => ['Yamma', 'Chabih', 'Maktoub', 'Et apres', 'Adieu méres'],
    'Abdellah Farkous' => ['korsa', 'Le cop', 'El makroum', 'baba-tconicta', 'autre'],
    ' El Ouali' => ['Yamma', 'Chabih', 'Maktoub', 'Et apres', 'Adieu méres'],
    'Farkous' => ['korsa', 'Le cop', 'El makroum', 'baba-tconicta', 'autre'],
    'Rachid' => ['Yamma', 'Chabih', 'Maktoub', 'Et apres', 'Adieu méres'],
  ];

  function affichage($a=5 ,$b=5){
 
    global $list;

    $réali = array_rand($list,$a);
    $movie = array_rand($réali,$b);

  foreach($réali as $key =>$valeur){
    echo 'filme de '.$valeur.'<br>';

    foreach($movie as $clé)
    {
      echo '<li>'. $list[$valeur][$clé].'</li>';
    }
  }

  }
  affichage(); //la valeur par défaut
  affichage(5,2);
     ?>

</body>
</html>