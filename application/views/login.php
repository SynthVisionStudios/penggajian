<!DOCTYPE html>
<html>
<head>
  <title>Login | Aplikasi Penggajian</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        background: url('https://images5.alphacoders.com/134/1344548.png');
        background-size: cover;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #000;
    }
    
    .container {
        background-color: #000;
        border-radius: 30px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 300px;
    }
    
    .login-content {
        padding: 10px;
    }
    
    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #ccc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    input[type="text"],
    input[type="password"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    .btn {
        width: calc(100% - 50px);
        padding: 10px;
        background-color: #000;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 25px;
    }
    
    .btn:hover {
        background-color: #000;
    }
    
    /* Animasi */
    .input-div {
        position: relative;
        overflow: hidden;
        margin-bottom: 15px;
    }
    
    .input-div:before, .input-div:after {
        content: '';
        position: absolute;
        bottom: 0;
        width: 0;
        height: 2px;
        background-color: #4CAF50;
        transition: 0.4s;
    }
    
    .input-div:before {
        left: 50%;
    }
    
    .input-div:after {
        right: 50%;
    }
    
    .input-div.focus:before, .input-div.focus:after {
        width: 50%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-content">
      <center>
      <h1>Login</h1>
      <form class="user" method="POST" action="<?php echo base_url('login') ?>">
        <div class="input-div">
          <input type="text" class="input" name="username" required>
        </div>
        <div class="input-div">
          <input type="password" class="input" name="password" required>
        </div>
        <input type="submit" class="btn" value="Login">
      </form>
      </center>
    </div>
  </div>
</body>
</html>
