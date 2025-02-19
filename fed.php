<?php
include "db.php";
if (isset($_POST["submit"]))
{
    $name=$_POST["uname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $ch=$_POST["ch"];
    $msg=$_POST["msg"];

    $sql="insert into feedback values ('$name','$email','$phone','$ch','$msg')";
    $rst=mysqli_query($con,$sql);
    if($rst)
    {
        echo"<script> alert('Data Submitted Successfully...!!!')</script>";
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width,initial-scale=1.0">
    <title> Form Card</title>
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <ul class="nav-links">
                <li><a href="index.php">
                  Home</a>
                  </li>
    <style>
        /*style.css */
@import url();

body {
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    height: 100vh;
    background-color: #bde5d2;
    font-family: 'Poppins', sans-serif;
    background-image: url(d.jpeg);
    background-size: cover;

}

.textup {
    text-align: center;
    color: rgb(11, 118, 11);
    font-weight: 700;
}

i {
    margin-right: 3px;
}

.form-box {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(36, 67, 40, 0.8);
    padding: 15px;
    border-radius: 8px;
    width: 500px;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

.radio-group {
    display: flex;
    margin-bottom: 16px;
}

input[type="radio"] {
    margin-right: 8px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 17px;
    color: green;
    font-weight: 600;
}

input,
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
    border-radius: 10px;

}

button {
    background-color: #368b44;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    width: 100%;
    font-size: 15px;
    transition: .2s linear;
}

button:hover {
    background-color: #0a6808;
    border: none;
    transform: translateY(-10px);
}

h1 {
    color: green;
}

    </style>
    <h1></h1>
    <marquee><h2>Feedback Form
    </h2></marquee>
     <div class="form-box">
        <div class="textup">
            <i class="fa fa-solid fa-clock"></i>
            It only takes two minutes!!
        </div>
        <form method="post" action="fed.php">
            <label for="uname">
                <i class="fa fa-solid fa-user"></i>
                Name
            </label>
            <input type="text" id="uname" 
                   name="uname" required>

            <label for="email">
                <i class="fa fa-solid fa-envelope"></i>
                Email Address
            </label>
            <input type="email" id="email" 
                   name="email" required>

            <label for="phone">
                <i class="fa-solid fa-phone"></i>
                Phone No
            </label>
            <input type="tel" id="phone" 
                   name="phone" required>

            <label>
                <i class="fa-solid fa-face-smile"></i>
                Do you satisfy with our service?
            </label>
            <div class="radio-group">
                <input type="radio" id="yes" 
                       name="ch" value="yes" checked>
                <label for="yes">Yes</label>

                <input type="radio" id="no" 
                       name="ch" value="no">
                <label for="no">No</label>
            </div>

            <label for="msg">
                <i class="fa-solid fa-comments" 
                   style="margin-right: 3px;"></i>
                Write your Suggestions:
            </label>
            <textarea id="msg" name="msg" 
                      rows="4" cols="10" required>
            </textarea>
            <button >
                <input  type="submit" name="submit">
            </button>
        </form>
    </div>
</body>

</html>
