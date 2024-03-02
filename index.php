<!DOCTYPE html>
<html lang="en">

<?php require('head.html') ?>

<body class="home">
	<?php require('header.html'); ?>
	<!-- Header -->
	<header id="head">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				
				<div class="item">
					<strong>
						<div class="container text-light">
							<div class="row">
								<h1 class="lead">Bois précieux exceptionnels en ligne</h1>
								<div class="tagline">Explorez notre site de vente de bois pour découvrir une sélection exceptionnelle de produits de qualité</div>
								<p> <a href="#produits" class="btn btn-action btn-lg" role="button">EXPLORER &rarr;</a></p>
							</div>
						</div>
					</strong>
				</div>
				<div class="item active">
					<strong>
						<div class="container">
							<div class="row">
								<h1 class="lead">Maison du bois</h1>
								<div class="tagline">N°1 du Bois de chauffage</div>
								<div class="tagline">Bois Éco-Responsable | Coupé à la Main | Travaillé en France</div>
								<p><a href="#produits" class="btn btn-action btn-lg" role="button">EXPLORER &rarr;</a></p>
							</div>
						</div>
					</strong>
				</div>
			</div>
		</div>
	</header>

	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">La magie intemporelle du bois</h2>
		<p class="text-muted">
			Préparez-vous à être inspiré par notre sélection de produits en bois. Découvrez la beauté naturelle, la polyvalence et la durabilité de nos matériaux. Que vous recherchiez des planches, des poutres, des panneaux ou des produits finis, notre site de vente en ligne est votre destination incontournable. Parcourez notre catalogue et laissez-vous séduire par les possibilités infinies qu'offre le bois pour vos projets de construction et d'aménagement intérieur.
		</p>
	</div>
	<!-- Intro-->

	<!-- Highlights - jumbotron -->
	<div id="produits" class="jumbotron top-space">
		<?php
		// Informations de connexion à la base de données
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "VenteBois";

		try {
			// Connexion à la base de données
			$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
			// Configuration pour afficher les erreurs SQL
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// Requête SQL pour récupérer tous les produits
			$sql = "SELECT * FROM produits";

			// Exécution de la requête
			$result = $conn->query($sql);

			// Vérification si des produits ont été trouvés
			if ($result->rowCount() > 0) {
		?>
				<div id="produits" class="container">
					<h2 class="text-center mb-4">NOS PRODUITS</h2>
					<div class="container mt-4">
						<div class="row">
							<?php
							// Parcourir les résultats de la requête
							foreach ($result as $row) {
								$id_produit = $row['id_produit'];
								$nom_produit = $row['nom_produit'];
								$prix_produit = $row['prix_produit'];
								$pathimage_produit = $row['pathimage_produit'];
							?>
								<div class="col-md-6" style="margin: 10px auto;">
									<div class="row card product-card">
										<?php echo '<a href="produit.php?$id=\''.$id_produit.'\'"'?> ><img src="image/<?php echo $pathimage_produit; ?>" style="margin:4%;" class="card-img-top product-img image-fluide" width="70%" height="70%" alt="Image du produit"></a>
										<div class="card-body text-center" style=" display:flex; flex-direction:column;align-items:center;justify-content:center;">
											<div class="col-md-6"><h5 class="card-title"><?php echo $nom_produit; ?></h5></div>
											<div class="col-md-6"><p class="card-text"><strong><?php echo $prix_produit; ?> <em>€</em></strong></p></div>
											<div class="col-md-6"><?php echo '<a href="commande.php?$id=  '   .$id_produit.'    " class="btn btn-primary"'?> > <i  class="fas fa-shopping-cart"></i> Commander</a></div>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div> <!-- /row -->
					</div>
				</div>
		<?php
			} else {
				echo "<p>Aucun produit trouvé.</p>";
			}
		} catch (PDOException $e) {
			// En cas d'erreur de connexion ou d'exécution de la requête
			echo "Erreur : " . $e->getMessage();
		}

		// Fermeture de la connexion
		$conn = null;
		?>
	</div>
	</div> <!-- /container -->
	</div> <!-- /jumbotron -->


	<!-- container -->
	<div class="container">
		<h2 class="text-center top-space">Questions fréquemment posées</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Quels types de bois proposez-vous ?</h3>
				<p>Nous offrons une large gamme de bois de haute qualité pour vos projets de menuiserie et d'aménagement intérieur.</p>
			</div>
			<div class="col-sm-6">
				<h3>Puis-je utiliser votre bois pour des projets de construction ?</h3>
				<p>Nous n'offrons pas actuellement de politique de retour pour les produits. Cependant, cela pourrait changer à l'avenir.</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Livrez-vous dans ma région ?</h3>
				<br>
				<p>Nous évaluons actuellement la possibilité de proposer cette option à l'avenir.</p>
			</div>
			<div class="col-sm-6">
				<h3>Proposez-vous des services de découpe sur mesure ?</h3>
				<p>Oui, nous offrons des services de découpe sur mesure pour répondre à vos besoins spécifiques en matière de dimensions et de formes de bois.</p>
			</div>
		</div> <!-- /row -->
	</div>

	<!-- /container -->

	<div class="container" style="display:flex; align-items:center;justify-content:center;"> 
		
	</div>

	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_linkedin_counter"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<?php require('footer.html'); ?>

	<!-- JavaScript libs -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>


</body>

</html>