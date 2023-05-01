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
    <?php include("includes/post.php");?>
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
			<?php include("includes/header.php");?>
		</header>
		<!-- Le corps -->
			<?php include("includes/main.php");?>
		<!-- Les scripts -->
		<script>
			<?php include("includes/functions.js");?>
		</script>
	</body>
	<!-- Le pied de page -->
    <footer>
        <?php include("includes/footer.php");?>
    </footer>
</html>



