<?php
            function envoieEmail($image){
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Récupérer les données du formulaire
                    $nomProduit = $_POST["nom_produit"];
                    $quantiteProduit = $_POST["quantite"];
                    $prixProduit = $_POST["prix"];
                    $image_produit = $image;
                    $email = $_POST["email"];
                    $number = $image = $_POST['number'];
                

                // Adresse e-mail du destinataire
                $email_destinataire = 'terenceaustintin@gmail.com';
    
                // Sujet de l'e-mail
                $subject = 'Nouveau message du formulaire de contact';
    
                // Contenu de l'e-mail
                $body = 'Nom du email: '.$email.'\n
                        Nom du produit: '.$number.'\n
                        Nom du produit: '.$nomProduit.'\n
                         Prix du produit: '.$prixProduit*$quantiteProduit.'\n
                         Quantité du produit:\n'.$quantiteProduit.'\n 
                         Image du produit:\n'.$image_produit;
    
                // En-têtes de l'e-mail
                $headers = "";
                $headers = "MIME-version:1.0\n";
                $headers = "Content-type:text/html;charset=uft-8 \n";
    
                $result = mail($email_destinataire, $subject, $body, $headers);
                // Envoi de l'e-mail
                if ($result) {
                   header('commandValidate.php');
                } else {
                    echo "Une erreur s'est produite lors de l'envoi du message.";
                }
            }
        }
        
?>
<?php $id = $_GET['$id']; ?>
<!DOCTYPE html>
<html lang="en">

<?php require('head.html'); ?>

<body>
    <!-- Fixed navbar -->
    <?php require('header.html'); ?>
    <!-- /.navbar -->

    <header id="head" class="secondary"></header>

    <div class="container">
        <div class="text-center" style="margin:5% auto;"><h2 class="mt-5">Formulaire de Commande</h2></div>
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
                <form action="#" method="post" enctype="multipart/form-data">
                    <?php
                    // Parcourir les résultats de la requête
                    foreach ($result as $row) {
                        $nom_produit = $row['nom_produit'];
                        $prix_produit = $row['prix_produit'];
                        $quantite_produit = $row['quantite_produit'];
                        $pathimage_produit = $row['pathimage_produit'];
                        ?>

                        <div class="row">
                                <div class="form-group col-sm-6 ">
                                    <img src="image/<?php echo $pathimage_produit; ?>" class="card-img-top product-img" width="60%" alt="Image du produit">
                                    
                                </div>

                            <div class="col-sm-6">
                                    <div class="form-group"> 
                                        <input type="text" name="nom_produit" value="<?php echo $nom_produit; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="quantite">Quantité</label>
                                        <input type="number" class="form-control" id="quantite" name="quantite" min="1" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="prix">Prix Unitaire</label>
                                        <input type="text" class="form-control" id="prix" value="<?php echo $prix_produit; ?>" name="prix" min="0.01" step="0.01" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" min="0.01" step="0.01" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">Numéro </label>
                                        <input type="text" class="form-control" id="number" name="number" placeholder="Votre numéro" min="0.01" step="0.01" required>
                                    </div>                            
                            </div>
                            <div class="text-center"><a href="commandValidate.php"><button type="submit" class="btn btn-primary"  onsubmit="<?php envoieEmail($pathimage_produit)?>">Envoyer Commande</button></a></div>
                        </div>

                        <?php
                    }
                } else {
                    echo "<p>Aucun produit trouvé.</p>";
                }
            } catch (PDOException $e) {
                // En cas d'erreur de connexion ou d'exécution de la requête
                echo "Erreur : " . $e->getMessage();
            }
            ?>
        </form>

    </div>

    <?php require('footer.html'); ?>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
    <script src="assets/js/google-map.js"></script>

</body>

</html>
