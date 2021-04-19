<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
div {
  margin-left: 200px;
  padding: 1px 15px;
font-size:20px;

}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<?php include "../view/include2.php"; ?>
<div>
<table>
<tr>
<th>Username</th>
<th>Gender</th>
<th>Email</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "library");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, uname, gender, email FROM luser";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["uname"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email" ]  ;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<br><br>
 <?php include "../view/footer.php"; ?>
</div>

</body>
</html>