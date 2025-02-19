<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin login details</title>
    <h1>Hello,TITHI</h1>
    <h2>TO View Student Attendence</h2>
    <body>
      <style>
 
body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
  background-color:lightpink;
  background-blend-mode: overlay;
  background-image: url(h.jpeg);

}

        select {
        margin-bottom: 10px;
        margin-top: 10px;
        font-family: cursive, sans-serif;
        outline: 0;
        background: blue;
        color:whitesmoke;
        border: 1px solid crimson;
        padding: 4px;
        border-radius: 9px;

      }
      </style>
    </body>
<form action="#">
      <label for="Semester">Semester</label>
      <select name="Semester" id="sem">
        <option value="select">Select a Semester</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
        <option value="5th">5th</option>
        <option value="6th">6th</option>
      </select>
      <input type="submit" value="Submit" />
      <label for="Department">Department</label>
      <select name="Department" id="Dep">
        <option value="select">Select a Department</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Mechanical">Mechanical</option>
        <option value="Electrical">Electrical</option>
        <option value="Civil">Civil</option>
        <option value="Minining">Minining</option>
      </select>
      <input type="submit" value="Submit" />
      <input type="Date" value="Date"/>
      <input type="submit" value="Submit" />
</form>
 