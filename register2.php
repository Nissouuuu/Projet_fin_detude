

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Mairie</title>

   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
   <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tel=$_POST['tel'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM userm WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>Ce email est déjà utilisée, essayez-en un autre s'il vous plaît!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO userm(Nom,Prenom,Username,Email,Password,Télephone) VALUES('$nom','$prenom','$username','$email','$password','$tel')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>inscription réussie!</p>
                  </div> <br>";
            echo "<a href='home2.php'><button class='btn'>Retour</button>";
         

         }

         }else{
         
        ?>
      <h3>Ajouter Profile</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="nom" id="nom" autocomplete="off" placeholder="Nom" class="box" required>
      <input type="text" name="prenom" id="prenom" autocomplete="off" placeholder="Prenom" class="box" required>
      <input type="text" name="username" id="username" autocomplete="off" placeholder="Nom Utilisateur" class="box" required>
      <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" class="box" required>
      <input type="password" name="password" id="password" autocomplete="off" placeholder="Mot De Passe" class="box" required>
      <input type="text" name="tel" id="tel" autocomplete="off" placeholder="Numero Télephon" class="box" required>
      
      <input type="submit" name="submit" value="Registre" class="btn">
   </form>
   <?php } ?>
</div>

</body>
</html>