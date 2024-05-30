<?php 
    session_start();
    include("php/config.php");

   

    if(isset($_GET['c']) && !empty($_GET['c']))
    {
        $id_persone=$_GET['c'];
        $delete_persone=mysqli_query($con,"DELETE FROM `userm` WHERE id='$id_persone' LIMIT 1");

        if($delete_persone)
        {
            header('location:Service2.php');
            die;
        }
    }




?>