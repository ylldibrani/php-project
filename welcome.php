<?php  
session_start();  
  
if(!$_SESSION['email'])
{  
  
    header("Location: login.php");
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h1>Welcome</h1><br>  
<?php  
echo $_SESSION['email'];  
?>  
<h1><a href="logout.php">Logout here</a> </h1>  
</body>  
  
</html>  