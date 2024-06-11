<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .login-container input[type="submit"] {
      width: 100%;
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .login-container input[type="submit"]:hover {
      background-color: #0056b3;
    }
    body{
        background-image: url(https://store.sirclo.com/blog/wp-content/uploads/2022/03/3.-kaos-distro.jpg);
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <div class="register">
        <label for="register">Belum punya akun?</label>
        <a href="register1.php">Register</a>
      </div>
      <a href="login.php"><button>Login</button></a>
    </form>
  </div>
</body>
</html>
