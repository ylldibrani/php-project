<html>  
<head lang="en">  
    <meta charset="UTF-8">
    <title>Registration</title>  
</head>  
<body>    

<center>
    <h3>Registration</h3>  
        <form role="form" method="post" action="registration.php">  
            <input placeholder="Username" name="name" type="text" autofocus>
                <br>
            <input placeholder="E-mail" name="email" type="email" autofocus>
                <br>
            <input placeholder="Password" name="pass" type="password" value="">
                <br>
            <input type="submit" value="register" name="register" >  
        </form>  
        <b>Already registered ?</b> <br></b><a href="login.php">Login here</a>
</center>
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("database/db_conection.php");
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];
  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  

    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>  