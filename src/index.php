<?php
    session_start();
    if(isset($_POST['login'])){
        $_SESSION['user']=$_POST['username1'];
        $_SESSION['pass']=$_POST['password1'];
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
        //header("Location:http://upgradetopro.great-site.net/LMS/gate.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Library-NITC</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="#" method="post">
                    <?php if(!empty($_GET['message'])){$bd=$_GET['message']; echo '<h4 style="color:red">'.$bd.'</h4>';} ?>
                    <div class="login__field">
                        <input type="email" class="login__input" placeholder="Username" name="username1" id="1" required>
                    </div>
                    <div class="login__field">
                        <input type="password" class="login__input" placeholder="Password" name="password1" id="" required>
                    </div>
                    <input type="submit" class="login__submit" style="color:grey" value="Login" name="login">
                    <div class="reg"><a style="color:black" href="register.php">Not registered?</a></div>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>
</html>