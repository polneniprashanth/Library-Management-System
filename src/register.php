<?php
    session_start();
    if(isset($_POST['Create'])){
        $id=$_POST['rollno'];
        $conn=new mysqli('sql106.epizy.com','epiz_30634138','LF2rgUnWYY6lt','epiz_30634138_library');
        $sqls="SELECT * FROM register WHERE Id='$id'";
        $re=$conn->query($sqls);
        if($roww=mysqli_fetch_array($re)){
            header("Location:http://upgradetopro.great-site.net/LMS/register.php?msg1=Account already Exists!!!"); 
        }
        if(($_POST['pass1']==$_POST['pass2'])&&(strlen($_POST['pass1'])>=4)){
            $fname=$_POST['fname'];
            $sname=$_POST['sname'];
            $branch=$_POST['branch'];
            $email=$_POST['email'];
            $pass=$_POST['pass1'];
            $sqll="insert into register values('$fname','$sname','$id','$branch','$email','$pass')";
            $res=$conn->query($sqll);
            header("Location:http://upgradetopro.great-site.net/LMS/index.php");
        }
        else if(strlen($_POST['pass1'])<4){
            header("Location:http://upgradetopro.great-site.net/LMS/register.php?msg1=Password length is short");
        }
        else{
            header("Location:http://upgradetopro.great-site.net/LMS/register.php?msg1=Passwords didn't match");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form action="#" method="post">
                    <div class="login__field"><input type="text" class="login__input" placeholder="First Name" name="fname" id="" required></div>
                    <div class="login__field"><input type="text" class="login__input" placeholder="Second Name" name="sname" id="" required></div>
                    <div class="login__field"><input type="text" class="login__input" placeholder="Roll Number" name="rollno" id="" required></div>
                    <div class="login__field"><input type="text" class="login__input" placeholder="Branch" name="branch" id="" required></div>
                    <div class="login__field"><input type="email" class="login__input" placeholder="Email" name="email" id="" required></div>
                    <div class="login__field"><input type="password" class="login__input" placeholder="Password" name="pass1" id="" required></div>
                    <div class="login__field"><input type="password" class="login__input" placeholder="Confirm Password" name="pass2" id="" required></div>
                    <input type="submit" class="login__submit" style="color:grey" value="Create" name="Create">
                    <div class="reg"><a style="color:black;" href="index.php">Already registered?</a></div>
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