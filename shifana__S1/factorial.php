
<?php 

function Factorial($number)
{ 
	$factorial = 1; 
	for ($i = 1; $i <= $number; $i++)
{ 
	$factorial = $factorial * $i; 
	} 
	return $factorial; 
} 


$number = 4; 
$fact = Factorial($number); 
 
echo "factorial of  " , $number ," is ", $fact;
?> 
