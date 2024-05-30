<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: indexM.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background: #e4e9f7;
}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
.box{
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
}

.form-box{
    width: 450px;
    margin: 0px 10px;
}
.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}
.form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;

}
.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
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
    top: 16px;
    left: 70px;
}

.btn:hover{
    opacity: 0.82;
}
.submit{
    width: 100%;
}
.links{
    margin-bottom: 15px;
}

/********* Home *****************/

.nav{
    background: #fff;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    line-height: 60px;
    z-index: 100;
}
.logo{
    font-size: 25px;
    font-weight: 900;
    
}

.logo .img{
width: 80px;
height: 80px;

position: relative;
right: 160px;

}
.logo a{
    text-decoration: none;
    color: #000;
}
.right-links a{
    padding: 0 10px;
}
main{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 60px;
}
.main-box{
    display: flex;
    flex-direction: column;
    width: 70%;
}
.main-box .top{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
.bottom{
    width: 100%;
    margin-top: 20px;
}
.btn1{
    height: 60px;
    background: rgba(4, 3, 12, 0.808);
    border: 0;
    border-radius: 35px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin: 10px;
    padding: 0px 10px;
}
.btn2{
    height: 60px;
    background: rgba(3, 3, 12, 0.808);
    border: 0;
    border-radius: 35px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin: 10px;
    padding: 0px 10px;
}
#btn3{
    
    background: rgba(3, 3, 12, 0.808);
    border: 0;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    
}
.btn1:hover{
    opacity: 0.82;
}
.btn2:hover{
    opacity: 0.82;
}
#btn3:hover{
    opacity: 0.82;
}
.butons{
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
   top:40px;
   right:20px;

}







@media only screen and (max-width:840px){
    .main-box .top{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .top .box{
        margin: 10px 10px;
    }
    .bottom{
        margin-top: 0;
    }
    .logo img{
        position: relative;
        left: -30px;
    }
}
.message{
    text-align: center;
    background: #f9eded;
    padding: 15px 0px;
    border:1px solid #699053;
    border-radius: 5px;
    margin-bottom: 10px;
    color: red;
}



body{
    background: #e4e9f7;
    overflow: hidden;
}



</style>
<body>
    <div class="nav">
        <div class="logo">
        <p><a href="homeM.php"><img class="img" src="images/3.png" alt=""></a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM userm WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Prenom = $result['Prenom'];
                $res_id = $result['Id'];
            }
            
            ?>

            <a href="php/logoutM.php"> <button class="btn">Déconnecter</button> </a>

        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Salut <b><?php echo $res_Prenom ?></b>, Bienvenue</p>
            </div>
            <div class="box">
                <p>Ton email est <b><?php echo $res_Email ?></b>.</p>
            </div>
            <a href="HistoriqueM.php">
            <div id="btn3" class="box" >Historique</div></a>
            
          </div>
       </div>

    </main>
    <div class="butons" >
    <a href="archive naissance.php">
        <button class="btn1" >Archive Naissance</button></a>
        <a href="archive déces.php">
        <button class="btn2" >Archive Déces</button></a>
       </div>
</body>
</html>