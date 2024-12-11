<?php
echo "NAME OF STUDENTS"."<br>";
echo "<br>";
$student=array("Riya","Safa","Ramu","Raju","Hiba");
echo " students in array"."<br>";
print_r($student)."<br>";
echo "<br>";
echo "<br>";

echo " name of student in ascending"."<br>";
asort($student);
print_r($student)."<br>";
echo "<br>";
echo "<br>";

echo " name of student in descending"."<br>";
arsort($student);
print_r($student);

?>