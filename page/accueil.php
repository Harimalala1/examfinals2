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

    <section class="col-md-12">
            <h1 class="text-center">Liste des Departements et ces managers en cours</h1>
            
            <div class="container">
                <table  class="table table-striped table-hover shadow text-center">
                    <thead>
                        <tr>
                            <th>Categorie</th>
                            <th>Objet</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        <?php for ($i = 0; $i < $taille; $i++) {?>
                                <tr>
                                    <td><?php echo $objets[$i]['Categorie']?> </td>
                                    <td><?php echo $objets[$i]['objet'] ?></td>
                                </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
</body>
</html>