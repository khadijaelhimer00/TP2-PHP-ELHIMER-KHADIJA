<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles for et pyramide</title>
</head>
<body>
    <h1>TP02 - Exercice 7</h1>

    <section>
        <h2>Section 1 : Table de multiplication de 7</h2>
        <ul>
            <?php
            $nombre = 7;
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $nombre * $i;
                echo "<li>$nombre × $i = $resultat</li>";
            }
            ?>
        </ul>
    </section>

    <hr>

    <section>
        <h2>Section 2 : Pyramide d'étoiles</h2>
        <pre><?php
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "\n";
        }
        ?></pre>
    </section>
</body>
</html>