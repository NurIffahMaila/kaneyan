<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Kaneyan Information</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #66a859;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 55px;
      box-shadow: 0 0 10px rgba(26, 175, 93, 0.1);
    }
    
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 20px;
    }
    
    button {
      width: 100%;
      padding: 10px;
      background-color: #a4e43d;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    button:hover {
      background-color: #a4e43d;
    }
  </style>
  </head>
<body>
  <div class="container">
    <center><h2>Login</h2></center>
    <form action="loginprocess.php" method="post" enctype="multipart/form-data">
      <label for="username">Username:</label>
      <input type="text" class="form-control" name="username" placeholder="Username" required="required">
      
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      
      <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Login</button>
    </form>
  </div>
</body>
</html>
