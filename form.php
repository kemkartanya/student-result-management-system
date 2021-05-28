<?php

	include('config/db_connect.php');

	$sql = 'SELECT * FROM classes';

	$result = mysqli_query($conn, $sql);

	$classes = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Result Management System</title>
	<style type="text/css">
		body{
			background-color: black;
		}
		form{
			background-color: white;
			width: 50%;
			margin: auto;
			margin-top: 200px;
		}
	</style>
</head>
<body>
	
	<form action="result.php" method="POST">
		<label for="rollID">Student RollID :</label><br>
		<input type="text" name="rollID"><br><br>
		
		<label for="class">Class: </label>
		<select id="class">
			<option value="">Select Class</option>
			<?php foreach ($classes as $class ): ?>

			<option value="<?php echo htmlspecialchars($class['classID']); ?>">
				<?php echo htmlspecialchars($class['className']); ?>	
			</option>

			<?php endforeach; ?>
		</select>

		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>