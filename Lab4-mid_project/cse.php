
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
        <title>CSE Books Information</title>  <br>
<h1>CSE Books Information</h1>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    th{ 
        color:#fff;
            }
</style>


<table class="table table-striped">
    <tr  class="bg-info">
        <th>Books Name</th>
        <th>Author</th>
        <th>Available Books</th>
    </tr>

    <tbody id="myTable">
        
    </tbody>
</table>

<script>
	var myArray = [
	    {'bookname':'C++ Programming A Practical Approach	', 'author':'Mothe Madhusudan', 'available':'11'},

	    {'bookname':'Database System Implementation		', 'author':'Garcia-Molina Hector', 'available':'10'},

	    {'bookname':'Data Structures And Algorithms', 'author':'Aho Alfred V. Et.Al', 'available':'18'},

	    {'bookname':'Object Oriented Programming Using C++	', 'author':'Pohl Ira', 'available':'15'},
	    {'bookname':'Operating System, 3/E	', 'author':'Harvey M. Deitel', 'available':'3'},
	    {'bookname':'Software Engineering	', 'author':'Mishra Jibitesh', 'available':'22'},
	]
	
	buildTable(myArray)



	function buildTable(data){
		var table = document.getElementById('myTable')

		for (var i = 0; i < data.length; i++){
			var row = `<tr>
							<td>${data[i].bookname}</td>
							<td>${data[i].author}</td>
							<td>${data[i].available}</td>
					  </tr>`
			table.innerHTML += row


		}
	}

</script>

<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
<br><br>
<?php include "footer.php"; ?>
</div>
</body>
</html>
