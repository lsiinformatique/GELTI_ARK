<?php
include ('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>GELTI ArK - <?php //echo $donnee_agence['raison_social']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/template/general/css/master.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $rootsite; ?>/template/general/css/menu.css" />
</head>
<body>
	<div id="header">
	<div id="menu">
		<dl class="accueil">
			<dt><font color="white">Accueil</font></dt>
		</dl>

		<dl>
			<dt><img src="<?php echo $rootsite; ?>/template/img/icons/orange.png" /> Orange</dt>
			<dd>
				<ul>
					<li><a href="#">Sous Menu 1</a></li>
					<li><a href="#">Sous Menu 2</a></li>
				</ul>
			</dd>
		</dl>

		<dl>
			<dt><img src="<?php echo $rootsite; ?>/template/img/icons/sfr.png" /> SFR</dt>
			<dd>
				<ul>
					<li><a href="#">Sous Menu 1</a></li>
					<li><a href="#">Sous Menu 2</a></li>
				</ul>
			</dd>
		</dl>

		<dl>
			<dt><img src="<?php echo $rootsite; ?>/template/img/icons/bt.png" /> BT</dt>
			<dd>
				<ul>
					<li><a href="#">Sous Menu 1</a></li>
					<li><a href="#">Sous Menu 2</a></li>
				</ul>
			</dd>
		</dl>

		<dl>
			<dt><img src="<?php echo $rootsite; ?>/template/img/icons/banyou.png" /> B and You</dt>
			<dd>
				<ul>
					<li><a href="#">Sous Menu 1</a></li>
					<li><a href="#">Sous Menu 2</a></li>
				</ul>
			</dd>
		</dl>
	</div>

	<div id="identification">
	Bienvenue Administrateur,<br>
	Votre dernière connection est: le 09/11/2013 à 01:17 TMP
	</div>
	</div>
