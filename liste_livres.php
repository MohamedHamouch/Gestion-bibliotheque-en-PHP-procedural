<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Livres</title>
</head>

<body>
    <h1>Liste des Livres</h1>

    <?php
    include 'db.php';

    $sql = "SELECT * FROM livres";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Catégorie</th>
                <th>Date d'Ajout</th>
                <th>Disponible</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['titre']}</td>
                    <td>{$row['auteur']}</td>
                    <td>{$row['categorie']}</td>
                    <td>{$row['date_ajout']}</td>
                    <td>" . ($row['disponible'] ? "Oui" : "Non") . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Aucun livre trouvé.</p>";
    }

    mysqli_close($conn);
    ?>

    <div style="margin-top: 20px;">
        <a href="index.php">
            <button>Retour à l'Accueil</button>
        </a>
    </div>
</body>

</html>