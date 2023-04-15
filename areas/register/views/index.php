<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header>
        <div class="logo">
          <a href="index.php">
            <img src="logo.png" alt="Logo"  height="176">
          </a>
        </div>
        <nav>
          <ul>
            <li><a href="#">Store</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </nav>
        <div>
            <a href="login.php">login</a> | language
            </div>
      </header>
    <h1>Sign Up</h1>
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <button type="submit">Sign Up</button>
    </form>
  </body>
</html>
