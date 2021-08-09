<!DOCTYPE html>
<html>
<head>
	<title>cible</title>
</head>
<body>
	<p style="font-family: roboto;">Bonjour!</p>
	<?php 
		isset($_POST['mdp']);
		$mot_de_passe = htmlspecialchars($_POST['mdp']);
		if ($mot_de_passe=='kangourou') {
			echo "voici les informations secretes";
		}
		else {
			echo "le mot de passe renseigner est incorect veuillez reessayer :";
		}
	?>
	<p><a href="test.php">clique ici</a> pour retourner sur le formulaire</p>
</body>
</html>