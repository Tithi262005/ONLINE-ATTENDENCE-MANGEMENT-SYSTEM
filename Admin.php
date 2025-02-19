<?php
include "db.php";
if (isset($_POST["login"]))
{
    $uname=$_POST["uname"];
    $pass=$_POST["pass"];

    $sql="select * from admin where uid='$uname' && pass='$pass' ";
    $rst=mysqli_query($con,$sql);
    /*$row = mysqli_fetch_array($rst, MYSQLI_ASSOC);*/   
    $count = mysqli_num_rows($rst);

   if($count)
    {
        
        $login=true;
        session_start();
        $_SESSION['login']=true;
        $_SESSION['uname']=$uname;
        header("location:apnl.php");

    }
    else
    {
        echo"<script> alert('Invalid Details...!!!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Admin Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(45deg, #ffffff, #e0e0e0);
    background-image: url('x.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
}
 
.container {
    width: 75%;
    max-width: 400px;
}
 
.login-form {
    background: rgba(255, 255, 255, 0.25);
    border-radius: 15px;
    backdrop-filter: blur(5px);
    padding: 20px;
}
 
.login-form h2 {
    text-align: center;
    color: #f4eeee;
}
 
.input-group {
    margin: 20px;
}
 
.input-group label {
    display: block;
    margin-bottom: 5px;
    color: #f1eaea;
}
 
::placeholder {
    color: #e5e5e5;
}
 
.input-group input {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: rgba(245, 240, 240, 0.15);
    backdrop-filter: blur(11px);
    color: #f7efef;
}
 
.input-group input:focus {
    outline: none;
    background: rgba(255, 255, 255, 0.3);

}
 
button {
    margin: 10px;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(45deg, #8686e3, #3b3494);
    color: #fff;
    font-weight: bold;
    cursor: pointer;
}
 
button:hover {
    background: linear-gradient(45deg, #5d5e5d, #a4a4a7);
}
    </style>
    <div class="container">
        <form  method="POST" action="admin.php" class="login-form">
            <h2> Admin Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" placeholder="Email or Name"
                       name="uname" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Password"
                       id="password" name="pass" required>
            </div>
            <button type="submit" name="login">Log In</button>
        </form>
    </div>
</body>
 
</html>