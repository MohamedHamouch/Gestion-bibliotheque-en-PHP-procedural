<?php
require 'configdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = trim($_POST['titre']);
    $auteur = trim($_POST['auteur']);
    $categorie = trim($_POST['categorie']);
    $date_ajout = $_POST['date_ajout'];
    $disponible = isset($_POST['disponible']) ? 1 : 0;

    $stmt = mysqli_prepare($conn, "INSERT INTO livres (titre, auteur, categorie, date_ajout, disponible) 
                                   VALUES (?, ?, ?, ?, ?)");

    mysqli_stmt_bind_param($stmt, "ssssi", $titre, $auteur, $categorie, $date_ajout, $disponible);

    if (mysqli_stmt_execute($stmt)) {
        echo "Livre ajouté avec succès!";
    } else {
        echo "Erreur lors de l'ajout du livre: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
