<?php
/**********************
 * Davide Ramondetti *
 * PassLogin System *
 * Try it now! *
***********************/
$buttonToCheck = $_POST['submit'];
if ($buttonToCheck) {
  include('PasswordLogin/checkPassword.php');
} else {
?>

<html>
  <head>
    <title>Login Zone</title>
  </head>
  <body>
    <center>
      <script>
        // there isn't a design ,you can add it!
      </script>
      <form method="POST" action="?">
        <h1>Login</h1>
        <p>Username: <b>XX</b></p>
        <p>Password: <input type="password" name="password" id="password"></p>
        <p><input type="submit" value="Login" name="submit" id="submit"></p>
      </form>
    </center>
  </body>
</html>

<?php } ?>
