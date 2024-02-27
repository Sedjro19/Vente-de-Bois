<?php $id = $_GET['$id']; ?>
<!DOCTYPE html>
<html lang="en">

<?php require('head.html') ?>

<body class="home">
	<?php require('header.html'); ?>
	<header id="head" class="secondary"></header>

	<div class="jumbotron top-space" style="margin-top: 10vh;">
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
			$sql = "SELECT * FROM produits WHERE id_produit=" . $id;

			$result = $conn->query($sql);

			// Vérification si des produits ont été trouvés
			if ($result->rowCount() > 0) {
		?>
				<div id="produits" class="container">
					<div class="container mt-4">
						<div class="row">
							<?php
							// Parcourir les résultats de la requête
							foreach ($result as $row) {
								$id_produit = $row['id_produit'];
								$nom_produit = $row['nom_produit'];
								$prix_produit = $row['prix_produit'];
								$quantite_produit = $row['quantite_produit'];
								$pathimage_produit = $row['pathimage_produit'];
								$description_produit = $row['description_produit']; // Ajout de la description du produit
							?>
								<div class="col-12" style="margin: 10px auto;">

									<div class="row">
										<div class="col-sm-6">
											<img src="wp-content/uploads/2023/<?php echo $pathimage_produit; ?>" class="card-img-top product-img" width="70%" alt="Image du produit">
										</div>

										<div class="card col-sm-6" style="padding-left:10%;">
											<h3 class="card-title" style="margin:5% auto 10% auto ;"><?= ucfirst($nom_produit); ?></h3>
											<p class="card-text" style="margin:2% auto 5% auto ;"><strong><?php echo $prix_produit; ?> <em>€</em></strong></p>
											<div style="margin:5% auto;">
												<h3><?= ucfirst('description'); ?></h3>
												<p style="margin:2% auto"><?php echo $description_produit; ?></p> <!-- Ajout de la description du produit -->
												<div style="margin:2% auto">
													<a style="color: black;text-decoration:none;" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapseExample">
														<?= ucfirst('garantie dans 5 ans'); ?> +
													</a>
													<div class="collapse" id="collapse1">
														<p>Nous avons une telle confiance dans la qualité de nos trottinnette electrique que si l’un d’entre eux ne vous convient pas pour quelque raison que ce soit, nous vous rembourserons intégralement votre commande dans un délai d’un jour, sans poser de questions. </p>

													</div>
												</div>
												<div style="margin:2% auto">
													<a style="color: black;text-decoration:none;" role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapseExample">
														<?= ucfirst('garantie de remboursement dans 30 jours'); ?>
													</a>
													<div class="collapse" id="collapse2">
														<p>Nous avons une telle confiance dans la qualité de nos trottinnette electrique que si l’un d’entre eux ne vous convient pas pour quelque raison que ce soit, nous vous rembourserons intégralement votre commande dans un délai d’un jour, sans poser de questions. Si vous avez besoin d’aide, n’hésitez pas à nous contacter à l’adresse contact@cozyhome-fr.com.</p>
													</div>
												</div>
												<div>
													<ul class="product_extras_list">
														<li class="product_extra_item">Il reste <strong><?= $quantite_produit; ?></strong> produits en stock.</li>
														<li class="product_extra_item"><i class="im im im-check-mark-circle-o"></i>Garantie 5 ans (Retour SAV Gratuit)</li>
														<li class="product_extra_item">Livraison Ups 3 jours</li>
														<li class="product_extra_item"><i class="im im im-check-mark-circle-o"></i>30 jours Satisfait ou Remboursé</li>
														<li class="product_extra_item"><strong>En stock, expédiée sous 24/48</strong></li>
													</ul>
												</div>

											</div>
											<a href="" class="btn btn-primary" onclick="ajouterAuPanier(<?php echo $id_produit; ?>)"> <i class="fas fa-shopping-cart"></i> Commander</a>
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
	<!-- /social links -->
	<?php require('footer.html'); ?>

	<!-- JavaScript libs -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

	<?php
require 'vendor/clear.php'; // Inclure le fichier d'autoloading de PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Créer une instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.example.com'; // Adresse du serveur SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'votre_adresse@example.com'; // Adresse e-mail de l'expéditeur
    $mail->Password   = 'votre_mot_de_passe'; // Mot de passe de l'expéditeur
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Destinataire et sujet de l'e-mail
    $mail->setFrom('votre_adresse@example.com', 'Votre Nom');
    $mail->addAddress('destinataire@example.com');
    $mail->Subject = 'Nouvelle commande de produit';

    // Contenu de l'e-mail
    $message = "Détails de la commande :\n\n";
    $message .= "Produit : $nom_produit\n";
    $message .= "Prix : $prix_produit €\n";
    $message .= "Quantité : $quantite_produit\n";
    $mail->Body = $message;

    // Envoyer l'e-mail
    $mail->send();

    echo "<p>La commande a été envoyée avec succès.</p>";
} catch (Exception $e) {
    echo "Une erreur s'est produite lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
}
?>
</body>

</html>