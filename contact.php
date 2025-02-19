
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Conact Page</title>
    <style> 
      body{
        margin: 0;
        padding: 0;
        background-color: sandybrown;
        font-family: Arial;
        background-image: url('s1.jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
      
      }
      .header{
        height:auto;     
       background-color: brown;
      }
      .phone{
        height: 50px;
        background-color: 
      }
      .phone a{
        color: white ;
        display:block;
        text-align: center;
        line-height: 50px;
        font-weight:bold ;
        text-decoration: none;
        letter-spacing: 3px;

      }
      .text{
        height: 50px;
        background-color: 
      }
      .text marquee{
        color: white;
        font-size: 20px;
        line-height: 50px;
        font-style: italic;
      }
      .icon{
        height: 50px;
        background-color: 
      }
      .icon ol {
        text-align: center ;
     }
      .icon ol li{
        display: inline-block;
      }
      .icon ol li a{
        color: white;
        text-decoration: none;
        line-height: 50px;
        margin-left: 3px;
      }
      .fa-facebook{
        color: white;
        background-color: blue;
        padding: 3px 5px;
        border-radius: 3px;
      }
      .fa-whatsapp{
        color: white;
        background-color: green;
        padding: 3px 5px;
        border-radius: 3px;
     }
     .fa-twitter{
         color: white;
        background-color: yellow;
        padding: 3px 5px;
        border-radius: 3px;
      }
      .fa-instagram{
        color: white;
        background-color: pink;
        padding: 3px 5px;
        border-radius: 3px;
      }
      .menu{
        height: 80px;
        background-color: pink;
      }
      .logo{
        height: 80px;
        background-color: babypink;
      }
      .mbutton{
        height: 80px;
        background-color:babypink;
      }
      .search{
        height: 80px;
        background-color: babypink;
      }
      .mbutton ol{
        text-align: center;

      }
      .mbutton ol li{
        display: inline-block;

      }
      .mbutton ol li a{
        color: white;
      line-height: 80px;
      background-color:blue;
      margin-left: 5px;
      text-decoration:none;
      padding: 3px 5px;
    }
    .mbutton ol li a: hover{
      color: yellow;
      background-color: bisque;

    }
    .container {
  width: 950px;
  margin: 80px auto;
  color:white;
  line-height: 1.5;
}

.text-center {
  text-align: center;
}

.content {
  display: flex;
  margin-top: 40px;
}

.icon {
  background-color:white ;
  border-radius: 30px;
  padding: 15px;
  vertical-align: top;
}

.contact-info {
  display: inline-block;
  padding: 4px 20px 0px 20px;
}

.address-line {
  margin-top: 40px;
}

.col-1 {
  width: 530px;
}

.col-2 {
  flex: 1 1 auto;
  background-color: white;
}

.form-container {
  color: #000;
  padding: 30px;
}

.contact-info-title {
  color: #01bdd4;
}

.form-row {
  padding-bottom: 30px;
}

.form-field {
  width: 100%;
  border: none;
  border-bottom: 1px solid #000;
}

.send-btn {
  border: 0px;
  padding: 12px 26px;
  background-color: #01bdd4;
  color: white;
}

@media all and (max-width: 1024px) {
  .container {
    width: auto;
    padding: 30px;
  }
   .col-1 {
    width: 360px;
  } 
}

@media all and (max-width: 700px) {
  .content {
    display: block;
  }
  .col-2 {
    margin-top: 40px;
  } 
  .col-1{
  width:100%;
  }
}

@media all and (max-width: 500px) {
  .container {
    padding: 10px;
  }
}
    </style>
  </head>
  
      


      
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
<?php
include"db.php";
if(isset($_POST['Send']))
{
  $name=$_POST['name'];
  echo $name;
  $email=$_POST['email'];
  $msg=$_POST['msg'];
  $sql="INSERT INTO contact(Name,Email,Message)VALUES('$name','$email','$msg')";
  $rst=mysqli_query($con,$sql);
  
  if($rst)
    {
        echo"<script> alert('Thank You for Contact us...!!!')</script>";

        
    }
    
}
?>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Contact - Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <ul class="nav-links">
                <li><a href="index.php">
                  Home</a>
                  </li>
  <style>



  </style>
  <div class="container">
    <div class="text-center">
      <h1>Contact Us</h1>
      <div>
        Want To Know More Reach out to us !<div>Get In Touch
      </div>
      </div>
    </div>
    <div class="content">
      <div class="col-1">
        <div class="address-line">
          <img alt="location" src="lc.jpeg" class="icon">
          <div class="contact-info">
            <div class="contact-info-title">Address</div>
            <div>Asansol kalipahri,</div>
            <div>Bagbandi,West bengal</div>
            <div>713339.</div>
          </div>
        </div>
        <div class="address-line">
          <img alt="location" src="cl.jpeg" class="icon">
          <div class="contact-info">
            <div class="contact-info-title">Phone</div>
            <div>12523-4566-8954-8956.</div>
          </div>
        </div>
        <div class="address-line">
          <img alt="location" src="mi.jpeg" class="icon">
          <div class="contact-info">
            <div class="contact-info-title">Email</div>
            <div>attendencemangement@gmail.com</div>
          </div>
        </div>
      </div>
      <div class="col-2">
        <form method="post" action="contact.php">
          <div class="form-container">
            <h2>Send Message</h2>
            <div class="form-row">
              <label>Full Name</label>
              <div>
                <input  name="name" type="text" class="form-field">
              </div>
            </div>
            <div class="form-row">
              <label>Email</label>
              <div>
                <input name="email" type="text" class="form-field">
              </div>
            </div>
            <div class="form-row">
              <label>Type your message...</label>
              <div>
                <input name="msg" type="text" class="form-field">
              </div>
            </div>
            <input name ="Send"  type="submit"  class="send-btn" >
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>