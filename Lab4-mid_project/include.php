<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;

}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #9e3333;
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
  background-color: #2c4885;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 61px;
  height: 720px;

  background-color:green;
font-size:25px;

}
h1{
  padding: middle;

 color:tomato;

}

}


</style>
</head>
<body>

<div class="sidebar">
  <a href="home.html">Home</a>
  <a href="login.php">Login</a>
  <a href="create.php">Create Account</a>
  <a href="logout.php">Notice</a>
  <a href="product.php">Contact</a>
  <a href="about.php">About</a>
</div>

</body>
</html>
