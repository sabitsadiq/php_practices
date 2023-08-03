<?php
$usn_error=$em_err=$ps_err="";

$username=$email=$password="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  if (empty($_POST["username"])){
        $usn_error = "username cannot be empty!";
      }else {
    $username=test_input($_POST["username"]);
      }
  if (empty($_POST["email"])) {
        $em_err = "email field is empty!";
      } else {
    $email=test_input($_POST["email"]); 
      }
  if (empty($_POST["password"])) {
      $ps_err = "password field can not be empty!";
    } else {
    $password=test_input($_POST["password"]);
    }    
}

function test_input($data) {
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
      <h1>output:</h1>
      <?php
        // echo($usn_error."</br>".$ps_err."</br>".$em_err);
        
        // echo $username;
        // echo $email;
        // echo $password;
?>
      <h1>User Login</h1>
      </span>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" value="<?php echo $username;?>" placeholder="Enter your username"/>
          <span class="text-danger"><?php echo $usn_error;?></span>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="Enter your password">
          <span class="text-danger"><?php echo $em_err;?></span>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" value="<?php echo $password;?>" placeholder="Enter your password">
          <span class="text-danger"><?php echo $ps_err?></span>
        </div>
      
        <div class="form-group">
          <button type="submit" name="signup" value="submit">Login</button>
        </div>
      </form>
    </div>
</body>
</html>