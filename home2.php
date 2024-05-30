<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login2.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login2.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Mairie</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;

}
.hero{
    width: 100%;
    min-height: 100vh;
    background: #eceaff;
    color: #525252;

}
nav{
    background: #1a1a1a;
    width: 100%;
    padding: 10px 10%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;

}

.userpic{
    width: 40px;
    border-radius: 50%;
    cursor: pointer;
    margin-left: 1000px;

}

.sub-menu-wrap{
    position: absolute;
    top: 100%;
    right: 10%;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
}
.sub-menu-wrap.open-menu{
        max-height: 400px;


}
.sub-menu{
    background: rgb(255, 255, 255);
    padding: 20px;
    margin: 10px;
}
.user-info{
    display: flex;
    align-items: center;
}
.user-info h3{
font-weight: 500;
}
.user-info img{
    width: 60px;
    border-radius: 50%;
    margin-right: 25px;
}
.sub-menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ccc;
    margin: 15px 0 10px;

}
.sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #525252;
    margin: 12px 0;

}
.sub-menu-link p{
    width: 100%;

}
.sub-menu-link img{
    width: 40px;
    background: #e5e5e5;
    border-radius: 50%;
    padding: 8px;
    margin-right: 15px;
}
.sub-menu-link span{
    font-size: 22px;
    transition: transform 0.5s;
}
.sub-menu-link:hover span{
    transform: translateX(5px);

}
.sub-menu-link:hover p{
    font-weight: 600;

}
.logo .img{
width: 80px;
height: 80px;
position: relative;
right: 1150px;
top: 3px;

}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #dfdfdf;
}
.login-box{
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 440px;
    height: 480px;
    padding: 30px;
    position: relative;
    left: 450px;
}
.login-header{
    text-align: center;
    margin: 20px 0 40px 0;
}
.login-header header{
    color: #333;
    font-size: 30px;
    font-weight: 600;
}

::placeholder{
    font-weight: 500;
    color: #222;
}
.input-field:focus{
    width: 105%;
}
section{
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #555;
}
#check{
    margin-right: 10px;
}
a{
    text-decoration: none;
}
a:hover{
    text-decoration: underline;
}
section a{
    color: #555;
}
.input-submit{
    position: relative;
}
.submit-btn{
    width: 100%;
    height: 60px;
    background: #222;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    transition: .3s;
}
.input-submit label{
    position: absolute;
    top: 45%;
    left: 50%;
    color: #fff;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    cursor: pointer;
}
.submit-btn:hover{
    background: #000;
    transform: scale(1.05,1);
}


</style>
<body>
    <div class="hero">
        <nav>
        <?php
            $select = mysqli_query($conn, "SELECT * FROM `user_form2` WHERE id = '$user_id'") or die('query failed');
            if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
                }
                $image_src = ($fetch['image'] == '') ? 'images/default-avatar2.png' : 'uploaded_img2/' . $fetch['image'];
                ?>
                <img src="<?php echo $image_src; ?>" class="userpic" onclick="toggleMenu()">
                <div class="logo">
                 <p><a href="home2.php"><img class="img" src="images/33.png" alt=""></a> </p>
                </div>


    
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                    <?php
                        $select = mysqli_query($conn, "SELECT * FROM `user_form2` WHERE id = '$user_id'") or die('query failed');
                        if(mysqli_num_rows($select) > 0){
                        $fetch = mysqli_fetch_assoc($select);}
                        if($fetch['image'] == ''){
                         echo '<img src="images/default-avatar2.png">';
                         }else{
                          echo '<img src="uploaded_img2/'.$fetch['image'].'">';
                             }?>
                        <h2><?php echo $fetch['name']; ?></h2>
                    </div>
                    <hr>

                    <a href="update_profile2.php" class="sub-menu-link"> 
                        <img src="images/profile2.png">
                        <p>Profile</p>
                        <span>></span></a>
                       
                    <a href="login2.php" class="sub-menu-link">
                        <img src="images/logout2.png">
                        <p>Déconnecter</p>
                        <span>></span></a>
                        
                </div>

            </div>
        </nav>
        <div class="login-box">
        <div class="login-header">
            <header>Vous Pouvez:</header>
        </div>
        <div class="input-submit">
            <a href="register2.php"><button class="submit-btn" id="submit"></button>
            <label for="submit">Ajouter Un Agent</label></a>
        </div>
        <a href="service2.php">
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Controler Le Service</label></a>
        </div>
    </div>
    </div>
    
  <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu");

    }

  </script>
</body>
</html>