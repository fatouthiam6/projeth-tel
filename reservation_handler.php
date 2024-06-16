<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nombrePersonnes = $_POST['nombrePersonnes'];
    $password = $_POST['password'];
    $hotel = $_POST['hotel'];

    $hasNumber = preg_match('/\d/', $password);
    $hasSpecialChar = preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password);

    if (strlen($password) > 15) {
        echo "Le mot de passe ne doit pas dépasser 15 caractères.";
    } elseif (!$hasNumber || !$hasSpecialChar) {
        echo "Le mot de passe doit contenir au moins un chiffre et un caractère spécial.";
    } else {
       

        echo "Réservation réussie pour " . htmlspecialchars($nom) . " " . htmlspecialchars($prenom) . " à l'hôtel " . htmlspecialchars($hotel) . " pour " . htmlspecialchars($nombrePersonnes) . " personnes.";
    }
}
?>
