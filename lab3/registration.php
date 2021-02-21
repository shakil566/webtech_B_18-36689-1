<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  


<fieldset> 
<legend>Registration</legend>


<form method="post" action="data.json">  
  Name: <input type="text" name="name" >
  <hr style="height:1px;border-width:0;background-color:gray">

  E-mail: <input type="text" name="email" >
   <hr style="height:1px;border-width:0;background-color:gray">
 
  Username: <input type="text" name="uname" placeholder="Enter username" >
 <hr style="height:1px;border-width:0;background-color:gray">

  
  Password: <input type="password" name="npass" placeholder="Enter new password" >
 <hr style="height:1px;border-width:0;background-color:gray">

  
  Confirm Password: <input type="password" name="rnpass" placeholder="Enter retype new password" >
 
 <hr style="height:1px;border-width:0;background-color:gray">
 
 <fieldset> 
 <legend>Gender</legend>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
</fieldset>
   <hr style="height:1px;border-width:0;background-color:gray">
   
 <fieldset> 
<legend> Date of Birth</legend>
   <input type="date" name="dob" >
   </fieldset>
   <hr style="height:1px;border-width:0;background-color:gray">

  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
</form>
</fieldset>


</body>
</html>

