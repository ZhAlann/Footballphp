<?php
if (isset($_SESSION['id'])) {
     header("Location: /index.php?Page=Accueil");
}
if (isset($_REQUEST["valid"])) {



     include('../Modele/GestionBDD.php');
     include('../Modele/ClubManager.php');
     include('../Modele/Club.php');
     include('../Modele/UserManager.php');
     include('../Modele/User.php');

     $BDD = new GestionBDD('DB_Ligue');
     $cnx = $BDD->connect();

     $GC = new ClubManager($cnx);
     $tableResultEquipe = $GC->getListClubByName();


     if (isset($_REQUEST['firstname']) && !empty($_REQUEST['firstname'])) {
          $prenom = $_REQUEST['firstname'];
     }

     if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
          $nom = $_REQUEST['name'];
     }

     if (isset($_REQUEST['gender']) && !empty($_REQUEST['gender'])) {
          $sexe = $_REQUEST['gender'];
     }

     if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
          $email = $_REQUEST['email'];
     }

     if (isset($_REQUEST['password']) && !empty($_REQUEST['password'])) {
          $password = $_REQUEST['password'];
          $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);
     }

     if (isset($_REQUEST['pic']) && !empty($_REQUEST['pic'])) {
          $pdp = $_REQUEST['pic'];
     }

     if (isset($_REQUEST['favori']) && !empty($_REQUEST['favori'])) {

          $clubfavori = $_REQUEST['favori'];
     }

     $dateInscription = date('d-m-Y');
     // Performing insert query execution


     $email = $_POST['email']; // Supposons que vous recevez l'email du formulaire d'inscription

     // Effectuer une requête SELECT pour vérifier l'unicité de l'email
     $query = "SELECT COUNT(*) AS count FROM utilisateur WHERE mail_uti = :email";
     $stmt = $cnx->prepare($query);
     $stmt->execute(['email' => $email]);
     $result = $stmt->fetch(PDO::FETCH_ASSOC);

     if ($result['count'] > 0) {
          // L'email existe déjà, affichez un message d'erreur approprié
          echo "Cet email est déjà utilisé. Veuillez en choisir un autre.";
     } else {
          // L'email est unique, procédez à l'inscription
          // Insérez les informations de l'utilisateur dans la base de données

          $userInscription = new User(0, (int) $clubfavori, $nom, $prenom, $sexe,  $password, $dateInscription, $pdp, $email);
          //(int $id_utilisateur , int $id_club_utilisateur, string $nom_utilisateur, string $prenom_utilisateur, string $sexe_utilisateur, string $password_utilisateur, string $date_inscription_utilisateur, string $mail_utilisateur)
          $BDD = new GestionBDD('DB_Ligue');
          $cnx = $BDD->connect();

          $GU = new UserManager($cnx);
          $GU->insertUser($userInscription);
          echo "Vous avez été inscrit !";
     }
} else {
     include('./Modele/GestionBDD.php');
     include('./Modele/ClubManager.php');
     include('./Modele/Club.php');

     $BDD = new GestionBDD('DB_Ligue');
     $cnx = $BDD->connect();

     $GC = new ClubManager($cnx);
     $tableResultEquipe = $GC->getListClubByName();



     include('./View/Inscription.php');

     $cnx = null;
}
