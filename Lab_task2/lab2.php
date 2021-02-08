<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $genderErr  = $degreeErr = $dobErr = $bloodErr = "";
$name = $email = $gender = $degree = $dob = $blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  } 
 if (empty($_POST["degree"])) {
    $degreeErr = "must be selected two";
  } else {
    $degree = test_input($_POST["degree"]);
  }

  
  if (empty($_POST["dob"])) {
    $dobErr = "Required";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
   if (empty($_POST["blood"])) {
    $bloodErr = "blood is required";
  } else {
    $blood = test_input($_POST["blood"]);
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
<legend>Students information:</legend>

<p><span class="error">* required field</span></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date of Birth: <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error"><?php echo $dobErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
 
  Blood:
  <select name="blood">
  	 <option value="">Select</option>
	 <option value="A+">A+</option>
	 <option value="A-">A-</option>
	 <option value="B+">B+</option>
	 <option value="B-">B-</option>
	 <option value="AB+">AB+</option>
	 </select>
	   <span class="error">* <?php echo $bloodErr;?></span>
	     <br><br>

	   
  Degree: <br>
<input type="checkbox" name="degree[]" value="SSC"><label>SSC</label><br/>
<input type="checkbox" name="degree[]" value="HSC"><label>HSC</label><br/>
<input type="checkbox" name="degree[]" value="BSC"><label>BSC</label><br/>
<input type="checkbox" name="degree[]" value="MSC"><label>MSC</label><br/>
  <span class="error">* <?php echo $degreeErr;?></span>



 
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</form>
</fieldset>

<?php
echo "<h2>Your Input:</h2>";
echo "Name: ";
echo $name;
echo "<br>";
echo "E-mail: ";
echo $email;
echo "<br>";
echo "Date of birth: ";
echo $dob;
echo "<br>";
echo "Gender: ";
echo $gender;
echo "<br>";
echo "Blood group: ";
echo $blood;
echo "<br>";
echo "Degree:";
echo "<br>";

if(isset($_POST["submit"])){
if(!empty($_POST["degree"])){
foreach($_POST["degree"] as $degree){
echo $degree."<br>";
}
}
}

?>

</body>
</html>

