<?php

$err_s = 0;
include 'inc/connexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])){
    
    if(isset($_POST['sexe'])){
        $Sexe = htmlentities(mysqli_real_escape_string($conn,$_POST['sexe']));
        if(!in_array($Sexe,['Male','Femelle'])){
            $Sexe_error = "S'il vous plait choisir un sexe pas un text !<br>";
            $err_s = 1;
    
        }
        
    }
    if(isset($_POST['Exp'])){
        $exp = htmlentities(mysqli_real_escape_string($conn,$_POST['Exp']));
        if(!in_array($exp,['Mort_Ne'])){
            $exp_error = "S'il vous plait choisir un cas pas un text !<br>";
            $err_s = 1;
    
        }
        
    }

    if(isset($_POST['wilaya'])){
        $wilaya = htmlentities(mysqli_real_escape_string($conn,$_POST['wilaya']));}

        $num = stripcslashes($_POST['Numeroacte']);
        $num = htmlentities(mysqli_real_escape_string($conn,$_POST['Numeroacte']));
  
   $Nom = stripcslashes($_POST['Nom']);
   $Prenom = stripcslashes($_POST['Prenom']);

   if(isset($_POST['birthday_day']) && isset($_POST['birthday_month']) && isset($_POST['birthday_year'])) {
    $birthday_day=(int)$_POST['birthday_day'];
    $birthday_month=(int)$_POST['birthday_month'];
    $birthday_year=(int)$_POST['birthday_year'];
    $Date = htmlentities(mysqli_real_escape_string($conn,$birthday_day.'-'.$birthday_month.'-'.$birthday_year));
}
   if(isset($_POST['death_day']) && isset($_POST['death_month']) && isset($_POST['death_year'])) {
        $death_day=(int)$_POST['death_day'];
        $death_month=(int)$_POST['death_month'];
        $death_year=(int)$_POST['death_year'];
        $Jour = htmlentities(mysqli_real_escape_string($conn,$death_day.'-'.$death_month.'-'.$death_year));
   }
   
   $Nom = htmlentities(mysqli_real_escape_string($conn,$_POST['Nom']));
   $Prenom = htmlentities(mysqli_real_escape_string($conn,$_POST['Prenom']));
  
   if(isset($_POST['Mairie'])){
    $Mairie=$_POST['Mairie'];
    
    }
    else {
        $err_s = 1;
    
    }

if(isset($_POST['Heure'])){
$Heure=$_POST['Heure'];

}
else {
    $err_s = 1;

}
$date=date("Y-m-d");


$insert=mysqli_query($conn,"INSERT INTO `déclarer décès`(`Numero acte`, `Nom`, `Prenom`,`Date De Naissance`,`Sexe`,`exp`,`Wilaya`,`Mairie`, `Jour de Déce`, `Heure De Déce`,`Dated`) VALUES ('$num','$Nom','$Prenom','$Date','$Sexe','$exp','$wilaya','$Mairie','$Jour','$Heure','$date')");
$agent=mysqli_query($conn,"SELECT Email FROM userm");

if(mysqli_num_rows($agent)>0){
    
    
    if($insert)
    {
        try
        {
            $mail = new PHPMailer(true);            
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                  
            $mail->Username   = 'amiradjaber51@gmail.com';                    
            $mail->Password   = 'aubwbqfqcwanmbxf';                           
            $mail->SMTPSecure = 'tls';           
            $mail->Port       = 587;                                   
            $mail->setFrom('amiradjaber51@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = 'Nouveau Deces';
            $mail->Body  = " Nom: $Nom <br> Prenom: $Prenom <br> Date De Naissance:$Date <br> Date De Déces:$Jour ";
            while($get_agent=mysqli_fetch_assoc($agent)){
            $mail->addAddress($get_agent['Email']); }  
            $true=$mail->send();
          
          if($true)
          {
              header('location:Déclarer Décès.php');
              die();
            }
            
            
            
            
        }catch(Exception $e){
            
            
        }
        
    }

}

}



?>