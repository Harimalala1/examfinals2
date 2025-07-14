<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>index</title>
</head>
<body>
   <main>
        <div  class="bg-light rounded shadow col-md-5 case_index">
            <form action="./page/traitement_log.php" method="get">
                <input type="text" name="nom" placeholder="Nom">
                <input type="email" name="email" placeholder="email">
                <input type="submit" value="Se connecter">
            </form>
        </div>
        <a href="./page/insciption.php">S'inscrire</a>
    </main>
</body>
</html>