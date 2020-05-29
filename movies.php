<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers</title>
</head>
<body>

<?php

$movieName = $_GET['movieName'];
$movieStar = $_GET['movieStar'];
$movieYear = $_GET['movieYear'];

?>

<h1>Information about <?php echo "$movieName";?> </h1>
<p>Based on the input, here is the information so far: 
<br>
<?php echo "$movieStar" ;?> the movie <?php echo "$movieName";?>which was released in year <?php echo "$movieYear";?></p>
</body>
</html>