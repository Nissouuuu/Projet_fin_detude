<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login Hopital</title>
</head>
<style>.logo{
    font-size: 25px;
    font-weight: 900;
    
}
.logo a{
    text-decoration: none;
    color: #000;
}
.logo .img{
width: 140px;
height: 140px;
position: absolute;
left:80px;

}
.btn{
    height: 35px;
    background: rgba(76,68,182,0.808);
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin-top: 10px;
    padding: 0px 10px;
    position: relative;
    top: 5px;
    left: 0px;

}
.form-box{
    width: 450px;
    margin: 0px 10px;
    position: relative;
    left:1px;
    top:30px;
}


</style>
<body>
      <div class="container">
      <div class="logo">
        <p><a href="indexH.php"><img class="img" src="images/3.png" alt=""></a> </p>
        </div>
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $username = mysqli_real_escape_string($con,$_POST['username']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Username='$username' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Username'];
                    $_SESSION['nom'] = $row['Nom'];
                    $_SESSION['prenom'] = $row['Prenom'];
                    $_SESSION['email'] = $row['Email'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Faux Nom d'Utilisateur ou Mot De Passe</p>
                       </div> <br>";
                   echo "<a href='indexH.php'><button class='btn'>Retour</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: homeH.php");
                }
              }else{

            
            ?>
           
            <header>Se Connecter</header>
            <form  action="" method="post">
            <div class="field input">
                    <label for="username">Nom d'Utilisateur</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Mot De Passe</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Connecter" required>
                </div>
            </form>
         
        </div>
        <?php } ?>
      </div>
</body>
</html>