<?php

session_start();


session_unset();


session_destroy();


header("Location: ../public/asset/Login-Page.php"); 
exit();
?>
