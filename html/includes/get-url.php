<div>
        <h3> Recuperation de l'URL de l'annuaire wazo depuis une MAC adresse d'un poste yealink</h3>
<form method="POST" action="">
    <table>
        <tr>
            <th>#</th>
            <th>Serveur</th>
            <th>Mac Adresse</th>
            <th></th>
            <th>URL Annuaire Wazo</th>
            <th></th>
        </tr>
        <tr>
            <td>Yealink</td>
            <td>
                <select name="server" id="server">
                    <option value="http://wazo01.telecom-ci.net:8667/">http://wazo01.telecom-ci.net:8667/</option>
                    <option value="http://wazo02.telecom-ci.net:8667/">http://wazo02.telecom-ci.net:8667/</option>
                </select>
            </td>
            <td><input type="text" name="suffix" id="suffix"></td>
            <td><input type="submit" name="submit" class="copy-btn" value="Valider"></td>
            <td><?php
        // Si le formulaire a été soumis
        if (isset($_POST['submit'])) {
                // Récupération des valeurs saisies
                $server = $_POST['server'];
                $suffix = strtolower($_POST['suffix']); // Conversion en minuscules
                $suffix = str_replace(":", "", $suffix); // Suppression du caractère ":"

                // Concaténation du serveur du suffixe et de l'extension pour former l'URL
                $url = $server . $suffix . ".cfg";
                // Récupérer le contenu du fichier
                $fileContents = file_get_contents($url);

                // Recherche de la position de "remote_phonebook.data.1.url =" dans le contenu du fichier
                $startPos = strpos($fileContents, 'remote_phonebook.data.1.url = ');
                if ($startPos !== false) {
					// La position de début a été trouvée, on avance le curseur à la fin de la chaîne de début
					$startPos += strlen('remote_phonebook.data.1.url = ');

					// Recherche de la position de "=#SEARCH" dans le contenu du fichier à partir de la position de début
					$endPos = strpos($fileContents, '=#SEARCH', $startPos);
					if ($endPos !== false) {
						// La position de fin a été trouvée, on extrait la sous-chaîne qui se trouve entre les deux positions
						$substring = substr($fileContents, $startPos, $endPos - $startPos);
						// Remplacer toutes les occurrences de "Yealink" par "Snom" dans la sous-chaîne extraite
						$substring = str_replace('yealink', 'snom', $substring);
						echo '<input type="text" name="reponse" value="' . $substring . '">';
					} else {
						// La sous-chaîne n'a pas été trouvée
						echo '<input type="text" name="reponse" value="Valeur Yealink manquante">';
					}

                } else {
                        // "http" n'a pas été trouvé
                        echo '<input type="text" name="reponse" value="Valeur http manquante">';
                }
        }
        ?></td>
            <td><input type="button" class="copy-btn" value="Copier URL" onclick="copyToClipboard(this)"></td>
        </tr>
    </table>
</form>

</div>
