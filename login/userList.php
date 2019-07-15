<?php
	include_once('admin/server.php');
	$query = "SELECT * FROM book";
	$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
					<title>User Panel</title>
					<link rel="stylesheet" type="text/css" href="css/style1.css">
					<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Type</th>
			<th>Author</th>
			<th>Published IN</th>
			<th>Publisher</th>
			<th>Action</th>
		</tr>
	</thead>
	<a href="index.php">Go Back</a>

	<?php 
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $rows['Book_title']; ?></td>
				<td><?php echo $rows['Book_desc']; ?></td>
				<td><?php echo $rows['Book_type']; ?></td>
				<td><?php echo $rows['Book_author']; ?></td>
				<td><?php echo $rows['Book_published']; ?></td>
				<td><?php echo $rows['Book_publisher']; ?></td>
			</tr>
	<?php
		}

	?>



	

</body>
</html>