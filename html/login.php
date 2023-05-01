<?php
session_start();

// Vérifier si le mot de passe a été soumis
if (isset($_POST['mot_de_passe'])) {
    $motDePasseSaisi = $_POST['mot_de_passe'];
    // Comparer le mot de passe saisi avec le mot de passe souhaité
    if ($motDePasseSaisi === '1234567') {
        // Mot de passe correct, définir une variable de session pour indiquer que l'utilisateur est authentifié
        $_SESSION['authentifie'] = true;
    } else {
        // Mot de passe incorrect, afficher un message d'erreur
        echo "Mot de passe incorrect.";
    }
}

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['authentifie']) || $_SESSION['authentifie'] !== true) {
    // Afficher le formulaire de saisie du mot de passe
    echo '<form method="post" action="">';
    echo 'Mot de passe : <input type="password" name="mot_de_passe">';
    echo '<input type="submit" value="Valider">';
    echo '</form>';
} else {
    // Afficher le contenu protégé
    echo "Contenu protégé : les utilisateurs authentifiés peuvent voir ce contenu.";
	header("Location: index.php");
	exit();
	}
?>


