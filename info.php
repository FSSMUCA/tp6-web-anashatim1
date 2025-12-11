<?php

$nom = "Anas";
$ville = "Marrakech";

$nombre1 = 15;
$nombre2 = 4;

$addition = $nombre1 + $nombre2;
$soustraction = $nombre1 - $nombre2;
$multiplication = $nombre1 * $nombre2;
$division = $nombre1 / $nombre2;

$message = "Bienvenue $nom, vous habitez à $ville.";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations PHP</title>
    <style>
        body{
            font-family: Arial;
            background: #f6f6f6;
            margin: 0;
        }
        header, footer{
            background: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        main{
            background: white;
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2{
            color: #007bff;
        }
        p{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Affichage des informations PHP</h1>
</header>

<main>

    <h2>Variables déclarées</h2>

    <p><?php echo $message; ?></p>
    <p>Nombre 1 : <?php echo $nombre1; ?></p>
    <p>Nombre 2 : <?php echo $nombre2; ?></p>

    <h2>Résultats des opérations</h2>

    <p>Addition : <?php echo $addition; ?></p>
    <p>Soustraction : <?php echo $soustraction; ?></p>
    <p>Multiplication : <?php echo $multiplication; ?></p>
    <p>Division : <?php echo $division; ?></p>

</main>

<footer>
    <p>© 2025 — Page PHP </p>
</footer>

</body>
</html>
