<?php
// TODO: 
// 1. Vérifier si le formulaire est envoyé en POST
// 2. Récupérer les variables 'nom' et 'email' du formulaire
// 3. Valider que l'email contient un '@'
// 4. Si valide : afficher "Bonjour [nom], votre email [email] est valide"
// 5. Si invalide : afficher "Email invalide"

// Votre code ici :

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Bonjour $nom, votre email $email est valide.";
    } else {
        echo "Email invalide.";
    }
} else {
    echo "Aucun formulaire soumis.";
}

?>

<!-- Formulaire de test (ne pas modifier) -->
<form method="POST">
    <input type="text" name="nom" placeholder="Votre nom" required>
    <input type="email" name="email" placeholder="Votre email" required>
    <button type="submit">Envoyer</button>
</form>