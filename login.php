<html>  
<head lang="en">  
    <meta charset="UTF-8"> 
    <title>Login</title>  
</head>

<body>  


<br><br><br><br><br><br>
<center>
    <h3>Login</h3>
<form role="form" method="post" action="login.php">
    <input placeholder="E-mail" name="email" type="email" autofocus>  
    <br>
    <input placeholder="Password" name="pass" type="password" value="">
    <br>
    <input type="submit" value="login" name="login" >    
</form>
</center>  
</html>  
  
<?php  
  
include("database/db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  