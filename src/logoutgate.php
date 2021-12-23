<?php
    session_start();
    $_SESSION['login']=false;  
    session_destroy();
    header("Location:http://upgradetopro.great-site.net/LMS/index.php"); 
?>