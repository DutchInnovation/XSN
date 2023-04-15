<!DOCTYPE html>
<html>
  <head>
    <title>Sign In / Create Account</title>
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
    <div class="container">
      <div class="left">
        <h1>Sign In</h1>
        <form>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
          <br>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <br>
          <button type="submit">Sign In</button>
        </form>
      </div>
      <hr>
      <div class="right">
        <h1>Create Account</h1>
        <form>
          <p>
            It's free to join and easy to use.
            Continue on to create your Steam account and get Steam,
            the leading digital solution for PC and Mac gamers.
          </p>
          <a href="create.php">Create Account</a>
        </form>
      </div>
    </div>
  </body>
</html>
