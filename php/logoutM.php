<?php
      session_start();
      session_destroy();
      header("Location: ../indexM.php");
?>