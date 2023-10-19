 <?php
    ?>
 <div class="container">
     <div class="row">
         <div class="col-2"></div>
         <div class="col-8">
             <form class="box" action="" method="post" name="login">

                 <h1 class="box-title">Connexion</h1> <br>
                 <input type="email" class="box-input" name="username" placeholder="Mail">
                 <input type="password" class="box-input" name="password" placeholder="Mot de passe"> <br>
                 <br><input type="submit" value="Connexion " name="submit" class="box-button">
                 <p class="box-register">Vous êtes nouveau ici? <a href="http://localhost:3000/index.php?Page=Inscription">S'inscrire</a></p>
                 <?php if (!empty($message)) { ?>
                     <p class="errorMessage"><?php echo $message; ?></p>
                 <?php } ?>
             </form>
         </div>
     </div>
 </div>