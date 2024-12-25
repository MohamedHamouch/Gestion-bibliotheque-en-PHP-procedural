<?php
require_once 'ajouter_livre.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'ajout de livre</title>

  <style>
    body * {
      margin: 10px 0px;
    }
  </style>
</head>

<body>

  <div>
    <h2>Ajouter un Livre</h2>

    <form action="" method="POST">
      <div>
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" required placeholder="Entrez le titre du livre">
      </div>

      <div>
        <label for="auteur">Auteur</label>
        <input type="text" id="auteur" name="auteur" required placeholder="Entrez le nom de l'auteur">
      </div>

      <div>
        <label for="categorie">Catégorie</label>
        <input type="text" id="categorie" name="categorie" required placeholder="Entrez la catégorie du livre">
      </div>

      <div>
        <label for="date_ajout">Date d'ajout</label>
        <input type="date" id="date_ajout" name="date_ajout" required>
      </div>

      <div>
        <input type="checkbox" id="disponible" name="disponible" checked>
        <label for="disponible">Le livre est disponible</label>
      </div>

      <div>
        <button type="submit">Ajouter le Livre</button>
      </div>
    </form>

    <div>
      <a href="liste_livres.php">
        <button>Voir la Liste des Livres</button>
      </a>
    </div>
  </div>

</body>


</html>