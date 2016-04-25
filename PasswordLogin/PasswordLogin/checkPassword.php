<?php
/***********************
 * Davide Ramondetti *
 * Password Login *
 * Try it now! *
************************/

include('config.php'); // include the configuration
include('password.php'); // include the passwords

if (in_array($_POST['password'],$Passwords)) {
  header("Location: ".$LockedFile);
} else {
  echo "#AdvancedPasswordLogin by Davide Ramondetti : @PASSWORD_ERROR";
}
?>
