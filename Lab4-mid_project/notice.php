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

div.content {
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
<div class="content">
        <title>Notice</title>  

No notice availabe

<br><br>
<?php include "footer.php"; ?>
</div>
</body>
</html>
