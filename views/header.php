<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" >
		<title>Un site de Bonnes Nouvelles</title>
		<link rel="stylesheet" type="text/css" href="<?php echo CHEMIN_VUES ?>css/base.css" media="all" >
		<link rel="stylesheet" type="text/css" href="<?php echo CHEMIN_VUES ?>css/modele01.css" media="screen" >
	</head>
	<body>
		<header>
			<h1>
				<a href="index.php">
				<img src="<?php echo CHEMIN_VUES ?>images/smiley.jpg" alt="Sourire">
				</a>
				Un site de Bonnes Nouvelles
			</h1>
			<p class="sous-titre">
				<strong>Institut Paul Lambin</strong>:: 1ère année du baccalauréat en informatique
			</p>
			<nav>
				<ul>
					<li><a href="index.php?action=genese">La genèse</a></li>
					<li><a href="index.php?action=livres">Les livres</a></li>
					<li><a href="index.php?action=contact">Contactez-nous</a></li>		
				</ul>
			</nav>
		</header>
