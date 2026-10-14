<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table, th, td { border: 1px solid #333; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>
    <h1>TP02 - Exercice 9</h1>

    <?php
    $notes = [
        "Folan" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Omama" => 14,
        "khadija" => 10
    ];

    $somme = 0;
    $nombreValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>

    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $etudiant => $note): ?>
                <?php 
                $somme += $note;
                
                // Comptage des validations
                if ($note >= 10) {
                    $nombreValides++;
                    $statut = "Validé";
                } else {
                    $statut = "Non validé";
                }

                // Recherche de la meilleure note
                if ($note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }
                ?>
                <tr>
                    <td><?= htmlspecialchars($etudiant) ?></td>
                    <td><?= $note ?></td>
                    <td><?= $statut ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php 
    $moyenne = $somme / count($notes); 
    ?>

    <h2>Synthèse des résultats</h2>
    <ul>
        <li>Somme des notes : <?= $somme ?></li>
        <li>Moyenne de la classe : <?= $moyenne ?></li>
        <li>Nombre d'étudiants ayant validé : <?= $nombreValides ?></li>
        <li>Meilleure note : <?= $meilleurEtudiant ?> avec <?= $meilleureNote ?>/20</li>
    </ul>
</body>
</html>