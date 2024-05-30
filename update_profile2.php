<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `user_form2` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = "l'ancien mot de passe ne correspond pas!";
      }elseif($new_pass != $confirm_pass){
         $message[] = 'le mot de passe confirmer ne correspond pas!';
      }else{
         mysqli_query($conn, "UPDATE `user_form2` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'Mot de passe mis à jour avec succès!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img2/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = "l'image est trop grande";
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `user_form2` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image mise à jour avec succès!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile Mairie</title>

   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form2` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img2/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>nom utilisateur :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>ton email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>mets à jour ta photo :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>ancien mot de passe :</span>
            <input type="password" name="update_pass" placeholder="entrez le mot de passe précédent" class="box">
            <span>nouveau mot de passe :</span>
            <input type="password" name="new_pass" placeholder="entrez un nouveau mot de passe" class="box">
            <span>confirmer mot de passe :</span>
            <input type="password" name="confirm_pass" placeholder="confirmer le nouveau mot de passe" class="box">
         </div>
      </div>
      <input type="submit" value="mettre à jour le profil" name="update_profile" class="btn">
      <a href="home2.php" class="delete-btn">Retour</a>
   </form>

</div>

</body>
</html>