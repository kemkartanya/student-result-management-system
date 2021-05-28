<?php

	include('config/db_connect.php');

	$id = $_REQUEST['rollID'];

	$sql = "SELECT * FROM students WHERE studentID=$id";

	$result = mysqli_query($conn, $sql);

	$student = mysqli_fetch_assoc($result);

	mysqli_free_result($result);

	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Result Management System</title>
</head>
<body>
	<h1>Your Result</h1>
	<p>Roll Number: <?php echo htmlspecialchars($student['rollID']); ?></p>
	<p>Name: <?php echo htmlspecialchars($student['studentName']); ?></p>
	<p>Class: <?php echo htmlspecialchars($student['classID']); ?></p>
</body>
</html>