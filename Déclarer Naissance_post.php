<?php

$err_s = 0;
include 'inc/connexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])){

    $description = stripcslashes($_POST['description']);
    $description = htmlentities(mysqli_real_escape_string($conn,$_POST['description']));

    if(isset($_POST['sexe'])){
        $Sexe = htmlentities(mysqli_real_escape_string($conn,$_POST['sexe']));
        if(!in_array($Sexe,['Male','Femelle'])){
            $Sexe_error = "S'il vous plait choisir un sexe pas un text !<br>";
            $err_s = 1;
    
        }
        
    }
    if(isset($_POST['Exp'])){
        $exp = htmlentities(mysqli_real_escape_string($conn,$_POST['Exp']));
        if(!in_array($exp,['X','Fille_Mere'])){
            $exp_error = "S'il vous plait choisir un cas pas un text !<br>";
            $err_s = 1;
    
        }
        
    }
    if(isset($_POST['wilaya'])){
        $wilaya = htmlentities(mysqli_real_escape_string($conn,$_POST['wilaya']));}
  
   $Nom = stripcslashes($_POST['Nom']);
   $Prenom = stripcslashes($_POST['Prenom']);
   $Nom = htmlentities(mysqli_real_escape_string($conn,$_POST['Nom']));
   $Prenom = htmlentities(mysqli_real_escape_string($conn,$_POST['Prenom']));
   if(isset($_POST['birthday_day']) && isset($_POST['birthday_month']) && isset($_POST['birthday_year'])) {
        $birthday_day=(int)$_POST['birthday_day'];
        $birthday_month=(int)$_POST['birthday_month'];
        $birthday_year=(int)$_POST['birthday_year'];
        $Jour = htmlentities(mysqli_real_escape_string($conn,$birthday_day.'-'.$birthday_month.'-'.$birthday_year));
   }
   
 
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
if(isset($_POST['nump'])){
    $Nump=$_POST['nump'];

}
   $Prenomp = stripcslashes($_POST['prenomp']);
   $Prenomp = htmlentities(mysqli_real_escape_string($conn,$_POST['prenomp']));
   if(isset($_POST['birthday_day_p']) && isset($_POST['birthday_month_p']) && isset($_POST['birthday_year_p'])) {
    $birthday_day_p=(int)$_POST['birthday_day_p'];
    $birthday_month_p=(int)$_POST['birthday_month_p'];
    $birthday_year_p=(int)$_POST['birthday_year_p'];
    $Jourp = htmlentities(mysqli_real_escape_string($conn,$birthday_day_p.'-'.$birthday_month_p.'-'.$birthday_year_p));
}

if(isset($_POST['numm'])){
    $Numm=$_POST['numm'];

}
   $Nomm = stripcslashes($_POST['nomm']);
   $Prenomm = stripcslashes($_POST['prenomm']);
   $Nomm = htmlentities(mysqli_real_escape_string($conn,$_POST['nomm']));
   $Prenomm = htmlentities(mysqli_real_escape_string($conn,$_POST['prenomm']));
   if(isset($_POST['birthday_day_m']) && isset($_POST['birthday_month_m']) && isset($_POST['birthday_year_m'])) {
    $birthday_day_m=(int)$_POST['birthday_day_m'];
    $birthday_month_m=(int)$_POST['birthday_month_m'];
    $birthday_year_m=(int)$_POST['birthday_year_m'];
    $Jourm = htmlentities(mysqli_real_escape_string($conn,$birthday_day_m.'-'.$birthday_month_m.'-'.$birthday_year_m));
}
$date=date("Y-m-d");
$insert=mysqli_query($conn,"INSERT INTO `déclarer naissance`(`Nom`, `Prenom`, `Sexe`,`exp`,`Description`,`Wilaya`,`Mairie`, `Jour De Naissance`, `Heure de Naissance`,`Numero acte pére`,`Prenom Pére`,`Date naissance pére`,`Numero acte Mére`,`Nom Mére`,`prenom Mére`,`Date naissance Mére`,`Daten`) VALUES ('$Nom','$Prenom','$Sexe','$exp','$description','$wilaya','$Mairie','$Jour','$Heure','$Nump','$Prenomp','$Jourp','$Numm','$Nomm','$Prenomm','$Jourm','$date')");
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
            $mail->Subject = 'Nouveau Naissance';
            $mail->Body  = " Nom: $Nom <br> Prenom: $Prenom <br> Date De Naissance: $Jour ";
            while($get_agent=mysqli_fetch_assoc($agent)){
            $mail->addAddress($get_agent['Email']); }  
            $true=$mail->send();
          
          if($true)
          {
              header('location:Déclarer Naissance.php');
              die();
            }
            
            
            
            
        }catch(Exception $e){
            
            
        }
        
    }

}
    
}


?>