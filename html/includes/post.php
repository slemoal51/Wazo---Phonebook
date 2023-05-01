<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Récupération des valeurs soumises
	$valeurs1 = isset($_POST["valeur1"]) ? $_POST["valeur1"] : array();
	$valeurs2 = isset($_POST["valeur2"]) ? $_POST["valeur2"] : array();
	$valeurs3 = isset($_POST["valeur3"]) ? $_POST["valeur3"] : array();
	$valeurs4 = isset($_POST["valeur4"]) ? $_POST["valeur4"] : array();

	 // Formatage des valeurs en tableau associatif
	$donnees = array();
	for ($i = 0; $i < count($valeurs1); $i++) {
		// Génération du hash en utilisant la valeur de la colonne 2
		$hash = hash('sha256', $valeurs2[$i]);
		// Encodage du hash en base64
		$base64 = base64_encode($hash);
		// Extraction des 16 premiers caractères de l'encodage en base64
		$valeur4 = substr($base64, 0, 16);

		$donnees[$i] = array(
			"valeur1" => isset($valeurs1[$i]) ? "checked" : "",
			"valeur2" => $valeurs2[$i],
			"valeur3" => $valeurs3[$i],
			"valeur4" => $valeur4
		);
	}

	// Écriture des données dans le fichier variables.json
	$contenu = json_encode($donnees);
	file_put_contents("includes/donnes.json", $contenu);
} else {
	// Si le formulaire n'a pas été soumis, vérifier si le fichier variables.json existe
	if (file_exists("includes/variables.json")) {
		// Charger les données depuis le fichier variables.json
		$contenu = file_get_contents("includes/variables.json");
		$donnees = json_decode($contenu, true);
	}
}
?>