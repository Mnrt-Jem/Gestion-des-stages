<?php include 'includes/header.php' ?>
<div class="container_stage">
	<div class="box_menu_accordeon">
		<?php include 'includes/menu_gauche.php' ?>
	</div>
		<div class="contenue_stage_acc">
			<div class="titre_principal_annees_scolaires">
			Suivi scolaire
			</div>
				<div id="ajouter_annees">
					<div id="titre_secondaire_dmonzbi">
						Ajouter une année
					</div>
					<form method="post" action="annees_scolaires_new_annee.php">
						<label>Nom :</label>
						<input type="text" name="annee">
						<div>
						<br>
							<input type="submit" value="   Valider   ">
						</div>
					</form>
					
				</div>
			
			<div id="liste_annees">
				<div id="titre_secondaire_dmonzbi2">
				Liste des années scolaires
				</div>
				<?php $requete= $con->query('SELECT * FROM annee') ?>
				<TABLE BORDER CELLPADDING=10 CELLSPACING=0>
					<TR>
						<TH>Année</TH>
						<TH>Action</TH>
					</TR>
					<?php  while($donnees=$requete->fetch())
					 { ?>
					 <form method="get" action="annees_scolaires_traitement.php">
					<TR>
						<TD><?php echo($donnees['Annee']); ?></TD>
					    <TH><?php echo '<a href="annees_scolaires_traitement.php?submit='.$donnees['Annee'].'" class="lien_tableau">Supprimer</a>'; ?></TH>
					</TR>
					</form>
					<?php } ?>
				</TABLE>
			</div>
		</div>
</div>
<?php include 'includes/footer.php' ?>