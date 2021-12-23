<?php
    session_start();
    $user=$_SESSION['user'];
    $pass=$_SESSION['pass'];
    $conn=new mysqli('sql106.epizy.com','epiz_30634138','LF2rgUnWYY6lt','epiz_30634138_library');
    $sql="select * from register where email='$user' and password='$pass'";
    $res=$conn->query($sql);
    $sql2="select * from admin where email='$user' and password='$pass'";
    $res2=$conn->query($sql2);
    if($r2=mysqli_fetch_array($res2)){
        $_SESSION['login']=true;
        header("Location:http://upgradetopro.great-site.net/LMS/adminhome.php");
    }
    else if($r1=mysqli_fetch_array($res)){
        $_SESSION['fn']=$r1['fname'];
		$_SESSION['ln']=$r1['lname'];
		$_SESSION['id']=$r1['Id'];
		$_SESSION['br']=$r1['Branch'];
        $_SESSION['login']=true;
        header("Location:http://upgradetopro.great-site.net/LMS/home.php");
    }
    else{
        header("Location:http://upgradetopro.great-site.net/LMS/index.php?message=Invalid Username / Password");
    }
?>
