<?php
$connect = mysqli_connect("localhost","root","","redcross");
$select_query="INSERT INTO campinfo VALUES ('$_POST[name]', '$_POST[campcity]', '$_POST[campdate]', '$_POST[type]', '$_POST[one]', '$_POST[two]', '$_POST[two]/$_POST[one]')";
mysqli_query($connect,$select_query);
?>
<html>
<head>
	<title>Data added</title>
</head>
<body>
	<h3>Camp data added</h3>
	<a href = "addcamp.php">Go back</a>
</body>
</html>