<?php
// Vérification de l'authentification de l'utilisateur
session_start();
if (!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] !== true) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas authentifié
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
	<!-- L'en-tête -->
	<head>
		 <?php include("includes/head.php");?>
	</head>

	<!-- Le css -->
	<style>
		<?php include("includes/style.css");?>
	</style>
	<body>
		<!-- Le menu -->
		<header>
		
		</header>
		<!-- Le corps -->
			<?php include("includes/get-url.php");?>
		<!-- Les scripts -->
		<script>
			<?php include("includes/functions.js");?>
		</script>
	</body>
	<!-- Le pied de page -->
    <footer>
		<br>
        <?php include("includes/footer.php");?>
    </footer>
</html>



