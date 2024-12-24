<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'ajout de livre</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md mt-12">
    <h2 class="text-2xl font-bold mb-6 text-center">Ajouter un Livre</h2>

    <form action="ajouter_livre.php" method="POST" class="flex flex-col gap-4">
      <div class="flex flex-col">
        <label for="titre" class="text-sm font-medium text-gray-700">Titre</label>
        <input type="text" id="titre" name="titre" required
          class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Entrez le titre du livre">
      </div>

      <div class="flex flex-col">
        <label for="auteur" class="text-sm font-medium text-gray-700">Auteur</label>
        <input type="text" id="auteur" name="auteur" required
          class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Entrez le nom de l'auteur">
      </div>

      <div class="flex flex-col">
        <label for="categorie" class="text-sm font-medium text-gray-700">Catégorie</label>
        <input type="text" id="categorie" name="categorie" required
          class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
          placeholder="Entrez la catégorie du livre">
      </div>

      <div class="flex flex-col">
        <label for="date_ajout" class="text-sm font-medium text-gray-700">Date d'ajout</label>
        <input type="date" id="date_ajout" name="date_ajout" required
          class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
      </div>

      <div class="flex items-center">
        <input type="checkbox" id="disponible" name="disponible" class="mr-2 leading-tight" checked>
        <label for="disponible" class="text-sm text-gray-700">Le livre est disponible</label>
      </div>

      <div class="text-center">
        <button type="submit"
          class="px-6 py-2 bg-indigo-600 text-white rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
          Ajouter le Livre
        </button>
      </div>
    </form>
  </div>

</body>

</html>