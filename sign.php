<?php
include "db.php";
if (isset($_POST["Submit"]))
{
  $name=$_POST["name"];
  $roll=$_POST["roll"];
  $sem=$_POST["sem"];
  $dept=$_POST["dept"];
  $ph=$_POST["phn"];
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $sql="insert into student values ('$name','$roll','$sem','$dept','$ph','$email','$pass')";
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
    <title>Sign Up </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <style>
      body{
  margin: 0;
  padding: 0;
  font-family: Roboto;
  background-repeat: no-repeat;
  background-size: cover;
  background: linear-gradient(45deg, #ffffff, #e0e0e0);
  height: 100vh;
  overflow: hidden;
  background-image: url(a.jpeg);
}

.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 29vw;
  background: rgba(255, 255, 255, 0.25);
  backdrop-filter: blur(5px);
  border-radius: 10px;
}

.center h1{
  text-align: center;
  padding: 0 0 5px 0;
  border-bottom: 1px solid silver;
}

.center form{
  padding: 0 20px;
  box-sizing: border-box;
}

form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}

.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}

.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform:;
  font-size: 16px;
  pointer-events: none;
  color: black;
}

.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0px;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:Valid ~ span::before{
  width: 100%;
}

.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}

.pass:hover{
  text-decoration: underline;
}

input[type="Submit"]{
  width: 80%;
  height: 50px;
  border: 1px solid;
  border-radius: 25px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;

}

input[type="Submit"]:hover{
  background: #2691d9;
  color: #e9f4fb;
  transition: .5s;
  height: 80px;
}

.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}

.signup_link a{
  color: #2691d9;
  text-decoration: none;
}

.signup_link a:hover{
  text-decoration: underline;
}

.HomeAbout{
  width: 100vw;
  height: 25vh;
}
    </style>
    <div class="container">
      <div class="center">
          <h1>Sign up</h1>
          <form method="POST" action="sign.php">
              <div class="txt_field">
                  <input type="text" name="name" required>
                  <span></span>
                  <label>Name</label>
              </div>
              <div class="txt_field">
              <input type="number" name="roll" required>
                  <label>Roll-no</label>
                </div>
                <div class="txt_field">
                <input type="number" name="sem" required>
                <label>Semester</label>
                </div>
                <div class="txt_field">
                <input type="Text" name="dept" required>
                <label>Department</label>
                </div>
                <div class="txt_field">
                <input type="number" name="phn" required>
                <label>Phone</label>
                </div>

              <div class="txt_field">
                  <input type="email" name="email" required>
                  <label>Email</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="pass" required>
                  <label>Password</label>
              </div>
              <div class="txt_field">
              <input name="Submit" type="Submit" value="Sign Up">
                  <a href="login.php">Login Here</a>
                </div>
              </div>
          </form>
      </div>
  </div>
  </body>
</html>