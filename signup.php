<?php 
// include("./controller/user.php")
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>User Login</h1>
    <span><?php if (isset($emptyForm_error)) echo $emptyForm_error;?></span>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); $_POST = array();?>" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username"/>
        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
      </div>
       <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your password">
        <span class="text-danger"><?php if (isset($email_error)) echo $name_error; ?></span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
        <span class="text-danger"><?php if (isset($password_error)) echo $name_error; ?></span>
      </div>
     
      <div class="form-group">
        <button type="submit" name="signup" value="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
