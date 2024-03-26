<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>division of two number</h1>
<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['fnum'];
	$num2=$_POST['lnum'];
	$div=$num1*$num2;
	echo "<p> The sum of $num1 and $num2 is:$div<h1><p>";
	
}
 ?>
</body>
</html>
