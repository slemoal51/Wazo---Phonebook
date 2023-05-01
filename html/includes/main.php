<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<div id="tab1" class="tabcontent active">
    <h2>Ligne de 1 à 25</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 0; $i < 25; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>	
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab2" class="tabcontent">
    <h2>Ligne de 26 à 50</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 25; $i < 50; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab3" class="tabcontent">
    <h2>Ligne de 51 à 75</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 50; $i < 75; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab4" class="tabcontent">
    <h2>Ligne de 76 à 100</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 75; $i < 100; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab5" class="tabcontent active">
    <h2>Ligne de 101 à 125</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 100; $i < 125; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>	
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab6" class="tabcontent">
    <h2>Ligne de 126 à 150</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 125; $i < 150; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab7" class="tabcontent">
    <h2>Ligne de 151 à 175</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 150; $i < 175; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>

<div id="tab8" class="tabcontent">
    <h2>Ligne de 176 à 200</h2>
    <table>
        <tr>
			<th>#</th>
			<th>Activer</th>
			<th>Nom du client</th>
			<th>URL Annuaire Wazo</th>
			<th>ID nouvel annuaire</th>
			<th></th>
        </tr>
		<?php for ($i = 175; $i < 200; $i++) { ?>
		<tr>
			<td><?php echo $i + 1; ?></td>
			<td>
				<select name="valeur1[]">
					<option value="non" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'non' ? 'selected' : ''; ?>>Non</option>
					<option value="oui" <?php echo isset($donnees[$i]["valeur1"]) && $donnees[$i]["valeur1"] === 'oui' ? 'selected' : ''; ?>>Oui</option>
				</select>
			</td>
			<td><input type="text" name="valeur2[]" value="<?php echo isset($donnees[$i]["valeur2"]) ? preg_replace('/[^a-zA-Z0-9-_]/', '', $donnees[$i]["valeur2"]) : ''; ?>"></td>
			<td><input type="text" name="valeur3[]" value="<?php echo isset($donnees[$i]["valeur3"]) ? $donnees[$i]["valeur3"] : ''; ?>" class="large-input"></td>
			<td><input type="text" name="valeur4[]" value="<?php echo isset($donnees[$i]["valeur4"]) ? $donnees[$i]["valeur4"] : ''; ?>" class="readonly" readonly></td>
			<td><input type="button" value="Copier ID" class="copy-btn" onclick="copyToClipboard(this)"></td>
	   </tr>
		<?php } ?>
    </table>
</div>
	<input type="submit" value="Enregistrer">

	
</form>
