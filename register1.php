<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
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
    .register-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .register-container h2 {
      margin-bottom: 20px;
      text-align: center;
    }
    .register-container input[type="text"],
    .register-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .register-container input[type="submit"] {
      width: 100%;
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .register-container input[type="submit"]:hover {
      background-color: #0056b3;
    }
    body{
        background-image: url(https://store.sirclo.com/blog/wp-content/uploads/2022/03/3.-kaos-distro.jpg);
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Registrasi</h2>
    <form action="register.php" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Daftar">
    </form>
  </div>
</body>
</html>
