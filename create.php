<!-- <?php include 'header.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Sign Up</h1>
    <form class="signup-form">
      <img src="assets/logo.png" alt="Logo" class="formlogo" height="125">
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
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Instagram Sign Up</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #fafafa;
		}
		
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0,0,0,.1);
		}
		
		h1 {
			text-align: center;
			font-weight: 600;
			color: #262626;
			margin-bottom: 20px;
		}
		
		form {
			display: flex;
			flex-direction: column;
		}
		
		label {
			font-size: 14px;
			font-weight: 600;
			color: #8e8e8e;
			margin-bottom: 5px;
		}
		
		input {
			padding: 10px;
			border: 1px solid #dbdbdb;
			border-radius: 3px;
			margin-bottom: 10px;
			font-size: 14px;
			color: #262626;
			background-color: #fafafa;
		}
		
		button {
			padding: 10px;
			background-color: #3897f0;
			color: #fff;
			border: none;
			border-radius: 3px;
			font-size: 14px;
			font-weight: 600;
			cursor: pointer;
			margin-top: 10px;
		}
		
		.signup {
			text-align: center;
			font-size: 14px;
			color: #8e8e8e;
			margin-top: 20px;
		}
		
		.signup a {
			color: #3897f0;
			text-decoration: none;
			font-weight: 600;
		}
	</style>
</head>
<body>
	<div class="container">
    <img src="assets/logo.png" alt="Logo" height="125" style="margin: 0px auto; display: block;">
  <h1>Sign Up</h1>
		<form>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" required>
			
			<label for="email">Email</label>
			<input type="email" id="email" name="email" required>
			
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>
			
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			
			<button type="submit">Sign up</button>
		</form>
		<div class="signup">
			Already have an account? <a href="#">Log in</a>
		</div>
	</div>
</body>
</html>
