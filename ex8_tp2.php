<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Contrôle des boucles</title>
</head>
<body>
    <h1>TP02 - Exercice 8</h1>

    <h2>Partie 1 : Nombres pairs de 0 à 20 (while)</h2>
    <p>
    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i === 10) {
            echo "<strong>10</strong> ";
        } else {
            echo "$i ";
        }
        $i += 2;
    }
    ?>
    </p>

    <h2>Partie 2 : Comparaison while et do-while avec condition d'arrêt initiale fausse</h2>
    <?php
    // Test avec WHILE
    $compteurWhile = 5;
    $executionsWhile = 0;
    while ($compteurWhile < 5) {
        $executionsWhile++;
        $compteurWhile++;
    }

    // Test avec DO-WHILE
    $compteurDoWhile = 5;
    $executionsDoWhile = 0;
    do {
        $executionsDoWhile++;
        $compteurDoWhile++;
    } while ($compteurDoWhile < 5);

    echo "<p>Exécutions du corps avec <code>while</code> : $executionsWhile</p>";
    echo "<p>Exécutions du corps avec <code>do-while</code> : $executionsDoWhile</p>";
    ?>

    <h2>Partie 3 : Filtrage et interruption (continue & break)</h2>
    <p>
    <?php
    for ($n = 1; $n <= 20; $n++) {
        if ($n === 16) {
            break;
        }
        if ($n % 3 === 0) {
            continue;
        }
        echo "$n ";
    }
    ?>
    </p>
</body>
</html>