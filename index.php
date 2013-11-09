<?php
include ('inc/header.php');
?>

<div id="corps">
	<div class="block_title">Gelti Vendeur</div>
	<!-- bloc news -->
	<div class="block_news">
		<div class="block_news_gen">News Télécom</div>
		<div class="block_news_title">Titre de la news</div>
		<div class="block_news_desc">Description de la news</div>
		<div class="block_news_footer">
			<div class="block_news_dateheure">08.11.2013 à 18h28</div>
			<div class="learn-more">En Savoir Plus...</div>
		</div>
	</div>
	<!-- Fin bloc news -->

	<!-- Debut bloc Statistique -->
	<div class="block_stat">
		<div class="block_stat_gen">Statistique Opérateur*</div>
		<table class="stat-op">
			<tr>
				<td>Nombre de client tous opérateur</td>
				<td>73,1 Millions</td>
			</tr>
			<tr>
				<td>Nombre de client Orange</td>
				<td>26.83 millions</td>
			</tr>
			<tr>
				<td>Nombre de client SFR</td>
				<td>20,12 Millions</td>
			</tr>
			<tr>
				<td>Nombre de Client BT</td>
				<td>11,22 Millions</td>
			</tr>
			<tr>
				<td>Nombre de Client Free</td>
				<td>6,02 Millions</td>
			</tr>
			<tr>
				<td>Nombre de Client B and You</td>
				<td>Inconnu</td>
			</tr>
		</table>
		<p><img src="<?php echo $rootsite; ?>template/general/img/icons/warning.png" />:Les Statistiques seront mis à jour le 1er de chaque trimestre.</p><br>
		*: Statistique mise à jour Mars 2013.
	</div>

	<!-- Fin bloc statistique -->

	<!-- Debut Bloc compte utilisateur -->

	<div class="block_utilisateur">
		<div class="block_util_gen">Information Utilisateur</div>
		<table class="info-cpt-acc">
			<tr>
				<td>Utilisateur:</td>
				<td>Administrateur</td>
			</tr>
			<tr>
				<td>Dépendant de l'agence:</td>
				<td>LSI INFORMATIQUE - LES SABLES D'OLONNE</td>
			</tr>
			<tr>
				<td>Acces Utilisateur:</td>
				<td>Vendeur</td>
			</tr>
		</table>
	</div>
<?php
include ('inc/footer.php');
?>
