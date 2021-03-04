
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
div{
	 margin-left: 200px;
  padding: 1px 16px;
 
}


}
</style>
</head>
<body>  
<?php include "include2.php"; ?>

<?php

?>
<div>
        <title>Books Information</title>  <br>
<a href="cse.php"><img src="cse.png"height="210" width="690" title="Computer Science and Engineering"></a><br><br>
<a href="eee.php"><img src="eee.png"height="210" width="690" title="Electrical and Electronic Engineering"></a><br><br>
<a href="bba.php"><img src="bba.png"height="210" width="690" title="BBA"></a><br><br>

<br><br>
<?php include "footer.php"; ?>
</div>
</body>
</html>
