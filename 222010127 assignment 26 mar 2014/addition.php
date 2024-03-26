<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['fnum'];
	$num2=$_POST['lnum'];
	$sum=$num1+$num2;
	echo "<p> The sum of $num1 and $num2 is:$sum<h1><p>";
	
}
 ?>