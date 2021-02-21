<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$cpassErr =$npassErr =$rnpassErr ="";
$cpass =$npass=$rnpass="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  if (empty($_POST["cpass"])) {
    $cpassErr = "Password is required";
  } else {
    $cpass = test_input($_POST["cpass"]);
    if (!preg_match("/^[a-zA-Z-0-9_]{8,}[@#$%]{1,}/",$cpass)) {
      $cpassErr = "At least 8 character and must one(@#$%) special character  required";
    }
  } 
  if (empty($_POST["npass"])) {
    $npassErr = "Password is required";
  } else {
    $npass = test_input($_POST["npass"]);
    if (!preg_match("/^[a-zA-Z-0-9_]{8,}[@#$%]{1,}/",$npass)) {
      $npassErr = "At least 8 character and must one(@#$%) special character  required";
    }
  } 
  if (empty($_POST["rnpass"])) {
    $rnpassErr = "Password is required";
  } else {
    $rnpass = test_input($_POST["rnpass"]);
    if (!preg_match("/^[a-zA-Z-0-9_]{8,}[@#$%]{1,}/",$rnpass)) {
      $rnpassErr = "At least 8 character and must one(@#$%) special character  required";
    }
  } 
  if($_POST["cpass"]==$_POST["npass"]){
  $cpassErr="current pass and new pass can not be same";}
  
    if($_POST["npass"]!=$_POST["rnpass"]){
  $npassErr="new pass and retype pass should be same";}
 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<fieldset> 
<legend>CHANGE PASSWORD</legend>

<p><span class="error">* required field</span></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Current Password: <input type="password" name="cpass" placeholder="Enter current password" value="<?php echo $cpass;?>">
  <span class="error">* <?php echo $cpassErr;?></span>
  <br><br>
  
  New Password: <input type="password" name="npass" placeholder="Enter new password" value="<?php echo $npass;?>">
  <span class="error">* <?php echo $npassErr;?></span>
  <br><br>
  
  Retype New Password: <input type="password" name="rnpass" placeholder="Enter retype new password" value="<?php echo $rnpass;?>">
  <span class="error">* <?php echo $rnpassErr;?></span>
  <br><br>
 <hr style="height:1px;border-width:0;background-color:gray">


<br>
  <input type="submit" name="submit" value="Submit">

</form>
</fieldset>



</body>
</html>

