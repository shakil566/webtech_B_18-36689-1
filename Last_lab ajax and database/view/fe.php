<html>
	<head>
	<style>
div {
  margin-left: 100px;
 
font-size:21.5px;
	background:#CCC;

</style>
	
	
	
	
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>FE</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<?php include "../view/include2.php"; ?>
	<body>
	
	<?php include "../view/wellcome.php"; ?>
	<div>
		<div class="container">
			<br />
			
			<h2 align="center">Faculty of Engineering</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search with Books name or Authors name" class="form-control" />
				</div>
			</div>
		
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		
		
		<br /><br />
		 <?php include "../view/footer.php"; ?>
		</div>
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../controller/fe_val.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>





