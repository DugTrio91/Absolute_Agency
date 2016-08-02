<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/admin.css" />
	<title>Admin Area</title>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea#CMS'});</script>

</head>
<div class="admin-login">
<img class="absolute-logo" src="../images/absolute_logo.png" alt="absolute logo">
<br>
<p>This area is reserved for the website administrators only.</p>

<form method="post" action="index.php" name="loginform">

    <input id="login_input_username" class="login_input" type="text" placeholder="Username" name="user_name" required />
    <br>
    <input id="login_input_password" class="login_input" type="password" name="user_password" placeholder="Password" autocomplete="off" required />
    <br>
    <input id="submit" type="submit"  name="login" value="Log in" />
<p>Click <a href="../index.php" title="home"><strong>here</strong></a> to go back to the main website.</p>
</form>
</div>
