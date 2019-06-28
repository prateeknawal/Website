<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>

	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
 <table class="table table-inverse">
  <thead>
  	<tr> 
	    <th>Id</th>
	    <th>Action</th>
	</tr>
  </thead>
  <tbody>
  <?php foreach ($functions as $function) { ?>
  <tr>
    <td><?=$function['id']?></td>
    <td><?=$function['action']?></td>
  </tr>
  <?php } ?>
  </tbody>
</table> 
</body>
</html>