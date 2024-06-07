<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
        <a href="index.php">ACCUEIL</a>
            <a href="mon-cv.php">MON CV</a>
            <a href="contact.php">CONTACT</a>
            <a href="realisations.php">REALISATIONS</a>
         
         
        </nav>
    </header>

    <h1>Formulaire de contact🤙 </h1>
    <form action="" method="POST">
        <div>
            <label for="nom">Nom*:</label>
            <input type="text" name="nom" value="nom" required>
        </div>
        <br>
        <div>
            <label for="prenom">prénom*:</label>
            <input type="text" name="prenom" value="prenom" required>
        </div>
        <br>
        <div>
            <label for="telephone">Téléphone</label>
            <input type="tel" name="telephone" value="telephone" >
        </div>
        <br>
        <div>
            <label for="email"><strong>E-mail* :</strong></label>
            <input type="email" name="email" value="email" required>
        </div>
        <br>
        <div>
            <label for="objet">Objet</label>
            <select name="objet" value="objet">
                <option value="plus de musique">Plus d'information</option>
                <option value="question">Question</option>
            </select>
        </div>
        <br>
        <div>
            <label for="message">Message</label>
            <textarea name="message" value="message"></textarea>
        </div>
        <br>
        </div>
        <br>
        <div>
            <input type="submit" value="Envoyer le message"> 
        </div>
        <br>
        
        <?php
    $serveur = "localhost";
    $utilisateur = "root"; 
    $mot_de_passe = ""; 
    $base_de_donnees = "porfolio";
    $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
    if (!$connexion) { 
        die("Échec de la connexion : " . mysqli_connect_error()); 
    } 
    $nom = isset($_POST['nom']) ? $_POST['nom'] : ''; 
    $prenom = isset($_POST['prenom']) ? $_POST['nom'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
    $objet = isset($_POST['objet']) ? $_POST['objet'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (!empty($_POST)) {
        // echo "Formulaire soumis avec succès !"; 
        $sql = "INSERT INTO contact (prenom, nom, email, telephone, message, objet)
        VALUES('$prenom','$nom', '$email', '$telephone', '$message', '$objet')" ;
        mysqli_query($connexion, $sql) ;
    } else {
        echo "Erreur.";
    }

    ?>

    </form>



</body>
</html>