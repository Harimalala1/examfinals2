<?php
include ('../inc/fonction.php');
$objets = all_objet();
$taille = 0;
    while (isset($objets[$taille])) 
    {
        $taille++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>accueil</title>
</head>
<body>
    <?php include('header.php')?>
    <?php for ($i=0; $i < $taille; $i++) { ?>
        <h3><?php echo $objets[$i]['nom_objet']?></h3>
    <?php }?>
</body>
</html>