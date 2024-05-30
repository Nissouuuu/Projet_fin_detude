<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form2` WHERE name = '$name' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home2.php');
   }else{
      $message[] = 'nom utilisateur ou mot de passe incorrect!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Mairie </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<style>
.logo{
    font-size: 25px;
    font-weight: 900;
    position: relative;
    bottom: 40px;
    
}
.logo a{
    text-decoration: none;
    color: #000;
}
.logo .img{
width: 140px;
height: 140px;
position: relative;
right: 330px;
top: -180px;

}</style>
<body>
   
<div class="form-container">
<div class="logo">
        <p><a href="login2.php"><img class="img" src="images/3.png" alt=""></a> </p>
        </div>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Connecter maintenant</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Nom Utilisateur" class="box" required>
      <input type="password" name="password" placeholder="Mot De Passe" class="box" required>
      <input type="submit" name="submit" value="Connecter" class="btn">
   </form>

</div>

</body>
</html>