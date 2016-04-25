# PassLogin™ - Multiple Password Login
An a free and open-source multiple password login and it's easy to use and configuration!

# How to install ?
1. Download the reposity
2. Unzip the reposity on your webserver in the directory you want to lock
3. Open the /PasswordLogin/PasswordLogin/config.php and config it
4. Open index.php file
5. Set the index.php file the principal file
6. Add in all of the files in the directory this PHP code:
   <code>&lt;?php if (!$_SESSION["login_in_1"]) { exit("You must log in! <a href=index.php>Login</a>"); } ?&gt;</code>
7. Voilà! That finished ! Now you must only set the passwords on the password.php file! 
