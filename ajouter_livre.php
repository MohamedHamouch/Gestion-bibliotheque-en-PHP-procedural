<?php
// Include the database connection
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = trim($_POST['titre']);
    $auteur = trim($_POST['auteur']);
    $categorie = trim($_POST['categorie']);
    $date_ajout = $_POST['date_ajout'];
    $disponible = isset($_POST['disponible']) ? 1 : 0;

    $stmt = $conn->prepare("INSERT INTO livres (titre, auteur, categorie, date_ajout, disponible) 
                            VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssi", $titre, $auteur, $categorie, $date_ajout, $disponible);

    if ($stmt->execute()) {
        echo "Livre ajouté avec succès!";
    } else {
        echo "Erreur lors de l'ajout du livre: " . $stmt->error;
    }

    $stmt->close();
    mysqli_close($conn);
}
?>