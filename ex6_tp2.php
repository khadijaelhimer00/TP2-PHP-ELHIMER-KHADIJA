<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Switch et Date</title>
</head>
<body>
    <h1>TP02 - Exercice 6</h1>

    <?php
    //  Test avec une valeur fixe
    $numeroMois = 3; 

    function afficherMois($mois) {
        switch ($mois) {
            case 1: echo "Janvier"; break;
            case 2: echo "Février"; break;
            case 3: echo "Mars"; break;
            case 4: echo "Avril"; break;
            case 5: echo "Mai"; break;
            case 6: echo "Juin"; break;
            case 7: echo "Juillet"; break;
            case 8: echo "Août"; break;
            case 9: echo "Septembre"; break;
            case 10: echo "Octobre"; break;
            case 11: echo "Novembre"; break;
            case 12: echo "Décembre"; break;
            default: echo "Numéro de mois invalide"; break;
        }
    }

    echo "<p>Pour le numéro $numeroMois : ";
    afficherMois($numeroMois);
    echo "</p>";

    //  Utilisation du mois dynamique du serveur
    $moisCourant = (int) date("m");
    echo "<p>Mois dynamique actuel de votre serveur ($moisCourant) : ";
    afficherMois($moisCourant);
    echo "</p>";
    ?>
</body>
</html>