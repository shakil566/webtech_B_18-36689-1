<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$unameErr = $passErr ="";
$uname = $pass ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["uname"])) {
    $unameErr = "Username is required";
  } else {
    $uname = test_input($_POST["uname"]);
    if (!preg_match("/^[a-zA-Z-0-9_ ]{2,}/",$uname)) {
      $unameErr = "At least two character required";
    }
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    if (!preg_match("/^[a-zA-Z-0-9_]{8,}[@#$%]{1,}/",$pass)) {
      $passErr = "At least 8 character and must one(@#$%) special character  required";
    }
  } 
 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<fieldset> 
<legend>LOGIN</legend>

<p><span class="error">* required field</span></p>




<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="uname" placeholder="Enter username" value="<?php echo $uname;?>">
  <span class="error">* <?php echo $unameErr;?></span>
  <br><br>
  Password: <input type="password" name="pass" placeholder="Enter password" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
 <hr style="height:1px;border-width:0;background-color:gray">

<input type="checkbox" name="remember" value="remember"><label>Remember Me</label><br/>
<br>
  <input type="submit" name="submit" value="Submit">
  <a href="">Forgot Password?</a>

</form>
</fieldset>



</body>
</html>

