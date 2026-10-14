<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <?php
    $nom = "SATURU";
    $prenom = "GOJO";
    $age = 20;
    $formation = "Développement Web";

    // Concaténation avec l'opérateur .
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age
            . " ans et je suis en formation : " . $formation . ". ";

    // Ajout à la fin de la chaîne avec .=
    $phrase .= "J'apprends PHP";

    echo "<p>$phrase</p>";

    // PHP est sensible à la casse pour les variables
    $note = 12;
    $Note = 16;
    echo "<p>\$note = $note</p>";
    echo "<p>\$Note = $Note</p>";
    ?>
</body>
</html>
