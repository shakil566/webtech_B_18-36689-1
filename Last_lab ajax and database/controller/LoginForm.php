<html>
<head>
<title>LoginForm.php</title>

</head>
<body>
 
<!-- Make a note that the method type used is post, action page is Login.php and validate() function will get called on submit -->
<div style="text-align:center"><h1>PHP Login Form using MySQL</h1></div>
<br>
    <form name="login" method="post" action="process.php" onsubmit="return validate();" >
    <div>Username: <input type="text" name="uname" /> </div>
    <div>Password: <input type="password" name="npass" /> </div>
    <div><input type="submit" value="Login"></input> <input type="reset" value="Reset"></input></div>
</form>
</body>
</html>